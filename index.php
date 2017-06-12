<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './PetitChien.php';
        
        /* Pour créer une nouvelle instance de notre PetitChien, on utilise le mot 
         * clé new. Cette instance possédera toutes les propriétés que nous avons
         * défini dans notre classe.
         */
        $chien1 = new PetitChien();
        /*Pour accéder aux propriétés de notre classe en lecture (et en écriture dans 
         * cas-là) on utilise ->
         */
        $chien1->race ='corgi';
        $chien1->nom = 'rex';
        $chien1->couleur = 'marron';
        $chien1->dateNaissance = '20/05/2016';
        
        foreach($chien1 as $cle => $caracteritiques ){
           echo $cle.' : '.$caracteritiques.'<br/>';  
        }
        
       $chien1-> aboyer();
       echo '<br/>';
       echo $chien1;
   
        ?>
    </body>
</html>
