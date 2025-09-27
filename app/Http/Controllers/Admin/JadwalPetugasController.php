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
        $jadwalPetugas = $program->jadwalPetugas()->with('produser', 'pengarahAcara')->orderBy('tanggal', 'desc')->paginate(15);
        return view('admin.petugas.index', compact('program', 'jadwalPetugas'));
    }

    public function create(Program $program)
    {
        $users = User::orderBy('name')->get();
        return view('admin.petugas.create', compact('program', 'users'));
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
            'penyiar_dinas_id' => 'nullable|exists:users,id',
        ], [
            'tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.',
        ]);

        $program->jadwalPetugas()->create($request->all() + ['dibuat_oleh' => Auth::id()]);

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil ditambahkan.');
    }

    public function edit(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $users = User::orderBy('name')->get();
        return view('admin.petugas.edit', compact('program', 'jadwalPetugas', 'users'));
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
            'penyiar_dinas_id' => 'nullable|exists:users,id',
        ], [
            'tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.',
        ]);
        
        $jadwalPetugas->update($request->all());

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
