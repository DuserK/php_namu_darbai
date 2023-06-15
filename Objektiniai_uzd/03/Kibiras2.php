<?php

 class Kibiras2 {

    static private $akmenuKiekisVisuoseKibiruose;

    private $akmenuKiekis;

    public function __construct($kiekis = 0) {
        $this->akmenuKiekis = $kiekis;
        self::$akmenuKiekisVisuoseKibiruose = 0;
    }

    public function pridetiAkmeni() : void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() :string 
    {
       return $this->akmenuKiekis;

    }
    static public function visiAkmenys() : string 
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

 }