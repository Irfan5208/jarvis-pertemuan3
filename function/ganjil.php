<?php
function tampilkanBilanganGanjil($awal, $akhir) {

    for ($bilangan = $awal; $bilangan <= $akhir; $bilangan++) {
      if ($bilangan % 2 !== 0) {
        echo $bilangan . " ";
      }
    }
  }
  

  tampilkanBilanganGanjil(1, 10);
  echo "<br/>";
  tampilkanBilanganGanjil(20, 50);