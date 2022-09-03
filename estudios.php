<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diseño.css">
    <title>DATOS DE Estudios</title>
    
</head>
<body>
    <?php
        $nom=$_POST['nom'];
        
        $ape=$_POST['ape'];
     
        $edad=$_POST['edad'];
        
        $tel=$_POST['tel'];
        
        $cor=$_POST['cor'];
        
        $des=$_POST['des'];
        
    ?>
    <section class="for2"> 
        <form action="experiencia.php" method="post">
                <input type="hidden" name="tn" value="<?php echo $nom; ?>">
                <input type="hidden" name="ta" value="<?php echo $ape; ?>">
                <input type="hidden" name="te" value="<?php echo $edad; ?>">
                <input type="hidden" name="tt" value="<?php echo $tel; ?>">
                <input type="hidden" name="tc" value="<?php echo $cor; ?>">
                <input type="hidden" name="td" value="<?php echo $des; ?>">
            <h4>ESTUDIOS</h4>
            <h5>Secundaria</h5>
        <input type="text"  class="cajas" name="secu" id="secu" placeholder="Ingrese nombre de la institucion">
        <input type="text"   class="cajas" name="asecu" id="asecu" placeholder="Ingrese el año">
        <hr>
        <br>
        <h5>Superior</h5>
        <input type="text"  class="cajas" name="supe" id="supe" placeholder="Ingrese nombre">
        <input type="text"   class="cajas" name="asupe" id="asupe" placeholder="Ingrese el año">
        <hr>
        <br>
        <h5>Universidad</h5>
        <input type="text"  class="cajas" name="uni" id="uni" placeholder="Ingrese nombre">
        <input type="text"   class="cajas" name="auni" id="auni" placeholder="Ingrese el año">

        <input type="submit"  class="boton" value="Siguiente" name="bs">  
        </form>
    </section>
   
   
</body>
</html>