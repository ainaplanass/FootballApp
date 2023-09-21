<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function jugador()
    {
        return $this->hasMany(Jugador::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function entrenador()
    {
        return $this->hasMany(Entrenador::class);
    }
    public function clubEsportiu()
    {
        return $this->belongsTo(ClubEsportiu::class, 'clubs_esportius_id');
    }
}
