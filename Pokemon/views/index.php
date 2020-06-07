<?php

session_start();

if (isset($_SESSION['ident'])){
    $user= $_SESSION['ident'];
}
else{
    header("Location:login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    
</head>
<body>
    <?php $data = json_decode( file_get_contents("https://pokeapi.co/api/v2/pokemon/"), true);?>
    <header>

    <a href="../controllers/cerrarSesion.php" class="btn btn-danger m-2">Cerrar sesión</a>
    
    </header>
    <div class="container">

        <div class="row">
            <?php for($i = 0; $i < count($data['results']); $i++){?>
            <a class="col-xl-4 p-4" href="detalle_pokemon.php?name_pokemon=<?php print_r($data['results'][$i]['name']); ?>&numero=<?php print_r($i+1) ?>">
                <div class="shadow p-4 text-center">
               
                    <?php print_r(strtoupper($data['results'][$i]['name'])) ?> 
                
                </div>
            </a>
            <?php } ?>
        </div>
    </div>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</script>
</body>
</html>