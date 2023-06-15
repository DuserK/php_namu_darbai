<!-- Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui. -->

<?php




require __DIR__.'/Pinigine.php';

$pinigine = new Pinigine();

$pinigine->ideti(10);
$pinigine->ideti(1);
$pinigine->ideti(2);
$pinigine->ideti(2);
$pinigine->ideti(33);
$pinigine->ideti(22);

$pinigine->skaiciuoti();
