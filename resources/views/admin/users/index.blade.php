@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')

  <a href="{{ route('users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><br><br>
  <table class= "table table-hover" b>
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Tipo</th>
      <th>Acción</th>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @if($user->type == 'admin')
                <span class="badge badge-danger"> {{ $user->type }} </span>
            @else
                <span class="badge badge-primary">  {{ $user->type }}	</span>
            @endif
            </td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
              <i class="small material-icons">edit</i>
            </a>
            <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">
               <i class="small material-icons">delete</i>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $users->render() !!}

@endsection
