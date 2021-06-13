<?php

namespace App\Http\Controllers;

use App\Mail\ApoderadosMailable;
use App\Models\EmailID;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ApoderadoController extends Controller
{
    public function first_step()
    {
        return view('apoderados.first_step');
    }

    public function second_step(Request $request)
    {
        if(User::where('email',$request->email)->count() > 0){
            return "Ese email ya se encuentra registrado";
        }else{
            $id = uniqid();
            $correo = new ApoderadosMailable($id);
            Mail::to($request->email)->send($correo);
            EmailID::where('email', $request->email)->delete();
            EmailID::create([
                'email' => $request->email,
                'cod' => $id
            ]);
            return "Email enviado";
        }

        
    }
}
