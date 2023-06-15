<?php


class Pinigine {

    private $popieriniaiPinigai, $metaliniaiPinigai;

    public function __construct($kiekis = 0)
    {
        $this->popieriniaiPinigai = [];
        $this->metaliniaiPinigai = [];
    }

    public function ideti($kiekis) : void
    {
        if($kiekis > 2 ) {
            $this->popieriniaiPinigai[] = $kiekis;
        } else {
            $this->metaliniaiPinigai[] = $kiekis;
        }
    }

    public function skaiciuoti() :void
    {
        echo '<h1>Banknotų kiekis: '.count($this->popieriniaiPinigai).'</h1>';
        echo '<h1>Banknotų suma: '.array_sum($this->popieriniaiPinigai).'</h1>';
        echo '<h1>Monetų kiekis: '.count($this->metaliniaiPinigai).'</h1>';
        echo '<h1>Monetų suma: '.array_sum($this->metaliniaiPinigai).'</h1>';
    }
}