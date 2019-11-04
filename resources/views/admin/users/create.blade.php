<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Crear Usuario</h1>
	<form method="post" action="/admin/users" enctype="multipart/form-data">
		@csrf
		{{-- <table>
			<tr>
				<td><input type="file" name="file"></td>
			</tr>
		</table> --}}
		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Verificar Email:</td>
				<td><input type="text" name="email_verified_at"></td>
			</tr>
			<tr>
				<td>Role:</td>
				<td><input type="text" name="role_id"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="enviar" value="Guardar">
				</td>
				<td>
					<input type="reset" name="borrar" value="Borrar">
				</td>
				<td>
					<a href="/admin/users">Volver</a>
				</td>
			</tr>
		</table>
	</form>
	{{-- <ul>
		@if (count($errors)>0)
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		@endif
	</ul> --}}
</body>
</html>