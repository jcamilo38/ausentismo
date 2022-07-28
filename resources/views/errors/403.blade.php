@include('sweetalert::alert')
@extends('errors::minimal')

{{-- {!!Alert::info('Acción no autorizada', 'Tu rol no cuenta con los permisos necesarios para ejecutar esta acción')!!} --}}


@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
<p class="form control flex"> Tu rol no cuenta con los permisos necesarios para ejecutar esta acción</p>

