<?php

namespace App\Http\Controllers\Penyiar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPetugas;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendengar;

class PendengarController extends Controller
{
    private function authorizePenyiar(JadwalPetugas $jadwalPetugas)
    {
        // Memastikan penyiar yang login memang bertugas di jadwal tersebut
        if (! $jadwalPetugas->penyiars()->where('penyiar_id', Auth::id())->exists()) {
            abort(403, 'AKSES DITOLAK.');
        }
    }

    public function store(Request $request, JadwalPetugas $jadwalPetugas)
    {
        $this->authorizePenyiar($jadwalPetugas);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'komentar' => 'required|string',
        ]);

        $jadwalPetugas->pendengars()->create($validated);

        return back()->with('success', 'Data pendengar berhasil ditambahkan.');
    }

    public function destroy(Pendengar $pendengar)
    {
        $this->authorizePenyiar($pendengar->jadwalPetugas);

        $pendengar->delete();

        return back()->with('success', 'Data pendengar berhasil dihapus.');
    }
}
