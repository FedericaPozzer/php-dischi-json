<?php

$dischi = file_get_contents(__DIR__ . "/dischi.json");


// var_dump($dischi);


$dischi_decode = json_decode($dischi);


// var_dump($dischi_decode);


header('Content-Type: application/json; charset=utf-8');

echo json_encode($dischi_decode);

?>