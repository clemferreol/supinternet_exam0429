<?php
require_once("Player.php");
class Computer extends Player{
    public function __construct(){
        parent::__construct("Computer");
    }
}