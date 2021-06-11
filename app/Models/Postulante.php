<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;

    protected $fillable = ['names','surnames','date_of_birth','status','user_id','curso_id'];


    //Relación 1 a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación 1 a muchos inversa
    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    //Relación 1 a 1 polimorfica
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
