<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Age;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Postulante;
use App\Models\Statu;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
class PostulanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:admin.postulantes.index')->only('index');
        $this->middleware('can:admin.postulantes.create')->only('create','store');
        $this->middleware('can:admin.postulantes.edit')->only('edit','update');
        $this->middleware('can:admin.postulantes.destroy')->only('destroy');
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        foreach ($user->roles as $rol) {            
            if($rol->name == "apoderado"){
                $postulantes = $user->postulantes;     
                $postulantes = $this->paginate($postulantes);         
                return view('admin.postulantes.index',compact('postulantes'));
            }
        }      
        
        $postulantes = Postulante::paginate(25);
        return view('admin.postulantes.index',compact('postulantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apoderados = User::pluck('name','id');
        $cursos = Curso::all()->pluck('full_name','id');
        $ages = Age::all()->pluck('name','id');
        $status = Statu::all()->pluck('text','id');
        return view('admin.postulantes.create',compact('apoderados','cursos','ages','status'));
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
            'names' => 'required',
            'surname_1' => 'required',
            'surname_2' => 'required',
            'age_id' => 'required',
            'statu_id' => 'required',
            'date_of_birth' => 'required',
            'user_id' => 'required',
            'curso_id' => 'required'
        ]);
        $postulante = Postulante::create($request->all());
        
        if($request->file('file')){
            $url = Storage::put('public/postulantes',$request->file('file'));            
            $postulante->image()->create([
                'url' => $url
            ]);
        }
        return redirect()->route('admin.postulantes.edit',compact('postulante'))->with('info','Postulante creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Postulante $postulante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulante $postulante)
    {
        $apoderados = User::pluck('name','id');
        $cursos = Curso::all()->pluck('full_name','id');
        $status = Statu::all()->pluck('text','id');
        $ages = Age::all()->pluck('name','id');
        return view('admin.postulantes.edit',compact('postulante','apoderados','cursos','status','ages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulante $postulante)
    {
        $request->validate([
            'names' => 'required',
            'surname_1' => 'required',
            'surname_2' => 'required',
            'age_id' => 'required',
            'statu_id' => 'required',
            'date_of_birth' => 'required',
            'user_id' => 'required',
            'curso_id' => 'required'
        ]);
        $postulante->update($request->all());
        return redirect()->route('admin.postulantes.edit',compact('postulante'))->with('info','Postulante actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postulante $postulante)
    {
        $postulante->delete();
        return redirect()->route('admin.postulantes.index');
    }
}
