<!DOCTYPE html>
<html>
<head>
    <title>Pencetakan Nilai</title>
    <style type="text/css">
		body{
      background-color: #cce2cb;
    }
    
    </style>
</head>
<body>
<form method="GET" action="cetak1.php">
<h2 align="center">Form Cetak Nilai Siswa<br>
SMK ASSALAAM BANDUNG <br>
Tahun 2021/2022
</h2>
<br>
<?php
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $pai = $_POST['pai'];
    $pkn = $_POST['pkn'];
    $indo = $_POST['indo'];
    $mtk = $_POST['mtk'];
    $igr = $_POST['igr'];
    $pkk = $_POST['pkk'];
    $aq = $_POST['aq'];
    $bk = $_POST['bk'];
    $rpl = $_POST['rpl'];
    $tkj = $_POST['tkj'];
}
$mapel   = [
  'Pendidikan Agama Islam' => $pai,
  'PPKN' => $pkn,
  'Bahasa Indonesia' => $indo, 
  'Matematika' => $mtk, 
  'Bahasa Iggris' => $igr, 
  'Produk Kreatif dan Kewirausahaan' => $pkk, 
  'Al-Quran' => $aq,
  'Bimbingan Konseling' => $bk,
  'Produktif RPL' => $rpl,
  'Produktif TKJ' => $tkj,
];

echo "<table border='2' cellpadding='8' align='center' bgcolor='tan'>";
echo "<tr>
      <td colspan='5' bgcolor='coral'>
        <br>
        Nama : " .$nama."<br>
        NIS : " .$nis."<br>
        <br>
      </td>
    </tr>

<tr bgcolor='olive'>
<th>NO</th>
<th>Mata Pelajaran</th>
<th>Grade</th>
</tr>";

  $a = 1;
  $total= 0;
  $grade= "";
  foreach($mapel as $key => $value){
      if($value > 85 && $value <= 100){
        $grade= "A";
        $total= $total + 4;
      }elseif($value > 70 && $value <= 85){
        $grade= "B";
        $total= $total + 3;
      }elseif($value > 60 && $value <= 70){
        $grade= "C";
        $total= $total + 3;
      }elseif($value > 40 && $value <= 60){
        $grade= "D";
        $total= $total + 3;
      }elseif($value > 0 && $value <= 40){
        $grade= "E";
        $total= $total + 1;
      }
echo "
<tr>
<td>$a</td>
<td>$key</td>
<td>$grade</td>
</tr>";
echo '<pre>';
$a++;
}

echo "<tr>
      <td colspan='5' align='center'>
      <br><br>
      Nilai Rata-ratanya adalah : ".($total/10)."</td>
      </tr>";
echo "</table>";
?>
</form>
</body>
</html>