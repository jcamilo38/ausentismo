@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
@can('administrador.users.create')
    <a class="btn btn-primary" href="{{route('administrador.users.create')}}">Crear usuario</a>
@endcan
<h3>Gestion de usuarios</h3>
@stop

@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="users">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol asignado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $roleName)

                        @endforeach
                    @endif
                    <td>{{$roleName}}</td>
                        <td width="10px"><a href="{{route('administrador.users.edit',$user)}}" class="btn btn-primary btn-sm">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('administrador.users.destroy',$user)}}" method="POST">
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

@push('js')
<script>
    $(document).ready(function () {
        $('#users').DataTable({
            responsive:true,
            autoWidth:false,
            "language":{
                "lengthMenu":"Mostrar "+
            `<select class="custom-select custom-select-sm form-control form-control-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="-1">Todos</option>
                </select>`
                +" registros por p??gina",
                "zeroRecords":"Nada encontrado",
                "info":"Mostrando la p??gina _PAGE_ de _PAGES_",
                "search":"Buscar:",
                "paginate":{
                    'next':'Siguiente',
                    'previous':'Anterior'
                }
            }
        });
    });
</script>
@endpush


