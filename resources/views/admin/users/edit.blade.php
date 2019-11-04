@extends("../layouts.plantilla")

@section("cabecera")

EDITAR REGISTROS

@endsection

@section("contenido")

<form method="post" action="/productos/{{ $producto->id }}">
	@csrf
	<table>
		<tr>
			<td>Nombre:</td>
			<td>
				<input type="text" name="NombreArticulo" value="{{ $producto->NombreArticulo }}">
				<input type="hidden" name="_method" value="PUT">
			</td>
		</tr>
		<tr>
			<td>Sección:</td>
			<td><input type="text" name="Seccion" value="{{ $producto->Seccion }}"></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td><input type="text" name="Precio" value="{{ $producto->Precio }}"></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type="text" name="Fecha" value="{{ $producto->Fecha }}"></td>
		</tr>
		<tr>
			<td>Pais Origen:</td>
			<td><input type="text" name="PaisOrigen" value="{{ $producto->PaisOrigen }}"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="enviar" value="Actualizar">
			</td>
			<td>
				<input type="reset" name="borrar" value="Limpiar Campos">
			</td>
			<td>
				<a href="/productos">Volver</a>
			</td>
		</tr>
	</table>
</form>

<form method="post" action="/productos/{{ $producto->id }}">
	@csrf
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" value="Eliminar registro">
</form>

@endsection

@section("pie")

@endsection