<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nb_room',
        'nb_clients_max',
        'place_id',
    ];

    public function place(): BelongsTo {
        return $this->belongsTo(Place::class);
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class);
    }
}
