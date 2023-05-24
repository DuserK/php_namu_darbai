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