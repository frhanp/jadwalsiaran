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
        $jadwalPetugas = $program->jadwalPetugas()->with('penyiars')->orderBy('tanggal', 'desc')->paginate(15);
        return view('admin.petugas.index', compact('program', 'jadwalPetugas'));
    }

    public function create(Program $program)
    {
        $penyiars = User::where('role', 'penyiar')->orderBy('name')->get();
        return view('admin.petugas.create', compact('program', 'penyiars'));
    }

    public function store(Request $request, Program $program)
    {
        $validatedData = $request->validate([
            'tanggal' => [
                'required', 'date',
                Rule::unique('jadwal_petugas')->where(fn ($query) => $query->where('program_id', $program->id)),
            ],
            'produser_nama' => 'nullable|string|max:255',
            'pengelola_pep_nama' => 'nullable|string|max:255',
            'pengarah_acara_nama' => 'nullable|string|max:255',
            'petugas_lpu_nama' => 'nullable|string|max:255',
            'penyiars' => 'nullable|array',
            'penyiars.*' => 'exists:users,id',
        ], ['tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.']);


        $jadwalPetugas = $program->jadwalPetugas()->create($validatedData + ['dibuat_oleh' => Auth::id()]);
        $penyiarIds = $request->input('penyiars', []);
        $jadwalPetugas->penyiars()->sync($penyiarIds);

        // --- LOGIKA BARU DITAMBAHKAN ---
        // Panggil fungsi untuk update host_id di semua sequence terkait program ini
        $this->updateProgramSequencesHost($program, $penyiarIds);
        // --- AKHIR LOGIKA BARU ---

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil ditambahkan. Host di sequence terkait telah diperbarui.');
        // AKHIR MODIFIKASI
    }

    public function edit(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $penyiars = User::where('role', 'penyiar')->orderBy('name')->get();
        $jadwalPetugas->load('penyiars');
        return view('admin.petugas.edit', compact('program', 'jadwalPetugas', 'penyiars'));
    }

    public function update(Request $request, Program $program, JadwalPetugas $jadwalPetugas)
    {
        $validatedData = $request->validate([
            'tanggal' => [
                'required', 'date',
                Rule::unique('jadwal_petugas')->where(fn ($query) => $query->where('program_id', $program->id))->ignore($jadwalPetugas->id),
            ],
            'produser_nama' => 'nullable|string|max:255',
            'pengelola_pep_nama' => 'nullable|string|max:255',
            'pengarah_acara_nama' => 'nullable|string|max:255',
            'petugas_lpu_nama' => 'nullable|string|max:255',
            'penyiars' => 'nullable|array',
            'penyiars.*' => 'exists:users,id',
        ], ['tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.']);
        

        $jadwalPetugas->update($validatedData);
        $penyiarIds = $request->input('penyiars', []);
        $jadwalPetugas->penyiars()->sync($penyiarIds);
        
        // --- LOGIKA BARU DITAMBAHKAN ---
        // Panggil fungsi untuk update host_id di semua sequence terkait program ini
        $this->updateProgramSequencesHost($program, $penyiarIds);
        // --- AKHIR LOGIKA BARU ---

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil diperbarui. Host di sequence terkait telah diperbarui.');
        // AKHIR MODIFIKASI
    }

    public function destroy(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $jadwalPetugas->delete();
        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil dihapus.');
    }

    private function updateProgramSequencesHost(Program $program, array $penyiarIds)
    {
        // Ambil ID penyiar pertama, atau null jika tidak ada penyiar yang dipilih
        // Ini sesuai logika di LaporanController
        $hostId = $penyiarIds[0] ?? null; 

        // Update semua sequence yang dimiliki oleh program ini
        $program->sequences()->update(['host_id' => $hostId]);
    }
}
