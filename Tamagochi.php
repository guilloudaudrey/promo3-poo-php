<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tamagochi
 *
 * @author guilloud
 */
class Tamagochi {
    private $faim;
    private $joie;
    private $sommeil;
    private $hygiene;
    
    
    public function jouer(){
        $this->joie += 5;
        $this->sommeil += 5;
        $this->faim += 5;
    }
    
    public function laver(){
        $this->hygiene += 5;
        $this->sommeil -= 5;
        $this->joie -= 5;
    }
    
    public function dormir(){
        $this->sommeil += 20;
        $this->joie -= 5;
        $this->faim += 5;
        
    }
    
    public function nourrir(){
        $this->faim -= 10;
        $this->joie -= 5;   
    }
    
    public function etat(){
        
        //mieux vaut utiliser un return (plus facile à réutiliser après)
        echo "faim : ".$this->faim;
        echo '<br>';
        echo "hygiène : ".$this->hygiene;
          echo '<br>';
        echo "sommeil : ".$this->sommeil;
          echo '<br>';
        echo "joie : ".$this->joie;        
    }
    public function __construct($faim, $joie, $sommeil, $hygiene) {
        $this->faim = $faim;
        $this->joie = $joie;
        $this->sommeil = $sommeil;
        $this->hygiene = $hygiene;
    }

}
