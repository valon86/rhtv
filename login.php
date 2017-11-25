<?php
session_start();

if(isset($_SESSION['id'])){
	header('location:index.php');
	die();//mata la ejecucion despues de la redireccion sino sigue con el codigo de abajo
}
if (isset($_POST['usuario']) and isset($_POST['Password'])){
	include 'conexion.php';
	$sql = "SELECT * FROM usuarios WHERE usuario = '".$_POST['usuario']."'";
	$resultado = mysqli_query($res, $sql);
	$fila = mysqli_fetch_row($resultado);//muestra una sola fila
	if($fila && $fila['2'] == $_POST['Password']){ //se fija si usuario existe y compara la clave con la que esta en la db
		$_SESSION = array('id'=> $fila[0], 'rol'=> $fila[3]); //guarda en la var $_SESSION el id y el rol del usuario
		header('location:index.php'); //redirecciona a la pagina index
		die();//mata la ejecucion despues de la redireccion sino sigue con el codigo de abajo

	}else{
		echo "Usuario o clave incorrecto";
	}
	print_r($fila);
} 
?>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Estilos propios -->
	<link rel="stylesheet" href="estilos.css">
	<!-- Fonts awesome para los iconos -->
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">-->

<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Bienvenido! Por favor llene los campos</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
		</form>			
	</div>
</div>