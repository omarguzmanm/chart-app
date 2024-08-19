<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'length',
        'plays',
        'album_id',
    ];

    /**
     * Get the album that owns the song.
     * @return BelongsTo
     */
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

    /**
     * Get the plays for the song.
     * @return HasMany
     */
    public function plays(): HasMany
    {
        return $this->hasMany(Play::class);
    }
}
