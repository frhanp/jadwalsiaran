<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\JadwalPetugas;
use App\Models\User;
use Carbon\Carbon;

class JadwalDitolakPenyiar extends Notification
{
    use Queueable;

    protected $jadwalPetugas;
    protected $penyiar;
    protected $alasan;

    /**
     * Create a new notification instance.
     */
    public function __construct(JadwalPetugas $jadwalPetugas, User $penyiar, string $alasan)
    {
        $this->jadwalPetugas = $jadwalPetugas;
        $this->penyiar = $penyiar;
        $this->alasan = $alasan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database']; // Simpan ke database
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $namaProgram = $this->jadwalPetugas->program->nama;
        $tanggal = Carbon::parse($this->jadwalPetugas->tanggal)->isoFormat('D MMM Y');

        return [
            'message' => "Penyiar {$this->penyiar->name} menolak tugas untuk program '{$namaProgram}' ({$tanggal}). Alasan: \"{$this->alasan}\"",
            'url' => route('admin.programs.petugas.index', $this->jadwalPetugas->program_id), // Link ke halaman kelola petugas
            'program_id' => $this->jadwalPetugas->program_id,
        ];
    }
}
