<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function Laravel\Prompts\form;

class tickets extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $fillable = ['movie_id', 'customer_name', 'seat_number', 'is_checked_in', 'check_in_time'];

    public function movies(): BelongsTo
    {
        return $this->belongsTo(movies::class, 'movie_id');
    }
}