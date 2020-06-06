<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pokemon</title>
	</script>
	<link rel="stylesheet" href="../css/registrarse.css">

</head>
<body>

	<div class="container">

		<form action="../controllers/registro_controller.php" method="post" class="formulario"> <!-- mostrar-->
			<div class="titulo">
				<h1>REGISTRARSE</h1>
			</div>
			<div class="campos">
                <input type="text" placeholder="Nombres" name="nombre" class="full" required>
				<input type="text" placeholder="Correo" name="email" class="full" required max="99999999999" min="0">
				<input type="password" placeholder="Contraseña" name="password" class="full" required>

				<div class="envio">
					<a href="../" value="Cancelar" id="cerrar-iniciar" class="Cancelar">Cancelar</a>
					<input type="submit" value="Entrar" class="enviar">
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="../js/jquery.js">
	</script>
	<script type="text/javascript" src="../js/bootstrap.js">
	</script>
	<script src="./js/index.js"></script>
	<script src="./js/login.js"></script>
</body>
</html>