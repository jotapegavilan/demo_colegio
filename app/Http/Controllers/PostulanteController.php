<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;
use Carbon\Carbon;

class PostulanteController extends Controller
{
    public function index()
    {
        $postulantes = Postulante::latest('id')->paginate(10);
        return view('postulantes.index',compact('postulantes'));
    }

    public function show(Postulante $postulante)
    {
        $similares = Postulante::where('status',$postulante->status)
        ->where('id','!=',$postulante->id)
        ->latest('id')
        ->take(4)
        ->get();
        $fecha = Carbon::parse($postulante->date_of_birth, 'UTC')->locale('es');
        $fecha = $fecha->isoFormat('D MMMM YYYY');
        $edad = Carbon::parse($postulante->date_of_birth)->age;
        return view('postulantes.show',compact('postulante','similares','fecha','edad'));
    }
}
