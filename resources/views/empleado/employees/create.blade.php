@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h3>Crear empleado</h3>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'administrador.users.store']) !!}
                @include('empleado.employees.partials.form')

                {!! Form::submit('Crear Empleado',['class' =>'btn btn-primary btn-md']) !!}
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
