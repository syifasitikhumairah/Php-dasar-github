<!DOCTYPE html>
<html>
<head>
    <title>Data hotel</title>
    <style type="text/css">
		body{
      background-color: #f9e1e0;
    }
    hr{
      border-bottom : 2px double black;
    }
	</style>
</head>
<body>
<h2>DATA PENDAFTARAN TAMU</h2>
<hr>
<form method="GET" action="hotel.php">
<?php
if(isset($_POST['kirim'])){
    $tanggal= $_POST['tanggal'];
    $nama= $_POST['nama'];
    $no= $_POST['no'];
    $tipe= $_POST['tipe'];
    $durasi= $_POST['durasi'];

    echo "<table>";
    echo "<tr>";
    echo "<td>Tanggal menginap</td>";
    echo "<td>:</td>";
    echo "<td>$tanggal</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Nama tamu</td>";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>No Identitas</td>";
    echo "<td>:</td>";
    echo "<td>$no</td>";
    echo "</tr>";
    
    if($tipe == "superior"){
        $superior = 850000;
        $total = $superior * $durasi;
        echo "<tr>";
        echo "<td>Tipe kamar</td>";
        echo "<td>: </td>";
        echo "<td>Superior</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Harga</td>";
        echo "<td>: </td>";
        echo "<td>Rp. $superior / malam</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Durasi menginap</td>";
        echo "<td>: </td>";
        echo "<td>$durasi malam</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Total harga</td>";
        echo "<td>: </td>";
        echo "<td>Rp. $total</td>";
        echo "</tr>";
        if($total >= 2500000){
            $diskon = $total * (25/100);
            $diskon1 = $total - $diskon;
            echo "<tr>";
            echo "<td><b>Anda mendapatkan diskon sebesar 25%</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Total bayar</td>";
            echo "<td>: </td>";
            echo "<td>Rp. $diskon1</td>";
            echo "</tr>";

        }elseif($total >= 1700000){
            $diskon = $total * (15/100);
            $diskon2 = $total - $diskon;
            echo "<tr>";
            echo "<td><b>Anda mendapatkan diskon sebesar 15%</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Total bayar</td>";
            echo "<td>: </td>";
            echo "<td>Rp. $diskon2</td>";
            echo "</tr>";
        }else {
            echo "Tidak ada diskon";
        }
    }
    elseif($tipe == "delux"){
        $delux = 950000;
        $total = $delux * $durasi;
        echo "<tr>";
        echo "<td>Tipe kamar</td>";
        echo "<td>: </td>";
        echo "<td>Delux</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Harga</td>";
        echo "<td>: </td>";
        echo "<td>Rp. $delux / malam</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Durasi menginap</td>";
        echo "<td>: </td>";
        echo "<td>$durasi malam</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Total harga</td>";
        echo "<td>: </td>";
        echo "<td>Rp. $total</td>";
        echo "</tr>";
        if($total >= 2500000){
            $diskon = $total * (25/100);
            $diskon1 = $total - $diskon;
            echo "<tr>";
            echo "<td><b>Anda mendapatkan diskon sebesar 25%</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Total bayar</td>";
            echo "<td>: </td>";
            echo "<td>Rp. $diskon1</td>";
            echo "</tr>";
        }elseif($total >= 1700000){
            $diskon = $total * (15/100);
            $diskon2 = $total - $diskon;
            echo "<tr>";
            echo "<td><b>Anda mendapatkan diskon sebesar 15%</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Total bayar</td>";
            echo "<td>: </td>";
            echo "<td>Rp. $diskon2</td>";
            echo "</tr>";
        }else {
            echo "Tidak ada diskon";
        }
    } else {
        $js = 1400000;
        $total = $js * $durasi;
        echo "<tr>";
        echo "<td>Tipe kamar</td>";
        echo "<td>: </td>";
        echo "<td>Junior Suite</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Harga</td>";
        echo "<td>: </td>";
        echo "<td>Rp. $js / malam</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Durasi menginap</td>";
        echo "<td>: </td>";
        echo "<td>$durasi malam</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Total harga</td>";
        echo "<td>: </td>";
        echo "<td>Rp. $total</td>";
        echo "</tr>";
        if($total >= 2500000){
            $diskon = $total * (25/100);
            $diskon1 = $total - $diskon;
            echo "<tr>";
            echo "<td><b>Anda mendapatkan diskon sebesar 25%</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Total bayar</td>";
            echo "<td>: </td>";
            echo "<td>Rp. $diskon1</td>";
            echo "</tr>";
        }elseif($total >= 1700000){
            $diskon = $total * (15/100);
            $diskon2 = $total - $diskon;
            echo "<tr>";
            echo "<td><b>Anda mendapatkan diskon sebesar 15%</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Total bayar</td>";
            echo "<td>: </td>";
            echo "<td>Rp. $diskon2</td>";
            echo "</tr>";
        }else {
            echo "Tidak ada diskon";
        }
    }
}
?>
</table>
<br>
<a href="hotel.php">INPUT KEMBALI</a>
</body>
</html>