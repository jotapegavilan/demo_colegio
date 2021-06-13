@extends('adminlte::page')
@section('title', 'Cursos')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.cursos.create')}}">Nuevo curso</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cupos totales</th>
                        <th>Cupos disponibles</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{$curso->id}}</td>
                            <td>{{$curso->full_name}}</td>
                            <td>{{$curso->total_capacity}}</td>
                            <td>{{$curso->total_capacity - $curso->accepted}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.cursos.edit',$curso)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.cursos.destroy',$curso)}}" method="POST">
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
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop