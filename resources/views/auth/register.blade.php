@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div> <h1 class="logo-name">SEC</h1></div>
        <h3>Registrar usuario</h3>
        <form class="m-t" role="form"  method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
          </div>
          <div class="form-group">
            <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Acepta los terminos y condiciones </label></div>
          </div>
          <button type="submit" class="btn btn-danger block full-width m-b">Registrar</button>

          <p class="text-muted text-center"><small>Ya tienes una cuenta</small></p>
          <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Entrar</a>
        </form>
        <p class="m-t"> <small>Secretaria de Educación y Cultura &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
