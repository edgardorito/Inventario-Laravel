@extends('admin.template.main')

@section('title', 'Iniciar sesion')

@section('content')

{!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
  {{ csrf_field() }}

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Correo') !!}
    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' =>  'Correo', 'required', 'autofocus']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
  </div>
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password',  ['class' => 'form-control', 'placeholder' =>  '********', 'required']) !!}
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group">
    {!! Form::label('remember', 'Remember Me') !!}
    {!! Form::checkbox('remember', old('remember') ? 'checked' : '' ) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Entrar', ['class' => 'btn btn-primary']) !!}
    <a class="btn btn-link" href="{{ route('password.request') }}">
        Forgot Your Password?
    </a>
  </div>
{!! Form::close() !!}

@endsection
