<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class LaporanController extends Controller
{
    public function index()
    {
        // Ambil semua program beserta relasi-relasi turunannya
        $programs = Program::with([
            'sequences' => function ($query) {
                $query->orderBy('waktu', 'asc');
            },
            'sequences.host',
            'sequences.items' => function ($query) {
                $query->orderBy('id', 'asc'); // Urutkan item berdasarkan urutan input
            },
            'sequences.items.materiDetails',
            'sequences.items.itemDetails'
        ])
        ->whereHas('sequences') // Hanya tampilkan program yang memiliki sequence
        ->get();

        return view('laporan.jadwal', compact('programs'));
    }
}
