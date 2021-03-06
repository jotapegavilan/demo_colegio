<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['number','name','total_capacity','accepted'];
    
    // Accesorio para concatenar number y letter
    public function getFullNameAttribute()
    {
        return $this->number . '-' . $this->name;
    }

    //Relación 1 a muchos
    public function postulantes(){
        return $this->hasMany(Postulante::class);
    }
}


