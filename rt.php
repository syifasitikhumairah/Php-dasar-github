<html>
<head>
    <title>Nilai Rata - Rata</title>
</head>
<body>
<h1>Input Bilangan</h1>
<hr>
<form method="POST" action="">
<table>
<tr>
    <td>Masukkan bilangan </td>
    <td>:</td>
    <td><input type='number' name='n'/></td>
    <td><input type='submit' name='kirim' value='Submit'/></td>
  </tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST['kirim'])) { 
$n = $_POST['n'];
echo "<form method='post' action='isirt.php'>";
echo "<h1> Input Bilangan </h1> <br>";
for ($i = 0; $i <= $n-1; $i++)
{
 echo "Bilangan ke- ".($i+1)." <input type='text' name='data".$i. "' /><br>";
}
 echo "<br><input type='submit' name='submit' value='Submit' />";
 echo "<input type='hidden' name='n' value='".$n."' />";
echo "</form>";
}
?>