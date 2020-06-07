<?php
session_start();

if (isset($_SESSION['ident'])){
    $user= $_SESSION['ident'];
    $pokemon = $_GET['name_pokemon'];
    $number= $_GET['numero'];
}
else{
    header("Location:login.php");
}

$data = json_decode( file_get_contents("https://pokeapi.co/api/v2/pokemon/$pokemon"), true);

//print_r($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles pokemon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<header>

    <a href="index.php" class="btn btn-dark m-2">Volver</a>
    
    </header>
<div class="container">
    <h1 class="text-center"><?php print_r(strtoupper($pokemon)) ?></h1>
    <div class="row border border-warning m-3 text-center p-1">
        <div class="col-xl-6">
            <img src="https://pokeres.bastionbot.org/images/pokemon/<?php print_r($number) ?>.png" alt="" width ="200" height ="200" class=" bg-danger rounded">
        </div>
        <div class="col-xl-6">
            <h2> HABILIDADES </h2>
            <ul class="text-justify">
            <?php 
                for($i = 0;$i < count($data['abilities']); $i++){?>
                    <li><?php print_r(ucfirst($data['abilities'][$i]['ability']['name'])) ?></li>
            <?php } ?>
            </ul>
        </div>
        
    </div>
</div>
</body>
</html>
