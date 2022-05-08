<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    public function Usuario(){
        return $this->hasMany(User::class, 'id');
    }
     public function Medico(){
        return $this->hasMany(User::class, 'id');
    }
}
