"use strict"
/*Declaro clase para crear usuarios*/
class usuarios {
    static instancias = [];
    constructor(nombre,apellido,correo){
        this.nombre = nombre;
        this.apellido = apellido;
        this.correo = correo;

        usuarios.instancias.push(this);
    }
    /*metodo para mostrar usuarios*/
    mostrarInformacion(){
        console.log(`Nombre : ${this.nombre}, Apellido : ${this.apellido}, correo : ${this.correo}`);
    }
    /*metodo para validar los datos ingresados*/
    static datosformulario(){
        const nombre = document.getElementById("nombre").value;
        const apellido = document.getElementById("apellido").value;
        const correo = document.getElementById("correo").value;
                
        let usuario =  new usuarios(nombre,apellido,correo);
        usuario.mostrarInformacion();
    }
        static mostrartodaslasinstancias(){
        usuarios.instancias.forEach(instancia =>{
            instancia.mostrarInformacion();
        })
    }
}

const formulario=document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");



/*Objeto con expresiones regulares para validacion*/
const expresiones ={
    enombre:/^([a-zA-Z\s]+){2,60}$/,
    ecorreo: /^([a-z0-9]+)([@])([a-z]+)([.])([a-z]{2,3})$/
    }
 /*creo objeto campos para validar su estado*/   
    const campos ={
        nombre: false,
        apellido: false,
        correo: false
        }
        /*funcion para validar expresiones con el contenido de los input*/
        const validarformulario = (e)=>{
            switch (e.target.name){
                case "nombre":
                    validarCampo(expresiones.enombre, e.target, "nombre");
                    break;
                case "apellido":
                    validarCampo(expresiones.enombre, e.target, "apellido");
                     break;
                case "correo":
                    validarCampo(expresiones.ecorreo, e.target, "correo"); 
                    break;
            }
        }
/*recorrer input en case de eventos*/
inputs.forEach((input)=>{
    input.addEventListener("keyup", validarformulario);
    input.addEventListener("blur", validarformulario);
    })
/*envio de formulario en caso de evento submit*/
    formulario.addEventListener("submit", (e)=>{
        e.preventDefault()
        const terminos= document.getElementById("terminos");
        if(campos.nombre && campos.apellido && campos.correo && terminos.checked)
        {   
            //usuarios.datosformulario();
            usuarios.mostrartodaslasinstancias();

            formulario.reset();
            document.getElementById("formulario__mensaje-exito").classList.add("formulario__mensaje-exito-activo");
            //para eliminar el mensaje despues de 5 segundos
            setTimeout(()=>{
                document.getElementById("formulario__mensaje-exito").classList.remove("formulario__mensaje-exito-activo");
                },5000);
            document.querySelectorAll(".formulario__grupo-correcto").forEach((icono)=>{
                icono.classList.remove("formulario__grupo-correcto");
            });
        }
        else
        {
            document.getElementById("formulario__mensaje").classList.add("formulario__mensaje-activo");
            
        }
    })
    const validarCampo = (expresion, input, campo)=>{
        if(expresion.test(input.value))
        {
        console.log("funciona!");
        document.getElementById(`grupo__${campo}`).classList.remove("formulario__grupo-incorrecto");
        document.getElementById(`grupo__${campo}`).classList.add("formulario__grupo-correcto");
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-check-circle");
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-times-circle");
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove("formulario__input-error-activo");  
        campos[campo] = true;
    }



        else{
            document.getElementById(`grupo__${campo}`).classList.add("formulario__grupo-incorrecto");
            document.getElementById(`grupo__${campo}`).classList.remove("formulario__grupo-correcto");
            document.querySelector(`#grupo__${campo} i`).classList.add("fa-check-circle");
            document.querySelector(`#grupo__${campo} i`).classList.remove("fa-times-circle");
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add("formulario__input-error-activo");
            campos[campo] = false;
        }
        
    }        
        
    