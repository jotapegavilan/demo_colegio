@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear apoderado</h1>
@stop

@section('content')

    @if (session('info'))       
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>        
    @endif
    <div class="card">
        <div class="card-body">            
            {!! Form::open(['route' => 'admin.apoderados.store','autocomplete' => 'off']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombres') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Ingrese nombres']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('surnames', 'Apellidos') !!}
                    {!! Form::text('surnames', null, ['class'=>'form-control', 'placeholder' => 'Ingrese apellidos']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone_number', 'Télefono') !!}
                    {!! Form::text('phone_number', null, ['class'=>'form-control', 'placeholder' => 'Ingrese télefono']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Correo electrónico') !!}
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Ingrese correo electrónico']) !!}
                </div>
                {!! Form::hidden('password', 'password') !!}                
                {!! Form::hidden('rol', 'apoderado') !!}                
                {!! Form::submit('Crear usuario', ['class'=>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
@stop