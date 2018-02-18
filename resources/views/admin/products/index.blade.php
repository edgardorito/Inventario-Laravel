@extends('admin.template.main')

@section('title', 'Lista de productos')

@section('content')
  <a href="{{ route('products.create') }}" class="btn btn-info">Registrar nuevo producto</a><br><br>
  <table class= "table table-hover" b>
    <thead>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Precio unitario</th>
      <th>Precio total</th>
      <th>Fecha de captura</th>
      <th>Slug</th>
      <th>Acción</th>
    </thead>
    <tbody>

      @foreach($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->unitPrice }}</td>
          <td>{{ $product->totalPrice }}</td>
          <td>{{ $product->date }}</td>
          <td>{{ $product->slug }}</td>
          <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">
              <i class="small material-icons">edit</i>
            </a>
            <a href="{{ route('admin.products.destroy',$product->id)  }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">
               <i class="small material-icons">delete</i>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $products->render() !!}

@endsection
