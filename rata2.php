<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Rata-rata</title>
    <style type="text/css">
		body{
      background-color: #c6dbda;
    }
    hr{
      border-bottom : 2px double black;
    }
    input{
      background-color: #8fcaca;
    }
    button{
      background-color: #ff968a;
    }
	</style>
</head>
<body>
<h2>MENGHITUNG BILANGAN RATA-RATA</h2>
<hr>
<form method="POST" action="">
<table>
<tr>
    <td>Masukkan bilangan </td>
    <td>:</td>
    <td><input type='number' name='bill'></td>
    <td><input type='submit' name='kirim' value='Submit'></td>
  </tr>
</table>

<?php 
echo "<br>";
if (isset($_POST['kirim'])){
    $bill = $_POST['bill'];
    echo "<form method='post' action=''>";
      for ($a=1; $a <= $bill; $a++){
            echo "Bilangan ke - $a : ";
            echo "<input type='number' name='bilangan".$a."'>";
            echo "<br>";
        }
    echo "<input type='hidden' name='jumlah' value='$bill'>";
    echo "<br>";
    echo "<button type='submit' name='btt'>Submit</>";
    echo "</form>";
}

if (isset($_POST['btt'])){
    $jumlah = $_POST['jumlah'];
    $total = 0;
    for ($i= 1; $i <= $jumlah; $i++){
        $bil[$i] = $_POST['bilangan'.$i];
    }
    for ($i=1; $i <= $jumlah; $i++){
        $total += $bil[$i];
    }
    $rata2 = $total/$jumlah;
    for ($i=1; $i <= $jumlah; $i++){
    echo "Bilangan ke - ".$i." : ".$bil[$i]."<br>";
    }
    echo "<br>";
    echo "Jumlah Nilai Rata-ratanya adalah = ".$rata2;
}
?>
</body>
</html>