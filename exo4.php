<?php

$movies = [
    "Les Aventuriers de l'arche perdue" => 1981,
    "Indiana Jones et le Temple maudit" => 1984,
    "Indiana Jones et la Dernière Croisade" => 1989,
    "Indiana Jones et le Royaume du crâne de cristal" => 2008,
    "Indiana Jones 5" => 2023
  ];
  
arsort($movies);

  foreach ($movies as $key => $movie){
      echo "Le film $key est sorti en $movie" . PHP_EOL;
  }