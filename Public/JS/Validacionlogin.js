var boton = document.getElementById('botonsubmit'); 
const usuario = document.getElementById('floatingInput'); 
const contraseña = document.getElementById('floatingPassword')

function validar(){
    if(usuario.value !== "" && contraseña.value !== ""){
        boton.disabled = false; 
    }else{
        boton.disabled = true; 
    }
}

usuario.addEventListener('keyup', validar); 
contraseña.addEventListener('keyup', validar); 
