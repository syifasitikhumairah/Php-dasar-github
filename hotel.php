<!DOCTYPE html>
<html lang>
<head>
    <title>Data Hotel</title>
    <style type="text/css">
		body{
      background-color: #f9e1e0;
    }
    hr{
      border-bottom : 2px double black;
    }
    input{
      background-color: #feadb9;
    }
    select{
      background-color: #feadb9;
    }
    button{
      background-color: red;
    }
	</style>
</head>
<body>
<h2>DATA PENDAFTARAN TAMU</h2>
<hr>
<form method="POST" action="isihotel.php">
<table>
<tr>
    <td>Tanggal menginap</td>
    <td>:</td>
    <td><input type='date' name='tanggal'></td>
  </tr>
  <tr>
    <td>Nama tamu</td>
    <td>:</td>
    <td><input type='text' name='nama' required></td>
  </tr>
  <tr>
    <td>No Identitas</td>
    <td>:</td>
    <td><input type='number' name='no' required></td>
  </tr>
  <tr>
    <td>Tipe kamar</td>
    <td>:</td>
    <td><select name='tipe'>
        <option name='tipe' value='superior'>Superior</option>
        <option name='tipe' value='delux'>Delux</option>
        <option name='tipe' value='js'>Junior Suite</option>
    </td>
  </tr>
  <tr>
    <td>Durasi menginap</td>
    <td>:</td>
    <td><input type='number' name='durasi' required></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><input type='submit' name='kirim' value='Simpan'>
    <button type='reset'>Batal</button></td>
  </tr>
  


</table>


</form>
</body>
</html>