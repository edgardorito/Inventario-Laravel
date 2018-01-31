@extends('admin.template.main')

@section('title', 'Crear un producto')

@section('content')

  @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif

  {!! Form::open(['route' => 'products.store', 'method' => 'POST']) !!}
      <div class="row justify-content-center">
        <div class="col-md-auto">
          {!! Form::label('user_id', 'ID del usuario') !!}
          {!! Form::number('user_id', null, ['class' => 'form-control', 'placeholder' =>  'ID usuario', 'required']) !!}
        </div>
        <div class="col-md-auto">
          {!! Form::label('name', 'Nombre del producto') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  'Nombre', 'required']) !!}
        </div>
        <div class="w-200"></div>
        <div class="col-md-auto">
          {!! Form::label('unitPrice', 'Precio unitario') !!}
          {!! Form::number('unitPrice', null, ['class' => 'form-control', 'placeholder' =>  'MXN', 'required']) !!}
        </div>
        <div class="w-200"></div>
        <div class="col-md-auto">
          {!! Form::label('quantity', 'Cantidad') !!}
          {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' =>  'Cantidad', 'required']) !!}
        </div>
        <div class="w-200"></div>
        <div class="col-md-auto">
          {!! Form::label('date', 'Fecha') !!}
          {!! Form::date('date', null, [ 'required']) !!}
        </div>
        <div class="w-100"></div>
        <br>
        <div class="col-md-auto">
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>
  {!! Form::close() !!}
@endsection
