<?php

$dischi = file_get_contents(__DIR__ . "/dischi.json");


// var_dump($dischi);


$dischi_decode = json_decode($dischi);


// var_dump($dischi_decode);


header('Content-Type: application/json; charset=utf-8');

echo json_encode($dischi_decode);



// Andava bene anche solo così:

// $dischi = file_get_contents(__DIR__ . "/dischi.json");

// header('Content-Type: application/json; charset=utf-8');

// echo ($dischi);

// Il motivo per cui ho fatto json_decode è per rendere la stringa leggibile per il PHP (la stringa diventa un array sul quale, volendo, posso lavorare). Per tornare "allo stato originale" poi ho fatto encode!

// Ad esempio avrei potuto passare solo i dati di cui ho bisogno:
// $result = []; -creo array vuoto
// foreach($dischi as $disco) {
// $result[] = [
// "title" => $disc->title,
// "author" => $disc->author,
// eccetera (è così che si COSANO gli oggetti in php)
// ]; }
// ..ma facendo così cambia il modo di printarli in html (vedi reg 15/3 circa 55min).

?>




