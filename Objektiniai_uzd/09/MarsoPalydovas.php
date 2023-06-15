<?php


class MarsoPalydovas {

    private static $atvejis = [];
    
    private $vardas;

    private function __construct($vardas) {
        $this->vardas = $vardas;
    }

    public static function getMarsoPalydovas()
    {
        if(!isset(self::$atvejis[0])) {
            return self::$atvejis[0] = new self('Deimas');
        }
        if(!isset(self::$atvejis[1])) {
            return self::$atvejis[1] = new self('Fobas');
        }
        return self::$atvejis[rand(0,1)];
    }
}