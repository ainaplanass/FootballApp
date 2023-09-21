<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
        use HasFactory;
    
        protected $fillable = [
            'nom',
            'edat',
            'num',
            'posicio',
            'equip_id',
        ];
    
        public function equip()
        {
            return $this->belongsTo(Equip::class);
        }
   
    
}
