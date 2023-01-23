<?php

$movies = [
    'Les Aventuriers de l\'arche perdue' => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
    'Indiana Jones et le Temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
    'Indiana Jones et la Dernière Croisade' => ['Harrison Ford', 'Sean Connery', 'Alison Doody'],
    'Indiana Jones et le Royaume du crâne de cristal' => ['Harrison Ford', 'Shia LaBeouf', 'Cate Blanchett'],
    'Indiana Jones 5' => ['Harrison Ford', 'Mads Mikkelsen', 'Phoebe Waller-Bridge']
  ];

  foreach ($movies as $key => $movie){
    echo "Le film $key est joué par $movie[0], $movie[1] et $movie[2]" . PHP_EOL;
}