<html>
<head>
	<style type="text/css">

	</style>
</head>
<body>
<h2 align=center>Register Siswa Baru</h2>
<form method="POST" action="tabel.php">
<table align=center border="1" cellpadding="10">
	<tr>
		<th>Nama Siswa</th>
		<td>:</td>
		<td><input type='text' name='nama' placeholder='Nama siswa'></td>
	</tr>
    <tr>
		<th>Jenis Kelamin</th>
		<td>:</td>
		<td><input type='text' name='jk' placeholder='Jenis kelamin'></td>
	</tr>
    <tr>
		<th>Kelas</th>
		<td>:</td>
		<td><input type='text' name='kls' placeholder='Kelas'></td>
	</tr>
    <tr>
		<th>Alamat</th>
		<td>:</td>
		<td><input type='text' name='alamat' placeholder='Alamat'></td>
	</tr>
    <tr>
		<td colspan="5" align=center><input type='submit' name='simpan' value='Submit'>
        <button type='reset'>Batal</button></td>
	</tr>
	</table>
    <h4 align=center><a href="tabel.php">Kembali</a></h4>
</body>
</html>