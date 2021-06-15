<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ApoderadoController extends Controller
{

    protected $paginationTheme = "bootstrap";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apoderados = User::role('apoderado')->paginate(10);
        return view('admin.apoderados.index',compact('apoderados'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apoderados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surnames' => 'required',            
            'email' => 'required',            
        ]);
        $password = bcrypt($request->password);
        $user = User::create([
            'name' => $request->name,
            'surnames' => $request->surnames,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password'=>$password
        ]);
        $user->roles()->sync(Role::where('name',$request->rol)->get());
        return redirect()->route('admin.apoderados.edit',$user)->with('info','Se creo el usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $apoderado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $apoderado)
    {
        return view('admin.apoderados.edit',compact('apoderado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $apoderado)
    {
        $request->validate([
            'name' => 'required',
            'surnames' => 'required',            
            'email' => 'required',            
        ]);
        $apoderado->update($request->all());
        return redirect()->route('admin.apoderados.edit',compact('apoderado'))->with('info','Apoderado actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $apoderado)
    {
        $apoderado->delete();
        return redirect()->route('admin.apoderados.index');
    }
}
