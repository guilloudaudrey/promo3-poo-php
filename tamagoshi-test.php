<?php


include_once './Tamagochi.php';
$tamagoshi = new Tamagochi(100, 100, 100, 100);

$tamagoshi->dormir();
$tamagoshi->etat();
echo'<br>';
$tamagoshi->laver();
$tamagoshi->etat();

