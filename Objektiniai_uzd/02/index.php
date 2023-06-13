<!-- Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje. -->

<?php

echo '<pre>';

require __DIR__.'/Pinigine.php';

$manoPinigine = new Pinigine();

$manoPinigine->ideti(20);
$manoPinigine->ideti(1);
$manoPinigine->ideti(20);
$manoPinigine->ideti(1);
$manoPinigine->ideti(30);


$manoPinigine->skaiciuoti();
