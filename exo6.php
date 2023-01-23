<?php

$animals = ['singe', 'chat', 'dragon', 'poisson'];
$elements = ['terre', 'vent', 'feu', 'eau'];

function writeSecretSentence($animals, $elements)
{
    foreach($animals as $key => $animal){
        foreach($elements as $key => $element){
           echo "$animal s'incline face au $element" . PHP_EOL;
            
        }
    }
    return "c'est n'importe quoi ce return";  
}



echo writeSecretSentence($animals, $elements);