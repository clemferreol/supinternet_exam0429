<?php
class Allumette{

    private $number;
    public function __construct($number){
        $this->number = [];
        $number = range(1,13);
        $this->number = $number;
    }
    public function getNumber(){
        return $this->number;
    }
}