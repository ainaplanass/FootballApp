<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'logo_path'
    ];

    public function jugadors()
    {
        return $this->hasMany(Jugador::class, 'equip_id');
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function entrenador()
    {
        return $this->hasMany(Entrenador::class);
    }
    public function clubsEsportiu()
    {
        return $this->belongsTo(ClubsEsportiu::class, 'clubs_esportius_id');
    }
 
}
