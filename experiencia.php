<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diseño.css">
    <title>Experiencia De Trabajo</title>
    
</head>
<body>
    <?php
        $nom=$_POST['tn'];
        echo $nom;
        $ape=$_POST['ta'];
        echo $ape;
        $edad=$_POST['te'];
        echo $edad;
        $tel=$_POST['tt'];
        echo $tel;
        $cor=$_POST['tc'];
        echo $cor;
        $des=$_POST['td'];
        echo $des;
        $secu=$_POST['secu'];
        echo $secu;
        $asecu=$_POST['asecu'];
        echo $asecu;
        $supe=$_POST['supe'];
        echo $supe;
        $asupe=$_POST['asupe'];
        echo $asupe;
        $uni=$_POST['uni'];
        echo $uni;
        $auni=$_POST['auni'];
        echo $auni;
    ?>
    <section class="for2">           
        <form action="salidas.php" method="post">
                <input type="hidden" name="tnom" value="<?php echo $nom; ?>">
                <input type="hidden" name="tape" value="<?php echo $ape; ?>">
                <input type="hidden" name="tedad" value="<?php echo $edad; ?>">
                <input type="hidden" name="ttel" value="<?php echo $tel; ?>">
                <input type="hidden" name="tcor" value="<?php echo $cor; ?>">
                <input type="hidden" name="tdes" value="<?php echo $des; ?>">
                <input type="hidden" name="ts" value="<?php echo $secu; ?>">
                <input type="hidden" name="tas" value="<?php echo $asecu; ?>">
                <input type="hidden" name="tsu" value="<?php echo $supe; ?>">
                <input type="hidden" name="tasu" value="<?php echo $asupe; ?>">
                <input type="hidden" name="tu" value="<?php echo $uni; ?>">
                <input type="hidden" name="tau" value="<?php echo $auni; ?>">
            <h4>EXPERIENCIA</h4>
            <h5>Lugar</h5>
        <input type="text"  class="cajas" name="lugar1" id="lugar1" placeholder="Ingrese nombre de la Empresa">
        <input type="text"   class="cajas" name="año1" id="año1" placeholder="Ingrese el año">
        <hr>
        <br>
        <h5>Lugar</h5>
        <input type="text"  class="cajas" name="lugar2" id="lugar2" placeholder="Ingrese nombre de la Empresa">
        <input type="text"   class="cajas" name="año2" id="año2" placeholder="Ingrese el año">
        <hr>
        <br>
        <h5>Lugar</h5>
        <input type="text"  class="cajas" name="lugar3" id="lugar3" placeholder="Ingrese nombre de la Empresa">
        <input type="text"   class="cajas" name="año3" id="año3" placeholder="Ingrese el año">

        <input type="submit"  class="boton" value="Siguiente" name="bs">  
        </form>
    </section>

</body>
</html>