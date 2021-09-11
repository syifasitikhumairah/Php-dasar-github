<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata</title>
</head>
<body>
<fieldset>
<legend><b>FORMULIR BIODATA</b></legend>
<form action="" method="POST">

<table>
<br>
<tr>
    <td>Nama</td>
    <td> : </td>
    <td><input type='text' name='nama' required></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td> : </td>
    <td><input type='radio' name='jk' value='Laki-laki'>Laki-laki
        <input type='radio' name='jk' value='Perempuan'>Perempuan</td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td> : </td>
    <td><input type='date' name='tgl' required></td>
</tr>
<tr>
    <td>Agama</td>
    <td> : </td>
    <td><select name='agama'>
        <option value='Islam'>Islam</option>
        <option value='Katholik'>Katholik</option>
        <option value='Protestan'>Protestan</option>
        <option value='Budha'>Budha</option>
        <option value='Hindu'>Hindu</option>
        <option value='Konghucu'>Konghucu</option></select>
    </td>
</tr>
<tr>
    <td>Alamat</td>
    <td> : </td>
    <td><textarea name='alamat' required></textarea></td>
</tr>
<tr>
    <td>Hobi</td>
    <td> : </td>
    <td><input type='checkbox' name='hobi[]' value='Memasak'> Memasak
        <input type='checkbox' name='hobi[]' value='Melukis'> Melukis
        <input type='checkbox' name='hobi[]' value='Menggambar'> Menggambar
        <input type='checkbox' name='hobi[]' value='Bernyanyi'> Bernyanyi
        <input type='checkbox' name='hobi[]' value='Membaca Novel'> Membaca Novel
        <input type='checkbox' name='hobi[]' value='Berenang'> Berenang
    </td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><br><input type='submit' name='submit' value='Simpan'>
        <input type='reset' name='reset' value='Hapus'></td>
</tr>
</table>
</form>
</fieldset>

<?php
if (isset($_POST['submit'])){
    $nama = ($_POST['nama']);
    $jk = ($_POST['jk']);
    $tgl = ($_POST['tgl']);
    $agama = ($_POST['agama']);
    $alamat = ($_POST['alamat']);
    $hobi = ($_POST['hobi']);
    
function bio($nama, $jk, $tgl, $agama, $alamat, $hobi){
echo "<br>";
echo "<table>";

echo "<tr>";
echo "<td><h3>BIODATA</h3></td>";
echo "</tr>";

echo "<tr>";
echo "<td>Nama</td>";
echo "<td> : </td>";
echo "<td>" .$nama. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Jenis Kelamin</td>";
echo "<td> : </td>";
echo "<td>" .$jk. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Tanggal Lahir</td>";
echo "<td> : </td>";
echo "<td>" .$tgl. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Agama</td>";
echo "<td> : </td>";
echo "<td>" .$agama. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Alamat</td>";
echo "<td> : </td>";
echo "<td>" .$alamat. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Nama</td>";
echo "<td> : </td>";
echo "<td>" .implode (", ", $hobi). "</td>";
echo "</tr>";

echo "</table>";
}

bio($nama, $jk, $tgl, $agama, $alamat, $hobi);

}
?>

</body>
</html>