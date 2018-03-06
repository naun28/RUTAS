@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col 12 ">
    <div class="ibox float-e-margins">
      <div class="ibox-title"><h5>Registro de Usuarios</h5>

      </div>
    </div>
    </div>
    </div>
    <div class="row" style="margin-left: 25%; margin-right: 25%;">
    <div class="ibox col-sm-10">
      <div class="ibox-title">
        <h5>usuarios</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-wrench"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
          </ul>
          <a class="close-link">
            <i class="fa fa-times"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
       <div class="text-center ">

        <form class="m-t" role="form"  method="POST" action="#">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Apellidos" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
            <div class="form-group">
            <select class="select2_demo_1 form-control">
              <option value="1">Brigadista</option>
              <option value="2">Lider de Brigada</option>
              <option value="3">Mesa de ayuda</option>
              <option value="4">Administrador</option>
            </select>
          </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Telefono" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Correo" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-danger block full-width m-b">Registrar</button>
        </form>
      </div> 
    </div>
  </div>
  </div>



{{-- <div class="middle-box text-center loginscreen   animated fadeInDown">

    <div>
        <div> <h1 class="logo-name">SEC</h1></div>
        <h3>Registrar Usuario</h3>
        
        <form class="m-t" role="form"  method="POST" action="#">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Correo" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-danger block full-width m-b">Registrar</button>
        </form>
        <p class="m-t"> <small>Secretaria de Educacion y Cultura &copy; {{ date('Y') }}</small> </p>
    </div>
  </div> --}} 

@endsection
