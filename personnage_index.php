<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




include_once './Personnage.php';
session_start();

/* On vérfie s'il y a les persos actuellement stockés en session
 * 
 */
if(isset($_SESSION['perso1'])&& isset($_SESSION['perso2'])){
    
    /* Si on a effectivement les persos stockés en session on les récupère
     * et on les mets dans leur variable respective
     */
    $perso1 = $_SESSION['perso1'];
    $perso2 = $_SESSION['perso2'];
    
}else{
$perso1 = new Personnage("A", 3, 10, 10);
$perso2 = new Personnage("B", 3, 10, 10);

}

echo $perso1->genererHTML();
echo $perso2->genererHTML();
$perso1->attaquer($perso2);


//on stocke les persos dans leurs sessions respectives
$_SESSION['perso1'] = $perso1;
$_SESSION['perso2'] = $perso2;
