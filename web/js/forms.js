let error_box = document.getElementById("error_box");
let input_mail = document.forms["myform"]["user_mail"];

// Captura el evento input para el campo mail
input_mail.addEventListener( "input", () => {
    // Validacion manual
    if(input_mail.value == "" || input_mail.value == null) {
        //error_box.getElementsByTagName("strong")[0].innerHTML = "El campo correo esta vacio";
    }
            
    // Validacion a traves de js
    if(input_mail.checkValidity()) {
        error_box.getElementsByTagName("strong")[0].innerHTML = "¡Se esperaba una dirección de correo!";
    }
}); 

// Llamada desde un evento inline en el input
function checkUserName() {
 console.log("dssd");       
}

// Llamada al enviar el formulario
function formSubmit(e) {
    //e.preventDefault();
    console.log("submit");
    return false;
}

