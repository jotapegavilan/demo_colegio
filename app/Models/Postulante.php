<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;

    //Relación 1 a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación 1 a muchos inversa
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
