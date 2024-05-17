<?php

$nilai1 = 50;
$nilai2 = 10;

if ($nilai1 < $nilai2){
    echo "Nilai 1 lebih kecil dari nilai 2";
} elseif ($nilai1 > $nilai2){
    echo "Nilai 1 lebih besar dari nilai 2";
} elseif ($nilai1 = $nilai2){
    echo "Nilai 1 sama dengan nilai 2";
} else {
    echo "Jawaban tidak diketahui";
}

echo "<br/>";
echo "<br/>";

$day = date('D');
echo "Hari ini adalah $day <br/>";
if ($day == "Fri"){
    echo "Kelas Jarvis akan dimulai";
} elseif ($day == "Sat"){
    echo "Kelas Jarvis dimulai";
} elseif ($day == "Sun"){
    echo "Kelas Jarvis dimulai";
} elseif ($day == "Mon"){
    echo "Kelas Jarvis libur";
} else {
    echo "Jawaban tidak diketahui";
}
