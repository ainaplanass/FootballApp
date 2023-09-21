<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partit extends Model
{
    use HasFactory;

    protected $fillable = [
        'resultat',
        'data',
        'temps',
        'estadi',
        'equipLocal_id',
        'equipVisitant_id',
        'lliga_id',
    ];

    public function equipLocal()
    {
        return $this->belongsTo(Equip::class, 'equipLocal_id');
    }

    public function equipVisitant()
    {
        return $this->belongsTo(Equip::class, 'equipVisitant_id');
    }

    public function lliga()
    {
        return $this->belongsTo(Lliga::class);
    }
    
}
