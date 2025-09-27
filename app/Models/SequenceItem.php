<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SequenceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'sequence_id',
        'materi',
        'frame',
        'durasi',
        'keterangan',
        'dibuat_oleh',
    ];

    public function sequence(): BelongsTo
    {
        return $this->belongsTo(Sequence::class);
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function materiDetails(): HasMany
    {
        return $this->hasMany(MateriDetail::class, 'item_id');
    }

    public function itemDetails(): HasMany
    {
        return $this->hasMany(ItemDetail::class, 'item_id');
    }
}
