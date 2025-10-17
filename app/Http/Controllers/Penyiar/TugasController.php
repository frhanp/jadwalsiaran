<?php

namespace App\Http\Controllers\Penyiar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPetugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function terima(JadwalPetugas $jadwalPetugas)
    {
        DB::table('jadwal_penyiar')
            ->where('jadwal_petugas_id', $jadwalPetugas->id)
            ->where('penyiar_id', Auth::id())
            ->update(['status' => 'diterima']);
        
        // Pastikan host_id di-set kembali jika sebelumnya pernah ditolak
        $jadwalPetugas->program->sequences()->update(['host_id' => Auth::id()]);

        return back()->with('success', 'Jadwal siaran berhasil Anda terima.');
    }

    public function tolak(Request $request, JadwalPetugas $jadwalPetugas)
    {
        $request->validate(['alasan_penolakan' => 'required|string|min:10']);

        DB::table('jadwal_penyiar')
            ->where('jadwal_petugas_id', $jadwalPetugas->id)
            ->where('penyiar_id', Auth::id())
            ->update([
                'status' => 'ditolak',
                'alasan_penolakan' => $request->alasan_penolakan,
            ]);

        // Hapus akses penyiar dari sequence terkait
        $jadwalPetugas->program->sequences()->where('host_id', Auth::id())->update(['host_id' => null]);
        
        // Kirim notifikasi ke Admin (akan diimplementasikan nanti jika diperlukan)

        return back()->with('success', 'Jadwal siaran berhasil ditolak.');
    }
}
