<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author guilloud
 */
class Personnage {
    //put your code here
    private $nom;
    private $vie;
    private $force;
    private $defense;
    
    public function attaquer(Personnage $adversaire){
        $this->force += 5;
        $adversaire->force -=5;
        
        if ($this->force === 0){
            $this->vie -= 1;
        }
        
        if ($adversaire->force === 0){
             $adversaire->vie -= 1;
        }
    }
    
    public function defendre(){
        $this->defense += 5;
        
        if ($this->defense === 10){
            $this->force += 5;
        }
  
    }
    
    public function genererHTML(){
        return '<p>Nom : ' . $this->nom . '</p><p>Défense : ' . $this->defense . '</p><p>Vie : ' . $this->vie . '</p><p>Force : ' . $this->force .'</p>'  ;
     
    }
    
    function __construct(string $nom, int $vie, int $force, int $defense) {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->force = $force;
        $this->defense = $defense;
    }

}
