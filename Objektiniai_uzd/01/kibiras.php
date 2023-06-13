<?php

echo '<pre>';

require __DIR__.'/Kibiras1.php';

$petroKibiras = new Kibiras1();
$onosKibiras = new Kibiras1();


$petroKibiras->pridetiAkmeni();
$onosKibiras->pridetiAkmeni();
$petroKibiras->pridetiAkmeni();
$onosKibiras->pridetiAkmeni();

$onosKibiras->pridetiDaugAkmenu(15);
$petroKibiras->pridetiDaugAkmenu(16);
$onosKibiras->pridetiDaugAkmenu(10);

echo '<h1>Ona surinko '.$onosKibiras->kiekPririnktaAkmenu().' akmenis.</h1>';
echo '<h1>Petras surinko '.$petroKibiras->kiekPririnktaAkmenu().' akmenis.</h1>';

//var_dump($kibiras);