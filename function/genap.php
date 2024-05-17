<?php

function tampilkanBilanganGenap($awal, $akhir) {

    for ($bilangan = $awal; $bilangan <= $akhir; $bilangan++) {
      if ($bilangan % 2 === 0) {
        echo $bilangan . " ";
      }
    }
  }
  

  tampilkanBilanganGenap(2, 20);
  echo "<br/>";
  tampilkanBilanganGenap(100, 150);