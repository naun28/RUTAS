@extends('inspinia::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('inspinia::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Inicio', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="active">
      <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
    </li>
     <li class="active">
      <a href="{{ route('escuelas') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Lista de Escuelas</span></a>
    </li>
    <li class="active">
      <a href="{{ route('usuarios') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Agregar Usuarios</span></a>
    </li>
    <li class="active">
      <a href="{{ route('agendar') }}"><i class="fa fa-address-book"></i> <span class="nav-label">Agendar Rutas</span></a>
    </li>
    <li class="active">
      <a href="{{ route('perfilesusuarios') }}"><i class="fa fa-home"></i> <span class="nav-label">Perfil de Usuarios</span></a>
    </li>
    <li class="active">
      <a href="{{ route('costo') }}"><i class="fa fa-usd"></i> <span class="nav-label">Calculo de costos</span></a>
    </li>
    <li class="active">
      <a href="{{ route('brigadista') }}"><i class="fa fa-user-o"></i> <span class="nav-label">Brigadista</span></a>
    </li>        
    <li class="active">
      <a href="{{ route('secretaria') }}"><i class="fa fa-user-o"></i> <span class="nav-label">Secretarias</span></a>
    </li>
    <li class="active">
      <a href="{{ route('reporte') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Reportes</span></a>
    </li>

  </ul>
@endsection
