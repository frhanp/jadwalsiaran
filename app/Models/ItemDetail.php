<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'jenis',
        'isi',
        'dibuat_oleh',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(SequenceItem::class, 'item_id');
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}
