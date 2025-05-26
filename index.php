<!DOCTYPE html>
<html lang="en">

<!-- Nombre e imagen del sitio web que aparece en la ventana superior del navegador -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA AURORA</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/LogoBBM.jpg"/>
</head>
<body>
    <!-- Contenedor el cual tiene el formulario para el ingreso de sesión de los usuarios -->
    <div class="container-all">

        <div class="ctn-form">
            <img src="images/LogoBBM.jpg" alt="" class="logo"><br>
           <center> <h1 class="tittle">Iniciar Sesión</h1> </center>    
            
            <form action="validar.php" method="POST">
                <label for=""></label>
                <input type="text" name="usuarioU" id="usuarioU" placeholder="Ingrese su usuario" required>
                <span class="msg error"></span>
                <label for=""></label>
                <input type="password" name="passwordU" id="passwordU" placeholder="Ingrese su contraseña" required>
                <span class="msg error"></span>
                <input type="submit" value="Ingresar">
            </form>
           <span class="text-footer"> Biblioteca Aurora </span> 
        </div>

        <!-- Texto lateral el cual contiene el nombre del sitio y una frase reflexiva alusiva al mismo -->

       <div class="ctn-text">
           <div class="capa"></div>
           <h1 class="title-description">Biblioteca Aurora.</h1>
           <p class="text-description">"Un libro representa la experiencia de una persona que ha logrado descubrir conceptos, técnicas, 
               secretos, estrategias, fuentes de inspiración e imaginación. Pero también te permite tener un paso adelante, aprender desde
            los errores, obstáculos que otras personas ha vivido." <br><br>  Anonimo.  </p>
       </div>

    </div>
    </form>
</body>
</html>