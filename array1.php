<?php
$jurusan = [
  'Jurusan Teknik Informatika',
  'Jurusan Sistem Informasi',
  'Jurusan Teknik Komputer',
  'Jurusan Manajemen Informatika'
];
 
// get all values
echo "1. Contoh program array numeric<br><br>";
$jumlah_jurusan = count($jurusan);
for ($a=0; $a <= $jumlah_jurusan; $a++) {
  echo $jurusan[$a].' - ada di index' .' '.$a ;
  echo '<br>';
}


$index = [
    'Jurusan 1' => 'Teknik Informatika',
    'Jurusan 2' => 'Sistem Informasi',
    'Jurusan 3' => 'Teknik Komputer',
    'Jurusan 4' => 'Manajemen Informatika',
  ];


// get all values
echo "2. Contoh program array assosiatif<br><br>";
foreach ($index as $key => $value) {
  echo 'Kata Kunci Index = '.$key . ', Nilai = ' . $value;
  echo '<br>';
}

?>