<h1 align=center>Kampus STT Bandung</h1>
<hr>

<?php
$mahasiswaPem1 = '{
  "1":{
    "NIM": 1992424,
    "Nama": "Syifa Siti Khumairah",
    "Umur": "17 Tahun",
    "Email": "syifask15@gmail.com"
  },
  "2":{
    "NIM": 1992425,
    "Nama": "Fani Ramadhanty",
    "Umur": "18 Tahun",
    "Email": "fanira@gmail.com"
  },
  "3":{
    "NIM": 1992426,
    "Nama": "Suci Apriani",
    "Umur": "17 Tahun",
    "Email": "suci@gmail.com"
  },
  "4":{
    "NIM": 1992427,
    "Nama": "Sandi Suryadi",
    "Umur": "18 Tahun",
    "Email": "sandi@gmail.com"
  },
  "5":{
    "NIM": 1992428,
    "Nama": "Tiara Novita Sari",
    "Umur": "18 Tahun",
    "Email": "tiara@gmail.com"
  }
}';

$mahasiswaPem2 = '{
    "1":{
      "NIM": 1992429,
      "Nama": "Seni oktoviani",
      "Umur": "17 Tahun",
      "Email": "seni@gmail.com"
    },
    "2":{
      "NIM": 1992430,
      "Nama": "Selvi",
      "Umur": "18 Tahun",
      "Email": "selvi@gmail.com"
    },
    "3":{
      "NIM": 1992431,
      "Nama": "Silvia",
      "Umur": "18 Tahun",
      "Email": "sivia@gmail.com"
    },
    "4":{
      "NIM": 1992432,
      "Nama": "Sifa Afna",
      "Umur": "17 Tahun",
      "Email": "sifaafna@gmail.com"
    },
    "5":{
      "NIM": 1992433,
      "Nama": "Ruslan",
      "Umur": "18 Tahun",
      "Email": "ruslan@gmail.com"
    }
  }';

  $mahasiswaPem3 = '{
    "1":{
      "NIM": 1992434,
      "Nama": "Adya Eka",
      "Umur": "17 Tahun",
      "Email": "adyaeka@gmail.com"
    },
    "2":{
      "NIM": 1992435,
      "Nama": "Nabila Khaerunnisa",
      "Umur": "18 Tahun",
      "Email": "nblkh@gmail.com"
    },
    "3":{
      "NIM": 1992436,
      "Nama": "Adzura Angelita",
      "Umur": "17 Tahun",
      "Email": "dzura@gmail.com"
    },
    "4":{
      "NIM": 1992437,
      "Nama": "Kayla Rahmanisa",
      "Umur": "18 Tahun",
      "Email": "kaylarahma@gmail.com"
    },
    "5":{
      "NIM": 1992438,
      "Nama": "Lira Rahmawati",
      "Umur": "17 Tahun",
      "Email": "lira@gmail.com"
    }
  }';

  $mahasiswaPem4 = '{
    "1":{
      "NIM": 1992439,
      "Nama": "Meylani Rahmawati",
      "Umur": "18 Tahun",
      "Email": "meylani@gmail.com"
    },
    "2":{
      "NIM": 1992440,
      "Nama": "Bagas Firmansyah",
      "Umur": "18 Tahun",
      "Email": "bagasfrmnsyh@gmail.com"
    },
    "3":{
      "NIM": 1992441,
      "Nama": "Diki Alif",
      "Umur": "18 Tahun",
      "Email": "dikialif@gmail.com"
    },
    "4":{
      "NIM": 1992442,
      "Nama": "Salsabila Daranti",
      "Umur": "17 Tahun",
      "Email": "itsmeca@gmail.com"
    },
    "5":{
      "NIM": 1992443,
      "Nama": "Maudy Meilisa",
      "Umur": "17 Tahun",
      "Email": "itsmeidy@gmail.com"
    }
  }';


$listmahasiswa1 = json_decode($mahasiswaPem1);
$listmahasiswa2 = json_decode($mahasiswaPem2);
$listmahasiswa3 = json_decode($mahasiswaPem3);
$listmahasiswa4 = json_decode($mahasiswaPem4);

echo "<br>";
echo "<b>1. Dosen Pembimbing : Danny Indra Gunawan</b> <p>";
foreach ($listmahasiswa1 as $key => $maha) {
  echo "{$key}. NIM : {$maha->NIM} <br>";
  echo " Nama : {$maha->Nama} <br>";
  echo " Umur : {$maha->Umur} <br>";
  echo " Email : {$maha->Email} <p>";
}
echo "<br>";
echo "<b>2. Dosen Pembimbing : Muhammad Sabar</b> <p>";
foreach ($listmahasiswa2 as $key => $maha) {
    echo "{$key}. NIM : {$maha->NIM} <br>";
    echo " Nama : {$maha->Nama} <br>";
    echo " Umur : {$maha->Umur} <br>";
    echo " Email : {$maha->Email} <p>";
  }
  echo "<br>";
echo "<b>3. Dosen Pembimbing : Tarsinah Sumarni</b> <p>";
foreach ($listmahasiswa3 as $key => $maha) {
      echo "{$key}. NIM : {$maha->NIM} <br>";
      echo " Nama : {$maha->Nama} <br>";
      echo " Umur : {$maha->Umur} <br>";
      echo " Email : {$maha->Email} <p>";
    }
    echo "<br>";
echo "<b>4. Dosen Pembimbing : Saepudin </b><p>";
foreach ($listmahasiswa4 as $key => $maha) {
    echo "{$key}. NIM : {$maha->NIM} <br>";
    echo " Nama : {$maha->Nama} <br>";
    echo " Umur : {$maha->Umur} <br>";
    echo " Email : {$maha->Email} <p>";
  }
?>