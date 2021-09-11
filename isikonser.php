<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran konser</title>
    <style type="text/css">
		body{
      background-color: #e4dac2;;
    }
    h4{
      color: #ff968a;
    }
    hr{
      border-bottom : 2px double black;
    }
    
	</style>
</head>
<body>
<h2>KONSER AMAL ASSALAAM BAHAGIA</h2>
<hr>
<form method="GET" action="konser.php">
<table>
<tr>
    <td>Nama Pemesan</td>
    <td>:</td>
    <td><?php $nama = $_POST['nama'];
            echo"$nama";
    ?></td>
  </tr>
  <tr>
    <td>Kode Studio</td>
    <td>:</td>
    <td><?php $kode = $_POST['kode'];
        if($kode == 'stu1'){
            echo "STUDIO 1";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Bintang tamu</td>";
            echo "<td>:</td>";
            echo "<td>Opick </td>";
            echo "</tr>";
        }else{
            echo "STUDIO 2";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Bintang tamu</td>";
            echo "<td>:</td>";
            echo "<td>Raihan</td>";
            echo "</tr>";
        }
    ?></td>
  </tr>
  <tr>
    <td>Jenis Kelas</td>
    <td>:</td>
    <td><?php $jk = $_POST['jk'];
        if($jk == 'vip'){
            echo "VIP";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Harga</td>";
            echo "<td>:</td>";
            $hargavip = 500000;
            echo "<td>Rp.$hargavip </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Jumlah beli</td>";
            echo "<td>:</td>";
            $jt = $_POST['jt'];
            echo "<td>$jt tiket</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Total </td>";
            echo "<td>:</td>";
            $total1=$jt*$hargavip;
            echo "<td>Rp.$total1</td>";
            echo "</tr>";

            
        }else{
            echo "FESTIVAL";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Harga</td>";
            echo "<td>:</td>";
            $hargafv = 250000;
            echo "<td>Rp.$hargafv</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Jumlah beli</td>";
            echo "<td>:</td>";
            $jt = $_POST['jt'];
            echo "<td>$jt tiket </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Total </td>";
            echo "<td>:</td>";
            $total2=$jt*$hargafv;
            echo "<td>Rp.$total2</td>";
            echo "</tr>";
        }
    ?></td>
  </tr>
</table>
        <h4><a href="konser.php">INPUT KEMBALI</a></h4>
</body>
</html>
<?php
if(isset($_POST['kirim'])){
}

?>