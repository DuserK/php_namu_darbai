<?php


require __DIR__.'/Krepsys.php';
require __DIR__.'/Grybas.php';

$krepsys1 = new Krepsys;

do {
    $grybas = new Grybas;
    if($grybas->arGeras()) {
        $krepsys1->ideti($grybas->svoris);
        echo 'Idėtas grybukas: '.$grybas->svoris. '<br>';
    }
} while (!$krepsys1->arPilnas());

echo 'Pririnkta grybų, g: '. $krepsys1->kiekis;
echo '<br>';
// echo Krepsys::DYDIS;
// echo $krepsys1::DYDIS; kitas kvietimo variantas

