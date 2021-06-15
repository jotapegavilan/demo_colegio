<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Postulante extends Model
{
    use HasFactory;

    protected $fillable = ['names','surname_1','surname_2','date_of_birth','statu_id','age_id','user_id','curso_id'];

    

    public function getFullNameAttribute()
    {
        return $this->names . ' ' . $this->surname_1.' '.$this->surname_2;
    }

    //Relación 1 a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación 1 a muchos inversa
    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    //Relación 1 a muchos inversa
    public function statu(){
        return $this->belongsTo(Statu::class);
    }

    //Relación 1 a muchos inversa
    public function age(){
        return $this->belongsTo(Age::class);
    }


    //Relación 1 a 1 polimorfica
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    //Relación 1 a muchos polimorfica
    public function documents()
    {
        return $this->morphToMany(Image::class,'documentable');
    }
}

