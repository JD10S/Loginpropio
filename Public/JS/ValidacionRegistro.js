const boton = document.getElementById('botonsubmit');
const correo = document.getElementById('correo');
const nomusu = document.getElementById('nameusu');
const password = document.getElementById('contra'); 
const confcontra = document.getElementById('confircontra');

function validar(){
    if(correo.value !== "" && nomusu.value !== "" && password.value !== "" && confcontra.value !== ""){
        if(password.value === confcontra.value){
            boton.disabled = false;
        }else{
            boton.disabled = true;
        }
    }else{
        boton.disabled = true; 
    }
}

correo.addEventListener('keyup', validar); 
nomusu.addEventListener('keyup', validar); 
password.addEventListener('keyup', validar); 
confcontra.addEventListener('keyup', validar); 
