@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de apoderados</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.apoderados.create')}}">Nuevo apoderado</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apoderados as $apoderado)
                    <tr>
                        <td>{{$apoderado->id}}</td>
                        <td>{{$apoderado->name}}</td>
                        <td>{{$apoderado->surnames}}</td>
                        <td>{{$apoderado->email}}</td>
                        <td>{{$apoderado->phone_number}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.apoderados.edit',$apoderado)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.apoderados.destroy',$apoderado)}}" method="POST">
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
        {{$apoderados->links()}}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
@stop