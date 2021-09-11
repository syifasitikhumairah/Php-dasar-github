<?php
if(isset($_POST['btt'])){
    $jumlah = $_POST['jumlah'];
    $total = 0;
    for($a=1; $a<=$jumlah; $a++){
        $bill[$a] = $_POST['bill'];
    }
    for($a=1; $a<=$jumlah; $a++){
        $total +- $bill[$a];
    }
    $rata2 = $total/$jumlah;
    echo "<br>";
    echo "Jumlah Nilai Rata-ratanya adalah = ".$rata2;
}
?>