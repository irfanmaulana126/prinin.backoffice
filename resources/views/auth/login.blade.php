@extends('layouts.password')

@section('content')
<p class="login-box-msg">Sign in to start your session</p>
<form method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
      <div class="form-group {{ $errors->has('email') ? ' has-error' : 'has-feedback' }}">
            <input id="email" type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group {{ $errors->has('password') ? ' has-error' : 'has-feedback' }} ">
            <input id="password" type="password" class="form-control" name="password"  placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="{{ route('password.request') }}">I forgot my password</a><br>
    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
@endsection
