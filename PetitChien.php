<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author guilloud
 */
class PetitChien {
    public $nom;
    public $race;
    public $dateNaissance;
    public $couleur;
    
    /*Une classe peut également posséder des méthodes (desfonctions liés à cette
     * classe) qu'on pourra appeler directement sur nos instances.     
     */
    
    public function aboyer(){
        echo 'wouf wouf';
    }
    
   public function __toString() {
       return 'mon nom est '.$this->nom.', ma race est '.$this->race.', ma date de naissance est le '.$this->dateNaissance.', ma couleur est '.$this->couleur.'.';
       
  
   }
   
   public function __construct($nom, $race, $dateNaissance, $couleur) {
       $this->nom = $nom;
       $this->race = $race;
       $this->dateNaissance= $date;
       $this->couleur = $couleur;
       
               
   }
}
