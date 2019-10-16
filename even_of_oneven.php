<?php
echo "vul een getal in om te kijken pf ie even of on even is". PHP_EOL;
$getal = readline();
if (($getal % 2) === 1) {
echo "$getal is oneven.". PHP_EOL;
}
else {
    echo "$getal is even.". PHP_EOL; 
}