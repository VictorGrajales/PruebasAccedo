<?php

$data = json_decode( file_get_contents("https://pokeapi.co/api/v2/pokemon/"), true);

print_r($data);


?>