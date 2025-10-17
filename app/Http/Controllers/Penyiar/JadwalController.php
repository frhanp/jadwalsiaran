<?php

namespace App\Http\Controllers\Penyiar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sequence;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalPetugas;
use Carbon\Carbon;

class JadwalController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        
        $jadwalPetugasList = JadwalPetugas::whereHas('penyiars', function ($query) {
                $query->where('penyiar_id', Auth::id());
            })
            ->whereDate('tanggal', $today)
            ->with([
                'program.studio',
                'program.sequences' => fn($q) => $q->orderBy('waktu', 'asc'),
                'pendengars' => fn($q) => $q->orderBy('created_at', 'desc')
            ])
            ->withCount('pendengars')
            ->get();

        return view('penyiar.jadwal.index', compact('jadwalPetugasList'));
    }
}
