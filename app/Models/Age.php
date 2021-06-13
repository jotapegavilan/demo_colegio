<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    //Relación 1 a muchos
    public function postulantes(){
        return $this->hasMany(Postulante::class);
    }
}
