<?php
function hitungAritmatika($bil1, $bil2, $operator) {
  
    switch ($operator) {
      case '+':
        return $bil1 + $bil2;
      case '-':
        return $bil1 - $bil2;
      case '/':
        if ($bil2 === 0) {
          echo "Error: Pembagian dengan nol tidak diizinkan!";
          return null;
        }
        return $bil1 / $bil2;
      case '*':
        return $bil1 * $bil2;
      default:
        echo "Error: Operator tidak valid!";
        return null;
    }
  }
  
  // Contoh Penggunaan
  $hasilTambah = hitungAritmatika(10, 5, '+');
  echo "Hasil 10 + 5 = " . $hasilTambah;
  echo "<br/>";

  $hasilKurang = hitungAritmatika(20, 12, '-');
  echo "Hasil 20 - 12 = " . $hasilKurang ;
  echo "<br/>";

  $hasilBagi = hitungAritmatika(15, 3, '/');
  echo "Hasil 15 / 3 = " . $hasilBagi;
  echo "<br/>";
  
  $hasilKali = hitungAritmatika(7, 8, '*');
  echo "Hasil 7 * 8 = " . $hasilKali;