<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\JadwalPetugas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JadwalPetugasController extends Controller
{
    public function index(Program $program)
    {
        $jadwalPetugas = $program->jadwalPetugas()->with('produser', 'pengarahAcara', 'penyiars')->orderBy('tanggal', 'desc')->paginate(15);
        return view('admin.petugas.index', compact('program', 'jadwalPetugas'));
    }

    public function create(Program $program)
    {
        $users = User::orderBy('name')->get();
        $penyiars = User::where('role', 'penyiar')->orderBy('name')->get();
        return view('admin.petugas.create', compact('program', 'users', 'penyiars'));
    }

    public function store(Request $request, Program $program)
    {
        $request->validate([
            'tanggal' => [
                'required',
                'date',
                Rule::unique('jadwal_petugas')->where(function ($query) use ($program) {
                    return $query->where('program_id', $program->id);
                }),
            ],
            'produser_id' => 'nullable|exists:users,id',
            'pengelola_pep_id' => 'nullable|exists:users,id',
            'pengarah_acara_id' => 'nullable|exists:users,id',
            'petugas_lpu_id' => 'nullable|exists:users,id',
            'penyiars' => 'nullable|array',
            'penyiars.*' => 'exists:users,id',
        ], [
            'tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.',
        ]);

        $jadwalPetugas = $program->jadwalPetugas()->create($request->except('penyiars') + ['dibuat_oleh' => Auth::id()]);
        $jadwalPetugas->penyiars()->sync($request->input('penyiars', []));
        // AKHIR MODIFIKASI

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil ditambahkan.');
    }

    public function edit(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $users = User::orderBy('name')->get();
        $penyiars = User::where('role', 'penyiar')->orderBy('name')->get();
        $jadwalPetugas->load('penyiars'); // Eager load penyiar untuk form edit
        return view('admin.petugas.edit', compact('program', 'jadwalPetugas', 'users', 'penyiars'));
    }

    public function update(Request $request, Program $program, JadwalPetugas $jadwalPetugas)
    {
        $request->validate([
            'tanggal' => [
                'required',
                'date',
                Rule::unique('jadwal_petugas')->where(function ($query) use ($program) {
                    return $query->where('program_id', $program->id);
                })->ignore($jadwalPetugas->id),
            ],
            'produser_id' => 'nullable|exists:users,id',
            'pengelola_pep_id' => 'nullable|exists:users,id',
            'pengarah_acara_id' => 'nullable|exists:users,id',
            'petugas_lpu_id' => 'nullable|exists:users,id',
            'penyiars' => 'nullable|array',
            'penyiars.*' => 'exists:users,id',
        ], [
            'tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.',
        ]);

        $jadwalPetugas->update($request->except('penyiars'));
        $jadwalPetugas->penyiars()->sync($request->input('penyiars', []));

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil diperbarui.');
    }

    public function destroy(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $jadwalPetugas->delete();
        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil dihapus.');
    }
}
