<?php

// Pirma uzduotis

echo '<h3>1.Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus).<br> Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :<br>
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
</h3>';

$vardas = 'Gitanas';
$pavarde = 'Nausėda';
$gimimometai = 1964;
$metaidabar = 2023;

echo 'Aš esu ', $vardas,' ', $pavarde, '. Man yra ',$metaidabar - $gimimometai, ' metai(ų).';

// Antra uzduotis

echo '<h3>2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems <br> priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. <br> Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.</h3>';

$sk1 = rand(0,4);
$sk2 = rand(0,4);

echo 'Pirmas skaičius: '.$sk1.'<br>';
echo 'Antras skaičius: '.$sk2;

echo '<br>';

$rezultatas = ($sk1 > $sk2 && $sk2 != 0) 
? round(($sk1/$sk2),2) 
: (($sk2 > $sk1 && $sk1 != 0) 
? round(($sk2/$sk1),2) 
: 'Reikšmės netinkamos');

echo '<br>';
echo 'Rezultatas: '.$rezultatas;

// Trečia užduotis
echo '<pre>';
echo '<h3>3.Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() <br> jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį <br>turintį vidurinę reikšmę.</h3>';

$a = rand(0,25);
$b = rand(0,25);
$c = rand(0,25);

echo '<br>';
echo 'Skaičiai: a: '.$a.', b: '.$b.', c: '.$c."\n\n";

echo $rezultatas2 = 'vidurinis skaičius = '.($a+$b+$c - min($a, $b, $c)-max($a, $b, $c));

echo '</pre>';

//Ketvira užduotis

echo '<h3>4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ <br> funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir <br> atsakymą atspausdintų. </h3>';

$aa = rand(1,10);
echo 'ab = '.rand(1,10);
echo '<br>';
$bb = rand(1,10);
echo 'bc = '.rand(1,10);
echo '<br>';
$cc = rand(1,10);
echo 'ca = '.rand(1,10);
echo '<br>';

echo '<br>';echo '<br>';


if ($aa+$bb > $cc && $bb+$cc > $aa && $cc+$aa > $bb) {
    echo 'Iš duotų krašnių galima sudaryti trikampį';
} else {
    echo 'Iš duotų krašnių negalima sudaryti trikampio';
};

// Penkta užduotis

echo '<h3>5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems <br>
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). <br>
</h3>';

$r1 = rand(0,2);
$r2 = rand(0,2);
$r3 = rand(0,2);
$r4 = rand(0,2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

switch ($r1) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
        break;
}
switch ($r2) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
        break;
}
switch ($r3) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
        break;
}
switch ($r4) {
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejetai++;
        break;
}

echo 'Nuliai: '. $nuliai. ', Vienetai: '. $vienetai. ', Dvejetai: '.$dvejetai;

///Šešta užduotis

echo '<h3> 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį <br>atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: < h3>3< /h3> <br>';

$header = rand(1,6);

echo '<br>';
echo '<br>';
echo "<h$header> Header lygis: $header</h$header>";

// Septinta užduotis

echo '<h3>7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 <br> turi būti žali, 0 - raudonas, didesni už 0 mėlyni.</h3>';

$sk71 = rand(-10,10);
$sk72 = rand(-10,10);
$sk73 = rand(-10,10);

$color71 = $sk71 < 0 ? "green" : ($sk71 ===0 ? "red" : "blue");
$color72 = $sk72 < 0 ? "green" : ($sk72 ===0 ? "red" : "blue");
$color73 = $sk73 < 0 ? "green" : ($sk73 ===0 ? "red" : "blue");

echo "Spalvoti skaičiai: <h2 style=color:$color71>$sk71</h2>, <h2 style=color:$color72>$sk72</h2>, <h2 style=color:$color73>$sk73</h2>";


// Aštunta užduotis
echo '<h3>8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.</h3>';

$zvk = rand(5,3000);

if($zvk > 1000 && $zvk <2000){
    $kaina = $zvk-($zvk*0.03);
    echo "Parduodamos $zvk žvakės, už $kaina Eur";
} elseif ($zvk > 2000) {
    $kaina = $zvk-($zvk*0.04);
    echo "Parduodamos $zvk žvakės, už $kaina Eur";
}else {
    $kaina = $zvk;
    echo "Parduodamos $zvk žvakės, už $kaina Eur";
};

// Devinta užduotis
echo '<h3>9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.</h3>';

$sk91 = rand(0,100);
$sk92 = rand(0,100);
$sk93 = rand(0,100);
$sk94 = rand(0,100);
echo "Skaičiai = $sk91, $sk92, $sk93, $sk94";
$vidurkis = ($sk91+$sk92+$sk93+$sk94)/4;
echo '<br>';
echo "Aritmetinis vidurkis = $vidurkis";
echo '<br>';
$suma9 =0;
$dalmuo = 0;
if ($sk91>10 && $sk91<90) {
    $suma9 += $sk91;
    $dalmuo++;
};
if ($sk92>10 && $sk92<90) {
    $suma9 += $sk92;
    $dalmuo++;
};
if ($sk93>10 && $sk93<90) {
    $suma9 += $sk93;
    $dalmuo++;
};
if ($sk94>10 && $sk94<90) {
    $suma9 += $sk94;
    $dalmuo++;
};
$vidurkis19 = $suma9/$dalmuo;
echo '<br>';
echo "Vidurkis, kai 10 < skaičiai < 90  = $vidurkis19";
echo '<br>';

// Dešimta užduotis
echo '<h3>10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.</h3>';

$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);
$papsekundes = rand(0,300);

echo "Laikas: $valandos:$minutes:$sekundes";
$laikas = $valandos*3600+$minutes*60+$sekundes;
$laikas2 = 0;
echo '<br>';echo '<br>';
echo "Papildomos sekundes: $papsekundes";
echo '<br>';echo '<br>';
if (($laikas+$papsekundes) < 24*3600) {
    $laikas2 = $laikas+$papsekundes;
} else {
    $laikas2 = $laikas+$papsekundes-24*3600;
};
$valandos2 = floor($laikas2/3600);
$minutes2 = floor(($laikas2-$valandos2*3600)/60);
$sekundes2 = $laikas2-$valandos2*3600-$minutes2*60;

echo "Laikas pridėjus sekundes $valandos2:$minutes2:$sekundes2";
?>