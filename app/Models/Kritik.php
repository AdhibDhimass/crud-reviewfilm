<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;

    protected $table = 'kritik';
    protected $fillable = [
        'user_id',
        'film_id',
        'content',  
        'poin',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
