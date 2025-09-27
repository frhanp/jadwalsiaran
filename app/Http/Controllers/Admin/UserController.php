<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])],
            'nik' => ['required_if:role,penyiar', 'nullable', 'string', 'max:16', 'unique:users,nik'],
            'tempat_lahir' => ['required_if:role,penyiar', 'nullable', 'string', 'max:100'],
            'tanggal_lahir' => ['required_if:role,penyiar', 'nullable', 'date'],
            'agama' => ['required_if:role,penyiar', 'nullable', 'string'],
            'jenis_kelamin' => ['required_if:role,penyiar', 'nullable', 'string'],
            'no_telp' => ['required_if:role,penyiar', 'nullable', 'string', 'max:15'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])],
            'nik' => ['required_if:role,penyiar', 'nullable', 'string', 'max:16', Rule::unique(User::class)->ignore($user->id)],
            'tempat_lahir' => ['required_if:role,penyiar', 'nullable', 'string', 'max:100'],
            'tanggal_lahir' => ['required_if:role,penyiar', 'nullable', 'date'],
            'agama' => ['required_if:role,penyiar', 'nullable', 'string'],
            'jenis_kelamin' => ['required_if:role,penyiar', 'nullable', 'string'],
            'no_telp' => ['required_if:role,penyiar', 'nullable', 'string', 'max:15'],
        ]);

        $data = $request->except('password');
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Optional: Tambahkan pengecekan agar user tidak bisa menghapus dirinya sendiri
        if ($user->id === Auth::user()->id) {
            return redirect()->route('admin.users.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
    }
}
