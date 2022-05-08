<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    public function Citas(){
        return $this->belongsTo(Citas::class, 'medico_id');
    }
}
