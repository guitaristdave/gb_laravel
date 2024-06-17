<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'title',
        'studio',
        'genre',
        'year'
    ];
}
