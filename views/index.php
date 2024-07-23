<?php
include __DIR__."/layouts/app.php";
?>
<body class="cuerpo-color">
    <div class="caja-barra-navegacion">
        <div class="barra-de-navegacion">
            <nav class="navbar navbar-expand-md navbar-dark bg-transparent" id="colorbarra">
                <a class="navbar-brand"> <img src="public/IMAGENES/logo-green 2.png" alt="logo-empresa" width="199px" height="142px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="pruebaizquierda">
                        <ul class="navbar-nav" id="lista-barranav">
                            <li class="nav-item mr-5 active">
                                <a href="login.php" class="nav-link">
                                ALUMNOS 
                                </a>
                            </li>
                            <li class="nav-item mr-5 active">
                                <a href="/index.html" class="nav-link" >
                                PROGRAMAS
                                </a>
                            </li>
                            <li class="nav-item active mr-5">
                                <a href="index.php" class="nav-link">
                                INICIO
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
            </nav>
        </div>
    </div> 
    <div class="contenedor-imagen-central">
        <div class="caja-titulo-imagen-central">
            <h1 class="titulo-imagen-central">Proximamente</h1>
        </div>
        <div id="informaciondeservicios"></div>
        <div class="imagencentral">
            <img src="public/IMAGENES/logo-txt-white-21.png" alt="imagen central" id="imagencentral">
            <!-- <img src="/IMAGENES/baloncesto.jpg" alt="">  --> 
        </div>
    </div>
    <section class="caja-formulario">
    <?php 
        if (isset($_SESSION['form_contacto:index'])){
        ?>   
        <div class="alert alert-primary" role="alert">
            <?php
            echo $_SESSION['form_contacto:index'];
            ?>
        </div>
        <?php
        unset($_SESSION['form_contacto:index']    );
        }
        ?>
    
        <form class="formulario" id="formulario" action="crearContacto.php" method="POST"> 
                <h1 class="titulo-registro-informacion">Registrate para más información</h1>
                           <!--  
                            <div class="datos formulario__grupo" id="grupo__usuario" >
                                <div class="formulario__grupo-input">
                                    <input name="usuario" type="text" placeholder="Usuario" class="input-text formulario__input" id="nombre" name="nombre">    
                                    <i class="formulario__validacion-estado fa-solid fa-circle"></i>
                                </div>
                                <p class="formulario__input-error">El usuario debe ser de 4 a 16 digitos y solo puede contener numeros letras y guion bajo</p>   
                            </div>
                            --> 




                            <div class="datos formulario__grupo" id="grupo__nombre" >
                                <div class="formulario__grupo-input">
                                    <input name="nombre" type="text" placeholder="Nombre" class="input-text formulario__input" id="nombre" name="nombre">    
                                    <i class="formulario__validacion-estado fa-solid fa-circle"></i>
                                </div>
                                <p class="formulario__input-error">El nombre debe ser de 2 a 60 letras sin numeros</p>   
                            </div>
                            <div class="datos formulario__grupo" id="grupo__apellido" >
                                <div class="formulario__grupo-input">
                                        <input name="apellido" type="text" placeholder="Apellido" class="input-text formulario__input" id="apellido" name="apellido">    
                                        <i class="formulario__validacion-estado fa-solid fa-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El apellido debe ser de 2 a 60 letras sin numeros</p>   
                               <!--<div>-->                                                  
                            </div>                             
                    <div class="datos formulario__grupo" id="grupo__correo" >
                            <div class="formulario__grupo-input">
                                <input name="email" type="email" placeholder="correo" class="input-text formulario__input" id="correo" name="correo">    
                                <i class="formulario__validacion-estado fa-solid fa-circle"></i>
                            </div>
                            <p class="formulario__input-error">no es un correo valido</p>                                                 
                    </div>        
                 
                <!--terminos y condiciones-->
                <div class="formulario__grupo"  id="grupo__terminos">
                    <label class=" labelterminos formulario__label"> 
                        <input type="checkbox" class="formulario__checkbox" name="terminos" id="terminos">
                        acepto terminos y condiciones               
                    </label>
                </div>
                
                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error:</b> Por favor rellene completamente el formulario </p>
                </div>

                <div class="formulario__gurpo formulario__grupo-btn-enviar">
                    <button type="submit" class=" boton formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>

                
        </form>
    </section>
    <footer class="piedepagina">
        <div class="iconopie">
            <img src="public/IMAGENES/logo-green 2.png" alt="">
        </div>
        <div class="listapie">
            <ul>
                <li>Contacto</li>
                <li>tablas
                    <a href="/HTML/tablas.html"></a>
                </li>
                <li>youtube
                    <a href="https://www.youtube.com/">enlace externo</a>
                </li>
                <li>TrainabilitMx,2023</li>
            </ul>
        </div>
        <div class="iconosredes">
            <img src="/IMAGENES/WHATSAPP.png" alt="">
            <img src="/IMAGENES/Group.png" alt="">

        </div>

    </footer>
    <script src="jasonentre.js"></script>
    <script src="entrene.js"></script>   
    <script src="https://kit.fontawesome.com/d6a79537b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>
</html>