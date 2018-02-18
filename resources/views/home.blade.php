@extends('admin.template.main')
@section('title', 'Inicio')

@section('content')
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Binvenido {{ Auth::user()->name }}</h4>
    <p>Esperamos que la estadia en nuestra sea de su agrado</p>
    <hr>
    <p class="mb-0">Disfrute</p>
  </div>
@endsection
