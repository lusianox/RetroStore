<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO usuarios(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex_db,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Su información llegó correctamente a la base de datos</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡ERROR - la página anda como el orto y no logró registrarse!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Completa todos los campos, boludo.</h3>
           <?php
    }
}

// ACÁ QUIERO ENVIAR LOS MENSAJES DEL FOOTER HACIA LA BASE DE DATOS Y ME LOS MUESTRE
if (isset($_POST['botoncitoMensaje'])) {
    if (strlen($_POST['mensajito']) >= 1 && strlen($_POST['mensajito']) >= 1) {
	    $botoncitoMensaje = trim($_POST['botoncitoMensaje']);
	    $mensajito = trim($_POST['mensajito']);
	    $consultita = "INSERT INTO mensajes(mensaje) VALUES ('$mensajito')";
	    $resultadito = mysqli_query($conex_msj,$consultita);
	}
}
?>