<?php 
require __DIR__ .'./Movie.php';

$Dracula_Info = new Movie("Dracula di Bram Stoker", "1992", "Horror", "128 min", "Francis Ford Coppola");
$Innocenti_Info = new Movie("Il Silenzio degli Innocenti", "Thriller/Horror", "1991", "118 min", "Jonathan Demme");
$Guardians_Info = new Movie("Guardiani della Galassia Vol.3", "Fantascenza/Avventura" "2023", "150 min", "James Gunn");

var_dump($Dracula_Info);
echo $Dracula_Info->getFullInfo();

var_dump($Innocenti_Info);
echo $Innocenti_Info->getFullInfo();

var_dump($Guardians_Info);
echo $Guardians_Info->getFullInfo();
