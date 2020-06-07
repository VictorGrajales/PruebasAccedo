<?php
include('../conexion.php');
include('../models/user_model.php');
$email = $_POST['email'];
$password = $_POST['password'];


$query= "SELECT * FROM user WHERE email = '$email'";
$consulta = mysqli_query($conexion, $query);

if ($consulta->num_rows > 0){
  $consulta = mysqli_fetch_row($consulta);
  $hash_BD = $consulta[3];
  if (password_verify($password, $hash_BD)) {
    session_start();
    session_destroy();
  	session_start();
  	$_SESSION['ident'] = new User ($consulta[0],$consulta[1],$consulta[2], $consulta[3]);

    echo '<script languaje="javascript">
		window.location.href= "../views/index.php"
        </script>';
  }
	else {
    echo '<script languaje="javascript">
    var mensaje ="Credenciales incorrectas.";
    alert(mensaje);
    window.location.href= "../views/login.php"
    </script>';

  }
}
else {
  echo '<script languaje="javascript">
    var mensaje ="Credenciales incorrectas.";
    alert(mensaje);
    window.location.href= "../views/login.php"
    </script>';

}
?>