<?php
$negara = array(
     array('Benua Asia',
          'Indonesia', 'Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Palembang',
          'Malaysia', 'Kuala Lumpur', 'Melaka', 'George Town', 'Kinabalu', 'Johor Bahru',
          'Singapura', 'Singapura', 'Jurong', 'Kampong Glam', 'Woodlands', 'Seletar'),
     array('Benua Afrika',
          'Afrika Selatan','Cape Town', 'Johannesburg', 'Pretoria', 'Durban', 'Port Elzabeth',
          'Nigeria','Lagos', 'Abuja', 'Ibadan', 'Achalla', 'Port Harcout',
          'Kenya','Nairobi', 'Mombasa', 'Garissa', 'Kisumu', 'Naivasha',),
     array('Benua Australia',
          'Victoria', 'Melbourne', 'Benalla', 'Ballarat', 'Mildura', 'Latribe City',
          'Australia Selatan', 'Adelaide', 'Murray Bridge', 'Victor Harbor', 'Port Augusta', 'Whyalla',
          'Queensland','Brisbane', 'Bundaberg', 'Gladstone', 'Gympie', 'Herver Bay',),
     array('Benua Eropa',
          'Jerman', 'Berlin', 'Hamburg', 'Frankfurt', 'Neremberg', 'Regensburg',
          'Italia', 'Roma', 'Milan', 'Napoli', 'Turin', 'Verona',
          'Prancis', 'Paris', 'Lyon', 'Montpellier', 'Marseille', 'Starsbourg',),
);


?>
<ul>
    <?php foreach ($negara as $key => $value):  ?>
        <li>Negara - negara yang ada di <b><?= $value[0] ?></b> adalah <?= $value[1].
        ', '.$value[7].', '.$value[13] ?><br>
        Kota di Negara <?= $value[1] ?> adalah : <?= $value[2].
        ', '.$value[3].', '.$value[4].', '.$value[5].', '.$value[6] ?> <br>
        Kota di Negara <?= $value[7] ?> adalah : <?= $value[8].
        ', '.$value[9].', '.$value[10].', '.$value[11].', '.$value[12] ?> <br>
        Kota di Negara <?= $value[13] ?> adalah : <?= $value[14].
        ', '.$value[15].', '.$value[16].', '.$value[17].', '.$value[18] ?> <br>
        </li><br>

    <?php endforeach ?>

</ul>