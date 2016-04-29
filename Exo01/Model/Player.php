<?php
class Player{
    protected $hand; //sert à stocker les allumettes que le joueur possède
    protected $pseudo;
    public function __construct($pseudo){
        $this->hand = [];
        $this->pseudo = $pseudo;
    }
    public function getHand(){
        return $this->hand;
    }
    public function take($allumettes){
        // récupère les allumettes passées en paramètre
        //et les place dans $this->hand'
        foreach($allumettes as $allumette){
            $this->hand[] = $allumette;
        }
    }
    public function getHandValue(){
        $panier = 0;
        foreach($this->hand as $allumette){
            $panier += $allumette->getValue();
        }
        return $panier;
    }
}
