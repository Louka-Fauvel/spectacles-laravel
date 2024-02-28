<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'date',
        'nb_clients',
        'room_id',
    ];

    public function room(): BelongsTo {
        return $this->belongsTo(Room::class);
    }

    public function clients(): HasMany {
        return $this->hasMany(Client::class);
    }

    public function artists(): BelongsToMany {
        return $this->belongsToMany(Artist::class);
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
