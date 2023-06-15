<!-- (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.
-->

<?php

echo '<pre>';

require __DIR__.'/Kibiras2.php';

$petroKibiras = new Kibiras2();
$onosKibiras = new Kibiras2();


$petroKibiras->pridetiAkmeni();
$onosKibiras->pridetiAkmeni();
$petroKibiras->pridetiAkmeni();
$onosKibiras->pridetiAkmeni();

$onosKibiras->pridetiDaugAkmenu(15);
$petroKibiras->pridetiDaugAkmenu(16);
$petroKibiras->pridetiDaugAkmenu(16);
$onosKibiras->pridetiDaugAkmenu(10);

echo '<h1>Ona surinko '.$onosKibiras->kiekPririnktaAkmenu().' akmenis.</h1>';
echo '<h1>Petras surinko '.$petroKibiras->kiekPririnktaAkmenu().' akmenis.</h1>';
echo '<h1>Bendrai surinkta '.Kibiras2::visiAkmenys().' akmenys.</h1>';

