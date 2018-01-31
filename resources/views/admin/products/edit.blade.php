@extends('admin.template.main')

@section('title', 'Editar producto '.$product->name)

@section('content')

  {!! Form::open(['route' => ['products.update',$product->id] , 'method' => 'PUT']) !!}

  <div class="row justify-content-center">
    <div class="col-md-auto">
      {!! Form::label('name', 'Nombre del producto') !!}
      {!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' =>  'Nombre', 'required']) !!}
    </div>
    <div class="w-200"></div>
    <div class="col-md-auto">
      {!! Form::label('unitPrice', 'Precio unitario') !!}
      {!! Form::number('unitPrice', $product->unitPrice, ['class' => 'form-control', 'placeholder' =>  'MXN', 'required']) !!}
    </div>
    <div class="w-200"></div>
    <div class="col-md-auto">
      {!! Form::label('quantity', 'Cantidad') !!}
      {!! Form::number('quantity', $product->quantity, ['class' => 'form-control', 'placeholder' =>  'Cantidad', 'required']) !!}
    </div>
    <div class="w-100"></div>
    <br>
    <div class="col-md-auto">
      {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>

  {!! Form::close() !!}

@endsection
