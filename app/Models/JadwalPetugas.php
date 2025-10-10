<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JadwalPetugas extends Model
{
    use HasFactory;

    protected $table = 'jadwal_petugas';

    protected $fillable = [
        'tanggal',
        'program_id',
        'produser_id',
        'pengelola_pep_id',
        'pengarah_acara_id',
        'petugas_lpu_id',
        'dibuat_oleh',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function produser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'produser_id');
    }

    public function pengelolaPep(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pengelola_pep_id');
    }

    public function pengarahAcara(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pengarah_acara_id');
    }

    public function petugasLpu(): BelongsTo
    {
        return $this->belongsTo(User::class, 'petugas_lpu_id');
    }
    
    public function penyiars(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'jadwal_penyiar', 'jadwal_petugas_id', 'penyiar_id');
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}
