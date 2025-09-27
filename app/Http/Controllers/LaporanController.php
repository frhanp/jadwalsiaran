<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\JadwalPetugas;
use Carbon\Carbon;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // Validasi input tanggal, jika tidak ada, gunakan tanggal hari ini
        $validated = $request->validate(['tanggal' => 'nullable|date_format:Y-m-d']);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();

        // Ambil program yang memiliki sequence pada tanggal yang dipilih
        $programs = Program::with([
            'sequences' => function ($query) use ($tanggal) {
                // Eager load hanya sequence yang relevan (meskipun tidak ada kolom tanggal di sequence, ini untuk relasi)
                // Filter utama ada di whereHas
                $query->orderBy('waktu', 'asc');
            },
            'sequences.host',
            'sequences.items' => function ($query) {
                $query->orderBy('id', 'asc');
            },
            'sequences.items.materiDetails',
            'sequences.items.itemDetails'
        ])
        ->whereHas('sequences') // Hanya program yang punya sequence
        ->get();

        // Ambil data petugas untuk semua program pada tanggal yang dipilih
        $jadwalPetugas = JadwalPetugas::with('produser', 'pengelolaPep', 'pengarahAcara', 'petugasLpu', 'penyiarDinas')
            ->where('tanggal', $tanggal->format('Y-m-d'))
            ->get()
            ->keyBy('program_id'); // Jadikan program_id sebagai key untuk pencarian mudah di view

        return view('laporan.jadwal', compact('programs', 'jadwalPetugas', 'tanggal'));
    }

    public function cetak(Request $request)
    {
        // Logika pengambilan data sama persis dengan method index
        $validated = $request->validate(['tanggal' => 'nullable|date_format:Y-m-d']);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();

        $programs = Program::with([
            'sequences' => function ($query) { $query->orderBy('waktu', 'asc'); },
            'sequences.host', 'sequences.items' => function ($query) { $query->orderBy('id', 'asc'); },
            'sequences.items.materiDetails', 'sequences.items.itemDetails'
        ])
        ->whereHas('sequences')->get();

        $jadwalPetugas = JadwalPetugas::with('produser', 'pengelolaPep', 'pengarahAcara', 'petugasLpu', 'penyiarDinas')
            ->where('tanggal', $tanggal->format('Y-m-d'))
            ->get()->keyBy('program_id');
        
        // Panggil view yang berbeda, yaitu jadwal_print
        return view('laporan.jadwal_print', compact('programs', 'jadwalPetugas', 'tanggal'));
    }
}
