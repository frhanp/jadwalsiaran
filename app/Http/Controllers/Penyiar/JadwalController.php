<?php

namespace App\Http\Controllers\Penyiar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sequence;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    /**
     * Menampilkan daftar sequence yang ditugaskan untuk penyiar yang sedang login.
     */
    public function index()
    {
        $sequences = Sequence::with('program.studio')

            ->where('host_id', Auth::id())
            ->orderBy('waktu', 'asc')
            ->paginate(15);

        return view('penyiar.jadwal.index', compact('sequences'));
    }
}
