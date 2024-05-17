<?php
require_once("C:\laragon\www\php\pertemuan3/function.php");

salam('Irfam', 'happy');

/**
 * for loop
 */
for ($i = 1; $i < 10; $i++){
    echo $i;
}

echo "<br/>";

/**
 * While loop
 */
$a = 1;
while ($a < 10){
    echo $a;
    $a++;
}

echo "<br/>";

/**
 * Do while loop
 */

$b = 0;
do {
    echo $b;
    $b++;
    } while ($b <= 10);

echo "<br/>";

/**
 * Foreach loop
 */
$array = ['wafi', 'wafa', 'wifi'];

foreach ($array as $key => $value){
    echo "$key - $value";
    echo "<br/>";
}