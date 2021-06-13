@extends('adminlte::page')
@section('title', 'Nuevo curso')

@section('content_header')
    <h1>Nuevo curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.cursos.store']) !!}
                <div class="form-group">
                    {!! Form::label('number', 'Nivel') !!}                   
                    {!! Form::number('number', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el número del nivel']) !!}
                    @error('number')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('name','Nombre') !!}                   
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre']) !!}
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">                    
                    {!! Form::label('total_capacity', 'Capacidad total') !!}                   
                    {!! Form::number('total_capacity', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el número total de cupos']) !!}
                    @error('total_capacity')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('accepted', 'Inscritos') !!}                   
                    {!! Form::number('accepted', 0, ['class'=>'form-control', 'placeholder'=>'Ingrese el número de inscritos']) !!}
                    @error('accepted')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::submit('Crear curso', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop