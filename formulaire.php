<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include_once './Personne.php';
    ?>
    <form action="personne.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" name="nom"/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom"/>
        <label for="age">Age</label>
        <input type="number" name="age"/>
        <label for="region">Région</label>
                    <select name="region" id="region">
                <option value="auvergne_rhone_alpes">Auvergne-Rhône-Alpes</option>
                <option value="bourgogne_franche_comte">Bourgogne-Franche-Comté</option>
                <option value="bretagne">Bretagne</option>
                <option value="centre_val_de_loire">Centre-Val de Loire</option>
                <option value="corse">Corse</option>
                <option value="grand_est">Grand Est</option>
                <option value="hauts_de_france">Hauts-de-France</option>
                <option value="ile_de_france">Île-de-France</option>
                <option value="normandie">Normandie</option>
                <option value="nouvelle_aquitaine">Nouvelle-Aquitaine</option>
                <option value="occitanie">Occitanie</option>
                <option value="pays_de_la_loire">Pays de la Loire</option>
                <option value="provence_alpes_cote_d'azur">Provence-Alpes-Côte d'Azur</option>
                <option value="guadeloupe">Guadeloupe</option>
                <option value="martinique">Martinique</option>
                <option value="guyane">Guyane</option>
                <option value="la_reunion"La Réunion></option>
                <option value="mayotte">Mayotte</option>
                    </select>

        <button>Envoyer</button>

    </form>
    
</body>
</html>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

