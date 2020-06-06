<?php
include('../conexion.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$opciones = [  'cost' => 12, ];
$password = password_hash($password, PASSWORD_BCRYPT, $opciones);

$query = "INSERT INTO `user`(`Names`, `email`, `password`) VALUES ('$nombre','$email','$password')";

$consulta= mysqli_query($conexion,$query);
echo '<script languaje="javascript">
    var mensaje ="El usuario fue creado correctamente ";
    alert(mensaje);
    window.location.href= "../views/login.php"
    </script>';
?>