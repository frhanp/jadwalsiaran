<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\JadwalPetugas;
use Carbon\Carbon;

class JadwalSiaranDitugaskan extends Notification
{
    use Queueable;

    protected $jadwalPetugas;

    /**
     * Create a new notification instance.
     */
    public function __construct(JadwalPetugas $jadwalPetugas)
    {
        $this->jadwalPetugas = $jadwalPetugas;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $namaProgram = $this->jadwalPetugas->program->nama;
        $tanggal = Carbon::parse($this->jadwalPetugas->tanggal)->isoFormat('dddd, D MMMM Y');

        return [
            'message' => "Anda ditugaskan untuk program '{$namaProgram}' pada hari {$tanggal}.",
            'url' => route('penyiar.jadwal.index'),
            'program_id' => $this->jadwalPetugas->program_id,
        ];
    }
}
