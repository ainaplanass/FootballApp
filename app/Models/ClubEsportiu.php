<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubEsportiu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function equips()
    {
        return $this->hasMany(Equip::class);
    }
}
