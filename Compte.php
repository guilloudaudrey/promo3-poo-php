<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of compte
 *Une classe représentant un compte en banque 
 * @author guilloud
 */
class Compte {
    private $solde = 200;
    
    public function getSolde(){
        return $this->solde;
    }
}


