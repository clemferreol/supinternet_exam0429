<?php
require_once("Player.php");
require_once("Computer.php");
require_once("Allumette.php");

class GameState{
    public $player;
    public $computer;
    public $allumette;
    public function __construct($playername){
        $this->player = new Player($playername);
        $this->computer = new Computer();
    }
    public function initialDeal(){
        $this->bank->take($this->allumette->deal(3));
        $this->player->take($this->allumette->deal(3));
    }
}