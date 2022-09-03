<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diseño.css">
    <title>DATOS DE ENTRADA</title>
    
</head>
<body>
    <section class="for"> 
        <form action="estudios.php" method="post">
            <h4>DATOS PERSONALES</h4>
        <input type="text"  class="cajas" name="nom" id="nom" placeholder="Ingrese su nombre">
        <input type="text"   class="cajas" name="ape" id="ape" placeholder="Ingrese su apellidos">
        <input type="text"   class="cajas" name="edad" id="edad" placeholder="Ingrese su edad">
        <input type="text"  class="cajas" name="tel" id="tel" placeholder="Ingrese su telefono">
        <input type="email"  class="cajas"  name="cor" id="cor" placeholder="Ingrese su correo">
        <input type="text"  class="cajas" name="des" id="des" placeholder="Ingrese descripcion">  
        <input type="submit"  class="boton" value="Siguiente" name="bs">  
        </form>
    </section>
</body>
</html>