<?php
$biodata=[
    'Nama' => 'Syifa Siti Khumairah',
    'Umur' => '17 tahun',
    'Alamat' => 'Kp.Cangkuang',
    'Hobi' => ['Menggambar', 'Membaca Novel'],
    'Media Sosial' => ['Instagram' => 'syf.es', 'Facebook' => 'Syifa Khumairah']
];

echo "<pre>";
print_r($biodata);

echo "<br>";
echo "Pemanggilan Array 2 dimensi <br>";
echo $biodata['Hobi'][1]."<br>";
echo $biodata['Media Sosial']['Instagram'];

?>