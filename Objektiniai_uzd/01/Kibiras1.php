<?php

 class Kibiras1 {

    private $akmenuKiekis = 0;

    public function pridetiAkmeni() : void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() :string 
    {
       return $this->akmenuKiekis;

    }
 }