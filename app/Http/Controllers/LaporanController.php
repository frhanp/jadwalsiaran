<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\JadwalPetugas;
use Carbon\Carbon;
use App\Models\Sequence;
use App\Models\Studio;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate(['tanggal' => 'nullable|date_format:Y-m-d']);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();

        // Ambil program yang terjadwal hari itu, lalu kelompokkan berdasarkan studio
        $programs = Program::with([
                'studio',
                'sequences' => fn($q) => $q->orderBy('waktu', 'asc'),
                'sequences.host', 
                'sequences.items' => fn($q) => $q->orderBy('id', 'asc'),
                'sequences.items.materiDetails', 
                'sequences.items.itemDetails'
            ])
            ->whereHas('jadwalPetugas', fn($q) => $q->whereDate('tanggal', $tanggal))
            ->get()
            ->sortBy('sequences.0.waktu');
        
        $jadwalPerStudio = $programs->groupBy('studio.nama');
        $studios = Studio::whereIn('id', $programs->pluck('studio_id')->unique())->orderBy('nama')->get();
        
        $jadwalPetugas = JadwalPetugas::with(['penyiars', 'pendengars'])
            ->whereDate('tanggal', $tanggal)
            ->get()->keyBy('program_id');

        return view('laporan.jadwal', compact('studios', 'jadwalPerStudio', 'jadwalPetugas', 'tanggal'));
    }

    public function cetak(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'nullable|date_format:Y-m-d',
            'program' => 'nullable|exists:programs,id'
        ]);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();
        
        $programQuery = Program::query();

        if (isset($validated['program'])) {
            $programQuery->where('id', $validated['program']);
        }

        $programs = $programQuery->with([
            'sequences' => fn ($q) => $q->orderBy('waktu', 'asc'),
            'sequences.host', 
            'sequences.items' => fn ($q) => $q->orderBy('id', 'asc'),
            'sequences.items.materiDetails', 
            'sequences.items.itemDetails'
        ])
        ->whereHas('jadwalPetugas', fn ($q) => $q->whereDate('tanggal', $tanggal))
        ->get();
        
        $jadwalPetugas = JadwalPetugas::with(['penyiars', 'pendengars'])
            ->whereDate('tanggal', $tanggal)
            ->get()->keyBy('program_id');
        
        return view('laporan.jadwal_print', compact('programs', 'jadwalPetugas', 'tanggal'));
    }


}
