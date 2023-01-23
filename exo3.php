<?php

$msg = "aopi?sgnirts@#?sedhtg+p9l!";

$lenght = strlen($msg)/2;
$newStr = substr($msg, 5, $lenght);
$replaceStr = str_replace("@#?", "", $newStr);
$finalStr = strrev($replaceStr);

echo $finalStr;