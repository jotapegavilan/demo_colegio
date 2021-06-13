@extends('adminlte::page')
@section('title', 'Nuevo postulante')

@section('content_header')
    <h1>Nuevo postulante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.postulantes.store','autocomplete' => 'off', 'files' => true]) !!}
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
                {!! Form::label('surname_2', 'Apellidos') !!}                   
                {!! Form::text('surname_2', null, ['class'=>'form-control', 'placeholder'=>'Ingrese apellido materno']) !!}
                @error('surname_"')
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
            <div>
                {!! Form::label('imagen', 'Seleccione foto') !!}
                <div class="row mb-3">
                 
                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="https://cdn.pixabay.com/photo/2015/01/06/21/31/man-590855_960_720.jpg" alt="">
                    </div>
                    
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Foto') !!}
                        {!! Form::file('file', ['class' => 'form-control-file']) !!}
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deleniti libero ullam fugiat nihil voluptate minima amet enim! Laudantium dignissimos ratione alias omnis illum dolorem officiis molestiae amet perferendis dolore!</p>
                </div>
            </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('user_id', 'Apoderado') !!}                   
                {!! Form::select('user_id', $apoderados, null, ['class'=>'form-control']) !!}
                @error('user_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('age_id', 'Año') !!}                   
                {!! Form::select('age_id', $ages, null, ['class'=>'form-control']) !!}
                @error('age_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('statu_id', 'Estado') !!}                   
                {!! Form::select('statu_id', $status, null, ['class'=>'form-control']) !!}
                @error('statu_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('curso_id', 'Curso') !!}                   
                {!! Form::select('curso_id', $cursos, null, ['class'=>'form-control']) !!}
                @error('curso_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::submit('Crear postulación', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            margin-left: 100px;
            width: 50%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script> 
    console.log('Hi!'); 
    document.getElementById('file').addEventListener('change',cambiarImagen);

    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('picture').setAttribute('src',event.target.result);
        };
        reader.readAsDataURL(file);
    }
    </script>
@stop