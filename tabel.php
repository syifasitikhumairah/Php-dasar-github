<html>
<head>
    <title>Tabel daftar siswa</title>
	<style type="text/css">
	th {
		border: 1px solid;
		padding: 5px 15px;
	}
    table {
            width: 50%;
    }
	</style>
</head>
<body>
<br>
    <center>
<h2>MENAMPILKAN DATA SISWA</h2>
<a href="tampiltabel.php"><input type='submit' name='submit' value='Tambah siswa'/></a>
<br><br>    
</center>
<form method="GET" action="tampiltabel.php">
<table align=center border="1" cellpadding="7">
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Kelas</th>
        <th>Alamat</th>
	</tr>
    <tr>
		<td><?php $nama = $_POST['nama'];
            echo "$nama";
        ?></td>
        <td><?php $jk = $_POST['jk'];
            echo "$jk";
        ?></td>
        <td><?php $kls = $_POST['kls'];
            echo "$kls";
        ?></td>
        <td><?php $alamat = $_POST['alamat'];
            echo "$alamat";
        ?></td>
	</tr>
	</table>
</form>
</body>
</html>