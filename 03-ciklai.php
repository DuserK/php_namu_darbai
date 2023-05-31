<?php

// Pirma užduotis

echo "<h3>1. Naršyklėje nupieškite linija iš 400 “*”. <br>
a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;<br>
b)Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
.
</h3>";

$star = '*';

echo "a)";
echo "<br>";
for ($i = 1; $i <= 400; $i++) {
    echo $star;
};

echo "<br>";
echo "b)";
echo "<br>";
for ($i =1; $i <=400; $i++) {
    echo $star;
    if ($i % 50 === 0) {
        echo "$star <br>";
    }
};

