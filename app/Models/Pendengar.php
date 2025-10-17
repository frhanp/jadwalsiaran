<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendengar extends Model
{
    use HasFactory;

    protected $fillable = [
        'jadwal_petugas_id',
        'nama',
        'komentar',
    ];

    public function jadwalPetugas(): BelongsTo
    {
        return $this->belongsTo(JadwalPetugas::class);
    }
}
