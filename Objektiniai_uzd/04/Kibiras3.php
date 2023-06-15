<?php

 class Kibiras3 {

    protected $akmenuKiekis;

    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function pridetiAkmeni() : void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() :void 
    {
       echo 'Pririnkta akmenų: ' .$this->akmenuKiekis;

    }
 }