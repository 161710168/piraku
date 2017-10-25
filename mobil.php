<?php
  class mobil{
    public $suara = 'bruuuum bruuuum bruuuum';
    public $berat = 30;
    public $roda = 4;
  }

  $mobil = new mobil;
  echo "bunyi mobil : " .$mobil->suara;
  echo "berat : " .$mobil->berat;
  echo "roda : " .$mobil->roda;
?>