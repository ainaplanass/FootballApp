<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function equip()
    {
        return $this->belongsTo(Equip::class);
    }
}
