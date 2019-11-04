@extends("../layouts.plantilla")

@section("cabecera")

LEER REGISTROS

@endsection

@section("contenido")

<a href="users/create">Nuevo</a>
<table border="1">
	<tr>
		<th>Mod</th>
		<th>Eli</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Contraseña</th>
		<th>Role</th>
		<th>Creado</th>
		<th>Modificado</th>
		{{-- <th>Imagen</th> --}}
	</tr>
	@foreach ($users as $user)
	<tr>
		<td>{{-- <a href="{{ route('admin.users.edit', $user->id) }}">mod</a> --}}</td>
		<td>{{-- <a href="{{ route('admin.users.destroy', $user->id) }}">Eli</a> --}}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>{{ $user->password }}</td>
		<td>{{ $user->role_id }}</td>
		<td>{{ $user->created_at }}</td>
		<td>{{ $user->updated_at }}</td>
		{{-- <td><img src="images/{{ $user->ruta }}" width="100"></td> --}}
	</tr>
	@endforeach
</table>

@endsection

@section("pie")

@endsection