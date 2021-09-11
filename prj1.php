<!DOCTYPE html>
<html lang>
<head>
    <title>Pendaftaran konser</title>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <style type="text/css">
		body{
      background-color: #e4dac2;
    }
    hr{
      border-bottom : 2px double black;
    }
    input{
      background-color: #c4bdac;
    }
    select{
      background-color: #c4bdac;
    }
    button{
      background-color: #ff968a;
    }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="#">
   <img src="logo-smk.png" width="30" height="30" alt="logo">
 </a>
</nav>

<nav class="project 1">
 <a class="navbar-brand" href="#">
   <a href="prj1.php">Project 1</a>
 </a>
</nav>
<h2>KONSER AMAL ASSALAAM BAHAGIA</h2>
<hr>
<form method="POST" action="isikonser.php">
<table>
<tr>
    <td>Nama Pemesan</td>
    <td>:</td>
    <td><input type='text' name='nama' required></td>
  </tr>
  <tr>
    <td>Kode Studio</td>
    <td>:</td>
    <td><select name='kode'>
        <option name='stu1' value='Studio 1'>STUDIO 1</option>
        <option name='stu2' value='Studio 2'>STUDIO 2</option>
    </td>
  </tr>
  <tr>
    <td>Jenis Kelas</td>
    <td>:</td>
    <td><input type='radio' name='jk' value='vip'>VIP
        <input type='radio' name='jk' value='festival'>FESTIVAL</td>
  </tr>
  <tr>
    <td>Jumlah Tiket</td>
    <td>:</td>
    <td><input type='number' name='jt' reuired></td>
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