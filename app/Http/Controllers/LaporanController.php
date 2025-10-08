<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\JadwalPetugas;
use Carbon\Carbon;
use App\Models\Sequence;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // Validasi input tanggal, jika tidak ada, gunakan tanggal hari ini
        $validated = $request->validate(['tanggal' => 'nullable|date_format:Y-m-d']);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();

        // Ambil program dan urutkan berdasarkan waktu sequence paling awal
        $programs = Program::with([
            'sequences' => function ($query) {
                $query->orderBy('waktu', 'asc');
            },
            'sequences.host',
            'sequences.items' => function ($query) {
                $query->orderBy('id', 'asc');
            },
            'sequences.items.materiDetails',
            'sequences.items.itemDetails'
        ])
        ->whereHas('jadwalPetugas', function ($query) use ($tanggal) {
            $query->whereDate('tanggal', $tanggal);
        })
        ->orderBy(
            Sequence::select('waktu')
                ->whereColumn('program_id', 'programs.id')
                ->orderBy('waktu', 'asc')
                ->limit(1)
        )
        ->get();

        // Ambil data petugas untuk semua program pada tanggal yang dipilih
        $jadwalPetugas = JadwalPetugas::with('produser', 'pengelolaPep', 'pengarahAcara', 'petugasLpu', 'penyiarDinas')
            ->where('tanggal', $tanggal->format('Y-m-d'))
            ->get()
            ->keyBy('program_id');

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
        ->whereHas('jadwalPetugas', function ($query) use ($tanggal) {
            $query->whereDate('tanggal', $tanggal);
        })
        ->orderBy(
            Sequence::select('waktu')
                ->whereColumn('program_id', 'programs.id')
                ->orderBy('waktu', 'asc')
                ->limit(1)
        )
        ->get();

        $jadwalPetugas = JadwalPetugas::with('produser', 'pengelolaPep', 'pengarahAcara', 'petugasLpu', 'penyiarDinas')
            ->where('tanggal', $tanggal->format('Y-m-d'))
            ->get()->keyBy('program_id');
        
        return view('laporan.jadwal_print', compact('programs', 'jadwalPetugas', 'tanggal'));
    }
}
