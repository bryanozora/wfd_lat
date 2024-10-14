<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class movies extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $fillable = ['movie_title', 'duration', 'release_date'];

    public function tickets(): HasMany
    {
        return $this->hasMany(tickets::class, 'movie_id');
    }
}
