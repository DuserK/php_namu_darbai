<?php

// Pirma uzduotis

echo '<h3>1.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
</h3>';

$name = 'Steve';
$surname = 'Carell';

if(strlen($name) < strlen($surname) ){
    echo $name;
} else
{
    echo $surname;
};

// Antra uzduotis

echo '<h3>2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
</h3>';

echo strtoupper($name);
echo "<br>";
echo strtolower($surname);

// Trečia uzduotis

echo '<h3>3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti
</h3>';

$initials = "$name[0]$surname[0]";
echo $initials;

// Ketvirta uzduotis

echo '<h3>4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
</h3>';

$last3 = substr($name, 2) .substr($surname, 3);
echo $last3;

// Penkta uzduotis

echo '<h3>5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti
</h3>';

$string5 = "An American in Paris";
$aA = ["a","A"];
$string5rpl = str_replace($aA,"*",$string5);
echo $string5rpl;

// Šešta uzduotis

echo '<h3>6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
</h3>';

echo substr_count($string5,'a')+substr_count($string5,'A');

// Septinta uzduotis

echo '<h3>7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffanys, 2001: A Space Odyssey ir It s a Wonderful Life.
</h3>';

$vowels = array("a", "e", "i", "y", "o", "u", "A", "E", "I", "Y", "O", "U");

$string61 = "Breakfast at Tiffanys";
$string62 = "2001: A Space Odyssey";
$string63 = "It 's a Wonderful Life";

echo str_replace($vowels,"",$string5);
echo "<br>";
echo str_replace($vowels,"",$string61);
echo "<br>";
echo str_replace($vowels,"",$string62);
echo "<br>";
echo str_replace($vowels,"",$string63);

// Aštunta uzduotis

echo "<h3>8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
</h3>";

$title = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $title;
$episode = preg_replace('/[^0-9]/', '', $title);;
echo "<br>";
echo "Episode: $episode";
