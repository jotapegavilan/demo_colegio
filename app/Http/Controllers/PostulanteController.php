<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;

class PostulanteController extends Controller
{
    public function index()
    {
        $postulantes = Postulante::latest('id')->paginate(18);
        return view('postulantes.index',compact('postulantes'));
    }
}
