<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/salida.css">
    <title>Curriculum Vitae</title>
    
</head>
<body>
    <section class="for">
        <h3>CURRICULO DE VIDA</h3>
        <h4>DATOS PERSONALES</h4>
        <H5>Nombres y Apellidos:</H5>
    <?php
            $n=$_POST['tnom'];
            $a=$_POST['tape'];
            echo $n. ' ' .$a;
    ?>
 
    <h5>Edad:</h5>
    <?php
            $e=$_POST['tedad'];
            echo $e;
    ?>
    <h5>Telefono:</h5>
    <?php
            $t=$_POST['ttel'];
            echo $t;
    ?>
    <h5>Correo:</h5>
    <?php
            $c=$_POST['tcor'];
            echo $c;
    ?>
    <h5>Descripcion:</h5>
    <?php
            $d=$_POST['tdes'];
            echo $d;
    ?>
    <br>
    <br>
    <h4>ESTUDIOS</h4>
    <h5>Secundaria:<?php $s=$_POST['ts']; echo $s; ?> - Año:<?php $as=$_POST['tas']; echo $as; ?> </h5>
    <h5>Superior: <?php $su=$_POST['tsu']; echo $su; ?> - Año:<?php $asu=$_POST['tasu']; echo $asu; ?></h5>
    <h5>Universidad: <?php $u=$_POST['tu']; echo $u; ?> - Año:<?php $au=$_POST['tau']; echo $au; ?></h5>
    <br>
    <h4>EXPERIENCIA</h4>
    <h5>Lugar:<?php $l1=$_POST['lugar1']; echo $l1; ?> - Año:<?php $a1=$_POST['año1']; echo $a1; ?></h5>
    <h5>Lugar:<?php $l2=$_POST['lugar2']; echo $l2; ?> - Año:<?php $a2=$_POST['año2']; echo $a2; ?></h5>
    <h5>Lugar:<?php $l3=$_POST['lugar3']; echo $l3; ?> - Año:<?php $a3=$_POST['año3']; echo $a3; ?></h5>
    <br>
    </section>
    
</body>
</html>