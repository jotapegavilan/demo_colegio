@extends('adminlte::page')
@section('title', 'Actualizar postulante')

@section('content_header')
    <h1>Actualizar postulante</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($postulante,['route' => ['admin.postulantes.update',$postulante], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('names', 'Nombres') !!}                   
                {!! Form::text('names', null, ['class'=>'form-control', 'placeholder'=>'Ingrese los nombres del postulante']) !!}
                @error('names')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('surname_1', 'Apellido paterno') !!}                   
                {!! Form::text('surname_1', null, ['class'=>'form-control', 'placeholder'=>'Ingrese apellido paterno']) !!}
                @error('surname_1')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('surname_2', 'Apellidos materno') !!}                   
                {!! Form::text('surname_2', null, ['class'=>'form-control', 'placeholder'=>'Ingrese apellido materno']) !!}
                @error('surname_2')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">                    
                {!! Form::label('date_of_birth', 'Fecha de nacimiento') !!}                   
                {!! Form::date('date_of_birth', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el número total de cupos']) !!}
                @error('date_of_birth')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('user_id', 'Apoderado') !!}                   
                {!! Form::select('user_id', $apoderados, $postulante->user_id, ['class'=>'form-control']) !!}
                @error('user_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('curso_id', 'Curso') !!}                   
                {!! Form::select('curso_id', $cursos, $postulante->curso_id, ['class'=>'form-control']) !!}
                @error('curso_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('statu_id', 'Estado') !!}                   
                {!! Form::select('statu_id', $status, $postulante->statu->id, ['class'=>'form-control']) !!}
                @error('statu_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('age_id', 'Año') !!}                   
                {!! Form::select('age_id', $ages, $postulante->age->id, ['class'=>'form-control']) !!}
                @error('age_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::submit('Editar postulación', ['class' => 'btn btn-primary']) !!}
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