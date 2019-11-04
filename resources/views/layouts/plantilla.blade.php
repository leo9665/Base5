<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crud</title>
	<style>
		.imagenCabecera{
			float: right;
			padding-right: 150px;
			width: 180px;
		}
		.cabecera{
			text-align: center;
			font-size: x-large;
			font-family: Tahoma, Geneva, sans-serif;
			margin-bottom: 100px;
			color: #206EC5;
		}
		.contenido{
			width: 500px;
			margin: 0 auto;
		}
		.pie{
			position: fixed;
			bottom: 0px;
			width: 100%;
			font-size: 0.7em;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div class="cabecera">
		@yield("cabecera")
		<img src="/images/logo.png" class="imagenCabecera">
	</div>
	<div class="contenido">
		@yield("contenido")
	</div>
	<div class="pie">
		@yield("pie")
		Píldoras Informaticas. Todos los derechos reservados
	</div>
</body>
</html>