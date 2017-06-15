<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carre
 *
 * @author guilloud
 */
class Carre {
    private $taille;
    private $couleur;
    
    /*depuis PHP 7, on peu optionnellement typer les arguments d'une fonction*/
    
    public function __construct(int $taille, string $couleur) {
        $this->taille = $taille;
        $this->couleur = $couleur;
    }

    /*On peut également typer le retour d'une méthode
     */
    public function afficherSuperficie():int{
        return $this->taille * $this->taille;
        }

    public function afficher(): string{
        $style = 'width:'.$this->taille.'px;'.'height:'.$this->taille . 'px;' . 
                'background-color:' . $this->couleur;
        
        return '<div style ="' .$style. '"></div>';
    }
    
    
}
