<style>
    h3 {
        color: #FF3028;
        text-decoration: underline overline #FF3028;
    }
    h1 {
        display: inline;
    }
</style>

<?php
echo '<pre>';



echo '<br><h3>Pirma užduotis</h3><br>';
/// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function h1Tag ($text) {
    echo "<h1>$text</h1>";
};


h1Tag('Hello world!');


echo '<br><h3>Antra užduotis</h3><br>';
/// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function textChange ($text,$tag) {
    echo "<h$tag>$text</h$tag>";
};

textChange ('Hello world!', 5);

echo '<br><h3>Trečia užduotis</h3><br>';
/// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

$string = md5(time());

$string = preg_replace_callback('/\d+/', fn($match) =>'<h1>' .$match[0]. '</h1>',$string);

echo $string;

echo '<br><h3>Ketvirta užduotis</h3><br>';
/// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių



function divCalc ($number){
    $d = 2;
    $divisors = 0;
    echo "Skaičius: $number <br>";
    do {
        if ($number % $d ===0 ){
            $divisors++;
            echo " $d";
        }
        $d++;
    }
    while ($d<$number);
    echo "<br>Sveikieji dalikliai: $divisors";
};

divCalc(43);

echo '<br><h3>Penkta užduotis</h3><br>';
/// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

$masyvas = [];

foreach(range(1,10) as $_) {
    $digit = [
        'value' => rand(33, 77)
    ];
    $masyvas[] = $digit;
}

foreach ($masyvas as &$digit) {
   $digit['div'] = divCalc5($digit['value']);
};

function divCalc5 ($number){
    $d = 2;
    $divisors = 0;
    do {
        if ($number % $d ===0 ){
            $divisors++;
        }
        $d++;
    }
    while ($d<$number);
    return $divisors;
};

usort($masyvas, fn($a,$b) => $b['div']-$a['div']);

print_r ($masyvas);

echo '<br><h3>Šešta užduotis</h3><br>';
/// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

echo '<br><h3>Septinta užduotis</h3><br>';
/// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

$size = rand(10,30);
$all = 0;
for ($i=0; $i < $size ; $i++) { 
  
    $number7 = rand(10,20);
    $small = [];
    for ($k=0; $k < $number7 - 1 ; $k++) { 
        $small[] = rand(0,10);
    }
    $small[] = $all;
    $all = $small;
}

echo '<pre>';

print_r($all);