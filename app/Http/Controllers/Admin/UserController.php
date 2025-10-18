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
    public function index(Request $request)
    {
        $query = User::with('studio')->latest();

        // Filter berdasarkan Role
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        // Filter berdasarkan Studio
        if ($request->filled('studio_id')) {
            if ($request->studio_id == 'none') {
                $query->whereNull('studio_id');
            } else {
                $query->where('studio_id', $request->studio_id);
            }
        }

        $users = $query->paginate(10)->withQueryString(); // Append filter ke pagination links

        // Data untuk dropdown filter
        $studios = Studio::orderBy('nama')->get();
        $roles = ['admin', 'penyiar', 'katim', 'kepsta']; // Definisikan role yang mungkin

        // --- AKHIR MODIFIKASI ---

        // Kirim data filter ke view
        return view('admin.users.index', compact('users', 'studios', 'roles', 'request'));
    }

    public function create()
    {
        $studios = Studio::orderBy('nama')->get(); // Ambil data studio
        return view('admin.users.create', compact('studios')); // Kirim ke view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])],
            'studio_id' => ['nullable', 'exists:studios,id'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'studio_id' => $request->studio_id,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        $studios = Studio::orderBy('nama')->get(); // Ambil data studio
        return view('admin.users.edit', compact('user', 'studios')); // Kirim ke view
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])],
            'studio_id' => ['nullable', 'exists:studios,id'],
        ]);

        $data = $request->except('password');
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        if ($user->id === Auth::user()->id) {
            return redirect()->route('admin.users.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
    }
}
