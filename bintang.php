<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Input bintang</title>
    <style type="text/css">
		body{
      background-color: #c1eabe;
    }
    hr{
      border-bottom : 2px double black;
    }
    input{
      background-color: #93f98c;
    }
    kirim{
        background-color: #ff968a;
    }
	</style>
</head>
<body>
<h2>MENGHITUNG INPUT BINTANG</h2>
<hr>
<form method="POST" action="">
<table>
<tr>
    <td>Masukkan bilangan</td>
    <td>:</td>
    <td><input type='number' name='bil' required></td>
    <td><input type='submit' name='kirim' value='Submit'></td>
</tr>
</table>
</body>
</html>
<?php
if(isset($_POST['kirim'])){
    $bil = $_POST['bil'];

    echo "<br>";
    echo "Program Segitiga Bintang Siku-siku<br>";
    for($a=0; $a<=$bil; $a++){
        for($a1=1; $a1<=$a; $a1++){
            echo "*";
    }
    echo "<br>";
}
    echo "<br>";
    echo "<b>Program Ganjil dan Genap dengan menggunakan for</b><br>";
    echo "Ini Bilangan Genap<br>";
    echo "<br>";
    for($bill=1; $bill<=$bil; $bill++){
        if($bill % 2 == 0){
        echo "$bill <br>";
    }else{
        echo "";
    }
}
}
?>