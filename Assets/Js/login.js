let btnLogin = document.getElementById("btn-login");
let btnRegistro = document.getElementById("btn-registro");
let formularioLogin = document.getElementById("form-login");
let formularioRegistro = document.getElementById("form-registro");

btnRegistro.addEventListener('click', ()=>{
    formularioLogin.style.display = "none";
    formularioRegistro.style.display = "flex";
    btnRegistro.style.backgroundColor = "#735737";
    btnLogin.style.backgroundColor = "#a67b5baf";
    btnRegistro.style.border ="1px solid black"
    btnLogin.style.border = "none";
    
})

btnLogin.addEventListener('click', ()=>{
    formularioLogin.style.display = "flex";
    formularioRegistro.style.display = "none";
    btnRegistro.style.backgroundColor = "#a67b5baf";
    btnLogin.style.backgroundColor = "#735737";
    btnLogin.style.border = "1px solid black";
    btnRegistro.style.border = "none";
})


let documentoRegistro = document.getElementById("documento-registro");
let nombreRegistro = document.getElementById("nombre");
let correoRegistro = document.getElementById("correo");
let passwordRegistro = document.getElementById("password-registro");
let error = document.getElementById("error");
    
documentoRegistro.addEventListener('input', ()=>{
    if(documentoRegistro.value.trim().length < 7){
        documentoRegistro.style.border = "1px solid red";
        error.textContent = "El documento debe tener al menos 7 caracteres";
        

    } else if (documentoRegistro.value.trim().length >= 7) {
        documentoRegistro.style.border = "1px solid green";
        error.textContent = "";
        
        }
});

nombreRegistro.addEventListener('input', ()=>{
    if(nombreRegistro.value.trim().length < 10){
        nombreRegistro.style.border = "1px solid red";
        error.textContent = "El nombre debe tener al menos 10 caracteres";
        

    } else if (nombreRegistro.value.trim().length >= 10) {
        nombreRegistro.style.border = "1px solid green";
        error.textContent = "";
        
        }
});

correoRegistro.addEventListener('input', ()=>{
    if(correoRegistro.value.trim().length < 10){
        correoRegistro.style.border = "1px solid red";
        error.textContent = "El correo debe tener al menos 10 caracteres";
        

    } else if (correoRegistro.value.trim().length >= 10) {
        correoRegistro.style.border = "1px solid green";
        error.textContent = "";
        
        }
    
   
});
