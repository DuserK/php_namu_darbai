<?php

class Pinigine {

    private $popieriniaiPinigai = 0;

    private $metaliniaiPinigai =0;

    public function ideti($kiekis) : void 
    {
        if($kiekis > 2 ) {
            $this->popieriniaiPinigai += $kiekis;
        } else {
           $this->metaliniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti() : void 
    {
       echo 'Popieriniai pinigai: '.$this->popieriniaiPinigai .', Metaliniai pinigai: '.$this->metaliniaiPinigai;
    }

}