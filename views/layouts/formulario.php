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
    
        <form class="formulario" id="formulario" action="testearContacto.php" method="POST"> 
                <h1 class="titulo-registro-informacion">Mi Cuenta</h1>
                           <!-- <div class="datos formulario__grupo" id="grupo__nombre" >
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
                               <div>                                              
                            </div>  -->                           
                    <div class="datos formulario__grupo" id="grupo__correo" >
                            <div class="formulario__grupo-input">
                                <input name="email" type="email" placeholder="correo" class="input-text formulario__input" id="correo" name="correo">    
                                <i class="formulario__validacion-estado fa-solid fa-circle"></i>
                            </div>
                            <p class="formulario__input-error">no es un correo valido</p>                                                 
                    </div>  
                    <div class="datos formulario__grupo" id="grupo__contraseña" >
                            <div class="formulario__grupo-input">
                                <input name="password" type="password" placeholder="contraseña" class="input-text formulario__input" id="contraseña" name="correo">    
                                <i class="formulario__validacion-estado fa-solid fa-circle"></i>
                            </div>
                            <p class="formulario__input-error">!ups error</p>                                                 
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