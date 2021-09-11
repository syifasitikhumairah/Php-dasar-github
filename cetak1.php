<!DOCTYPE html>
<html>
<head>
    <title>Pencetakan Nilai</title>
    <style type="text/css">
		body{
      background-color: #cce2cb;
    }
    input{
      background-color: #cce2cb;
    }
    </style>
</head>
<body>
<form method="POST" action="cetak2.php">
<h2 align="center">Form Cetak Nilai Siswa<br>
SMK ASSALAAM BANDUNG <br>
Tahun 2021/2022
</h2>
<br>
<table align=center border="1" cellpadding="8" bgcolor='tan'>
<tr>
    <td colspan="5" bgcolor='coral'><br><br>
		<b>Nama : </b><input type='name' name='nama' required><br>
		<b>NIS : </b><input type='number' name='nis' required>
		<br><br>
	
	</td>
</tr>
<tr bgcolor='olive'>
    <th>NO</th>
    <th>Mata Pelajaran</th>
    <th>Nilai</th>
</tr>
<tr>
	<td>1</td>
	<td>Pendidikan Agama Islam</td>
	<td><input type='number' name='pai'></td>
</tr>
<tr>
	<td>2</td>
	<td>PPKN</td>
	<td><input type='number' name='pkn'></td>
</tr>
<tr>
	<td>3</td>
	<td>Bahasa Indonesia</td>
	<td><input type='number' name='indo'></td>
</tr>
<tr>
	<td>4</td>
	<td>Matematika</td>
	<td><input type='number' name='mtk'></td>
</tr>
<tr>
	<td>5</td>
	<td>Bahasa Inggris</td>
	<td><input type='number' name='igr'></td>
</tr>
<tr>
	<td>6</td>
	<td>Produktif Kreatif dan Kewirausahaan</td>
	<td><input type='number' name='pkk'></td>
</tr>
<tr>
	<td>7</td>
	<td>Al-Qur'an</td>
	<td><input type='number' name='aq'></td>
</tr>
<tr>
	<td>8</td>
	<td>Bimbingan Konseling</td>
	<td><input type='number' name='bk'></td>
</tr>
<tr>
	<td>9</td>
	<td>Produtif RPL</td>
	<td><input type='number' name='rpl'></td>
</tr>
<tr>
	<td>10</td>
	<td>Produktif TKJ</td>
	<td><input type='number' name='tkj'></td>
</tr>
<tr>
	<td colspan='5' rowspan='5' align='center'>
	<br><br>
	<input type='submit' name='submit' value='CETAK NILAI'></td>
</tr>

</table>
</form>
</body>
</html>