<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lliga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'temporada',

    ];

    public function partits()
    {
        return $this->hasMany(Partit::class);
    }
}
