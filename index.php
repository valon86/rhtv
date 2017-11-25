<?php 
session_start();

if(!isset($_SESSION['id'])){
	header('location:login.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recursos Humanos - Municipalidad Tafí Viejo</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
  	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Estilos propios -->
	<link rel="stylesheet" href="estilos.css">
	<!-- Fonts awesome para los iconos -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

<header>
	<?php include('menu.php'); ?>
</header>

<!--Contenedor de todo el body-->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#!">Recursos Humanos</a></li>
  <li class="breadcrumb-item"><a href="#!">Personal</a></li>
  <li class="breadcrumb-item active">Registro del empleado</li>
</ol>

<div class="container  mt-5">
	<div class="card border-dark">
		<div class="card-header">
			<h3 class="card-title"><i class="fa fa-address-card mr-2" aria-hidden="true"></i>Registro de datos personales</h3>
		</div>
		<div class="card-body">
			<div class="row justify-content-start justify-content-md-end flex-column flex-md-row">

				<div class="form-group mx-2 ">
					<label class="form-control-label hidden-sm-down" for="usuario">Usuario:</label>
					<input type="text" name="usuario" class="form-control " placeholder="Administrador" disabled>
				</div>
			
				<div class="form-group mx-2 ">
					<label class="form-control-label hidden-sm-down" for="fecha">Fecha:</label>
					<input type="text" name="fecha" class="form-control " placeholder="10/11/2017" disabled>
				</div>
			
				<div class="form-group mx-2 ">
					<label class="form-control-label hidden-sm-down" for="hora">Hora:</label>
					<input type="text" name="hora" class="form-control " placeholder="08:05" disabled>
				</div>
				
	
			</div>
			
			<hr>
			<div class="row justify-content-md-center">
				<div class="col-md-6 ">
					<form action="" method="GET" ><!--Inicio del formulario-->
						<div class="form-group row">
							<label for="name" class="col-form-label col-12 col-md-3">Nombre:</label>
							<input type="text" class="form-control col-12 col-md-9 " name="name" id="name" placeholder="Escribe tu Nombre">
						</div>
						<div class="form-group row">
							<label for="apellido" class="col-form-label col-12 col-md-3">Apellido:</label>
							<input type="text" class="form-control col-12 col-md-9" name="apellido" id="apellido" placeholder="Apellido">
						</div>
						<div class="form-group row justify-content-between">
							<label for="" class="col-form-label col-12 col-md-4">Fecha de ingreso:</label>
							<input type="date" class="form-control col-12 col-md-4 ">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Aceptar</button>
						</div>
						
					</form><!--fin del formulario-->
				</div>
			</div>
			<div class="row justify-content-start">
			<a href="salir.php" class="btn btn-primary">Cerrar Sesion</a>				
			</div>

		</div><!--fin de card-body-->
		<div class="card-footer text-muted card-text-center">
			2 day ago
		</div>
	</div>
</div>



<!-- Footer -->
<footer class="mt-5 fixed-bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</footer>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>