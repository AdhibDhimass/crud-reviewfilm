<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table =  'cast';
    protected $fillable = ['nama', 'umur', 'bio'];
    use HasFactory;
}
