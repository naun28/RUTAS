@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <div><h1 class="logo-name">SEC</h1></div>
      <h3>Aula de medios</h3>
      <!--<p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
          Continually expanded and constantly improved Inspinia Admin Them (IN+)
      </p>
      <p>Login in. To see it in action.</p>-->
      <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
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
       <button type="submit" class="btn btn-danger block full-width m-b">Entrar</button>

       {{-- --}}<a href="{{ route('password.request') }}"><small>Forgot password?</small></a> 
       <p class="text-muted text-center"><small>No tienes una cuenta?</small></p>
       <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Crea una cuenta</a>
      </form>
      <p class="m-t"> <small>Secretaria de Educación y Cultura &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection

