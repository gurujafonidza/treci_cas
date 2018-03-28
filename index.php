<?php 
$rezultat = str_replace("a", "4", "ja sam programer");
echo $rezultat.'<br>';

$drugaRec = str_replace(["a","e"], ["4","3"], "ja sam programer");
echo $drugaRec.'<br>';

$malaSlova = "OVO BI TREBALO DA BUDE MALIM SLOVIMA";
$malaSlova = strtolower($malaSlova);
echo $malaSlova.'<br>';

$primerPrvi = "Ideja nije moja , smislili su je neki kreativni nastavnici";
$primerPrvi = str_replace(["a","e","i","o"], ["4","3","1","0"], $primerPrvi);
echo $primerPrvi.'<br>';

$primerPrvi = strtoupper($primerPrvi);
echo $primerPrvi.'<br>';
 ?>