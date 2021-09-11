<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Lingkaran</title>
</head>
<body>
<fieldset>
<legend><b>MENGHITUNG LUAS DAN KELILING LINGKARAN</b></legend>
<form action="" method="POST">
<table>
<br>
<tr>
    <td> Masukkan Jari-jari </td>
    <td> : </td>
    <td><input type='number' name='jari'></td>
    <td><input type='submit' name='submit' value='Hitung'></td>
</tr>
</table>
</form>

<?php
// mmbuat fungsi
if (isset($_POST['submit'])){
function kll($jari, $phi = 3.14){
    $kll = $phi * ($jari * 2);
    return $kll;
}
function luas($jari, $phi = 3.14){
    $luas = $phi * ($jari * $jari);
    return $luas;
}

echo "<hr>";

echo "Jari - jari lingkaran = ".$_POST['jari'];
echo "<br>";
echo "Keliling Lingkaran = ". kll($_POST['jari']);
echo "<br>";
echo "Luas Lingkaran = ". luas($_POST['jari']);

}
?>
</fieldset>
</body>
</html>