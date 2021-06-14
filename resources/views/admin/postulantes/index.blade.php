@extends('adminlte::page')
@section('title', 'Postulantes')

@section('content_header')
    <h1>Postulantes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.postulantes.create')}}">Nuevo postulante</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Curso</th>
                        <th>Estado</th>
                        <th>Apoderado</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postulantes as $postulante)
                        <tr>
                            <td>{{$postulante->id}}</td>
                            <td>{{$postulante->names}}</td>
                            <td>{{$postulante->surname_1}}</td>
                            <td>{{$postulante->surname_2}}</td>
                            @if ($postulante->curso)
                                <td>{{$postulante->curso->full_name}}</td>
                            @else
                                <td>Sin asignar</td>
                            @endif                           
                                <td>{{$postulante->statu->text}}</td>                                                       
                            <td>{{$postulante->user->name}} {{$postulante->user->surnames}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.postulantes.edit',$postulante)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.postulantes.destroy',$postulante)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$postulantes->links()}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
@stop