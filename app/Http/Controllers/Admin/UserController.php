<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Studio;

class UserController extends Controller
{
    private function authorizeAdminAccess(User $targetUser = null)
    {
        $admin = Auth::user();
        if ($admin->role === 'admin') {
            // Admin hanya boleh berinteraksi dengan Penyiar
            if ($targetUser && $targetUser->role !== 'penyiar') {
                abort(403, 'AKSES DITOLAK. Admin hanya dapat mengelola pengguna dengan role Penyiar.');
            }
            // Jika Admin terikat studio, target user juga harus di studio yang sama
            if ($admin->studio_id && $targetUser && $targetUser->studio_id !== $admin->studio_id) {
                 abort(403, 'AKSES DITOLAK. Anda hanya dapat mengelola Penyiar dari studio Anda.');
            }
        }
        // Katim tidak dibatasi di sini
    }

    public function index(Request $request)
    {
        $admin = Auth::user(); // Ambil user yang login
        $query = User::with('studio')->latest();

        if ($admin->role === 'admin') {
            $query->where('role', 'penyiar'); // Admin hanya lihat penyiar
            if ($admin->studio_id) {
                $query->where('studio_id', $admin->studio_id); // Filter studio jika admin terikat
            }
        }

        // Filter manual dari form (tetap berlaku dalam batasan di atas)
        if ($request->filled('role')) {
            // Jika admin filter role, pastikan hanya 'penyiar' yang bisa dipilih (meskipun view harusnya sudah handle ini)
            if ($admin->role === 'admin' && $request->role !== 'penyiar'){
                // Abaikan filter role jika admin mencoba filter selain penyiar
            } else {
                $query->where('role', $request->role);
            }
       }
       if ($request->filled('studio_id')) {
            // Jika admin terikat studio, abaikan filter studio dari form
            if (!($admin->role === 'admin' && $admin->studio_id)) {
               if ($request->studio_id == 'none') {
                   $query->whereNull('studio_id');
               } else {
                   $query->where('studio_id', $request->studio_id);
               }
            }
       }

       $users = $query->paginate(10)->withQueryString();
       $studios = Studio::orderBy('nama')->get();
       $roles = ['admin', 'penyiar', 'katim', 'kepsta'];

       // Kirim role admin ke view untuk penyesuaian tampilan filter
       return view('admin.users.index', compact('users', 'studios', 'roles', 'request', 'admin'));
   }

   public function create()
   {
       $admin = Auth::user();
       $studios = Studio::orderBy('nama')->get();
       // Definisikan roles yang boleh dipilih
       $rolesAllowed = ($admin->role === 'admin') ? ['penyiar'] : ['admin', 'penyiar', 'katim', 'kepsta'];
       return view('admin.users.create', compact('studios', 'admin', 'rolesAllowed'));
   }

   public function store(Request $request)
   {
       $admin = Auth::user();
       $rolesAllowed = ($admin->role === 'admin') ? ['penyiar'] : ['admin', 'penyiar', 'katim', 'kepsta'];

       $validationRules = [
           'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
           'password' => ['required', 'confirmed', Rules\Password::defaults()],
           'role' => ['required', Rule::in($rolesAllowed)], // Validasi role berdasarkan pembuat
           'studio_id' => ['nullable', 'exists:studios,id'],
       ];

       // Jika Admin terikat studio, studio_id tidak perlu divalidasi (karena akan diisi otomatis)
       // Jika Admin tidak terikat studio (super admin), studio_id boleh null atau diisi
        if ($admin->role === 'admin' && $admin->studio_id) {
            unset($validationRules['studio_id']); // Hapus validasi jika admin terikat studio
        }

       $validatedData = $request->validate($validationRules);

       if ($admin->role === 'admin' && $admin->studio_id) {
           $validatedData['studio_id'] = $admin->studio_id;
       }

       User::create([
           'name' => $validatedData['name'],
           'email' => $validatedData['email'],
           'password' => Hash::make($validatedData['password']),
           'role' => $validatedData['role'],
           'studio_id' => $validatedData['studio_id'] ?? null, // Gunakan null jika tidak ada
       ]);

       return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan.');
   }

   public function edit(User $user)
   {
       $this->authorizeAdminAccess($user); // Otorisasi akses edit
       $admin = Auth::user();
       $studios = Studio::orderBy('nama')->get();
       $rolesAllowed = ['admin', 'penyiar', 'katim', 'kepsta']; // Untuk Katim
       // Admin hanya bisa edit penyiar, role & studio disabled di view
       return view('admin.users.edit', compact('user', 'studios', 'admin', 'rolesAllowed'));
   }

   public function update(Request $request, User $user)
   {
       $this->authorizeAdminAccess($user); // Otorisasi akses update
       $admin = Auth::user();

       $validationRules = [
           'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
           'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
       ];

       // Hanya Katim yang bisa mengubah role dan studio
       if ($admin->role === 'katim') {
            $validationRules['role'] = ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])];
            $validationRules['studio_id'] = ['nullable', 'exists:studios,id'];
       }

       $validatedData = $request->validate($validationRules);

       $data = $request->only('name', 'email'); // Ambil field yang pasti boleh diubah

       if ($admin->role === 'katim') {
           $data['role'] = $validatedData['role'];
           $data['studio_id'] = $validatedData['studio_id'] ?? null;
       }

       if ($request->filled('password')) {
           $data['password'] = Hash::make($validatedData['password']);
       }

       $user->update($data);

       return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui.');
   }

   public function destroy(User $user)
   {
       $this->authorizeAdminAccess($user); // Otorisasi hapus

       if ($user->id === Auth::user()->id) {
           return redirect()->route('admin.users.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
       }

       $user->delete();

       return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
   }
}
