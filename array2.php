<?php
$satu = [
    'Indonesia',
    'Malaysia',
    'Singapura',
    'Brunei Darussalam',
    'Filipina',
  ];

  echo '1. Output array dengan menggunakan perintah PRINT_R()';
  echo '<pre>';
  print_r($satu);

  $dua = [
    'Indonesia' => 'Jakarta',
    'Malaysia' => 'Kuala Lumpur',
    'Singapura' => 'Singapura',
    'Thailand' => 'Bangkok',
    'Filipina' => 'Manila',
  ];

  
  // get all values
echo '<br>';
echo "2. Contoh program array assosiatif<br><br>";
foreach ($dua as $key => $value) {
  echo '<li>Ibu Kota '. $key . ' adalah ' . $value.'</li>';
  echo '<br>';
}

?>