<?php
$prov = array(
     array('Jawa Barat','Bandung','Depok','Bogor'),
     array('Jawa Timur','Madiun','Surabaya','Malang'),
     array('Jawa Tengah','Semarang','Tegal','Solo'),
);
?>
<ul>
    <?php foreach ($prov as $key => $value):  ?>
        <li>Kota - kota di <?= $value[0] ?> adalah <?= $value[1].
        ', '.$value[2].', '.$value[3] ?>
        </li>
    <?php endforeach ?>
</ul>