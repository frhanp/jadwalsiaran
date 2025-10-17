<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JadwalPetugas extends Model
{
    use HasFactory;

    protected $table = 'jadwal_petugas';

    protected $fillable = [
        'tanggal',
        'program_id',
        'produser_nama',
        'pengelola_pep_nama',
        'pengarah_acara_nama',
        'petugas_lpu_nama',
        'dibuat_oleh',
    ];  

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
    
    public function penyiars(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'jadwal_penyiar', 'jadwal_petugas_id', 'penyiar_id')
                    ->withPivot('status', 'alasan_penolakan')
                    ->withTimestamps();
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function pendengars(): HasMany
    {
        return $this->hasMany(Pendengar::class);
    }
}
