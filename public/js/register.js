window.onload=function(){
  
  let formulario = document.querySelector('.form');
  let errorName = document.getElementById('errorName');
  let errorLastName = document.getElementById('errorLastName');
  let errorEmail = document.getElementById('errorEmail');
  let errorNroDoc = document.getElementById('errorNroDoc');
  let errorPhone = document.getElementById('errorPhone');
  let errorAddress = document.getElementById('errorAddress');
  let errorAvatar = document.getElementById('errorAvatar');
  let errorPassword = document.getElementById('errorPassword');
  let errorRePassword = document.getElementById('errorRePassword');
   
  console.log(formulario.elements);
  formulario.elements.name.focus();
  //Esta es la función que valida todos los campos del formulario
  formulario.onsubmit = function(event) {
    console.log(event);
    if (!validateRegisterForm()) {
      //console.log("se previene el default");
      event.preventDefault();
    } else {
      //console.log("no se previene el default");
      formulario.submit();
    }
  }
  
  
  
  
  function validateRegisterForm() {
    
    console.log(formulario.elements);
    let {name, lastname, email, unSelect, nroDoc, phone, address, avatar, password, password_confirmation, submit} = formulario.elements;

    // Seleccionamos todos los smalls de todos los inputs:
    if (!validateName(name)) return false;
    if (!validateLastName(lastname)) return false;
    if (!validateEmail(email)) return false;
    if (!validatePassword(password)) return false;
    if (!validatePasswordRepeat(password_confirmation)) return false;
    return true;
    
    

  }

    // Creamos la funcion validateEmail:
    
    
    function validateName(name) {
      if (name.value.length < 2){
        errorName.innerHTML = "Nombre de usuario no puede tener menos de 2 caracteres";
        errorName.classList.add('alert-danger');
        name.classList.add('is-invalid');
        return false;
      } else {
        errorName.classList.remove('alert-danger');
        name.classList.remove('is-invalid'); 
        name.classList.add('is-valid');
        formulario.elements.lastname.focus();
        return true;
      }
    }

    function validateLastName(lastname) {
      if (name.value.length < 3){
        errorLastName.innerHTML = "Apellido de usuario debe tener más de un caracter";
        errorLastName.classList.add('alert-danger');
        lastName.classList.add('is-invalid');
        return false;
      } else {
        errorLastName.classList.remove('alert-danger');
        lastName.classList.remove('is-invalid'); 
        lastName.classList.add('is-valid');
        formulario.elements.email.focus();
        return true;
      }
    }
    
    function validateEmail(email) {
      let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      
      if (!re.test(email.value)){ 
        email.classList.add('is-invalid'); 
        errorEmail.innerHTML= "Debe colocar un email válido";
        return false;
      } else {
        errorEmail.innerHTML= "";
        errorEmail.classList.remove('alert-danger');
        email.classList.remove('is-invalid'); 
        email.classList.add('is-valid');
        // Hacemos foto en el siguiente input si está todo bien:
        formulario.elements.password.focus();
        return true;
      }
    }

    function validatePassword(password) {
      let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
      
      if (!re.test(password.value)) {
        errorPassword.innerHTML = "La contraseña debe tener una Mayuscula, un numero y un minimo de 8 caracteres";
        errorPassword.classList.add('alert-danger');
        password.classList.add('is-invalid');
        return false;  
        
      } else {
        errorPassword.innerHTML = "";
        errorPassword.classList.remove('alert-danger');
        password.classList.remove('is-invalid');
        password.classList.add('is-valid');
        formulario.elements.passwordRepeat.focus();
        return true;
      }
    }
    
    function validatePasswordRepeat(password, repassWord){
      if (password.value != repassWord.value) {
        errorRePassword.innerHTML = "Las contraseñas no coinciden";
        errorRePassword .classList.add('alert-danger');
        repass.classList.add('is-invalid');
        return false;  
        
      } else {
        errorRePassword.innerHTML = "";
        errorRePassword.classList.remove('alert-danger');
        repass.classList.remove('is-invalid');
        repass.classList.add('is-valid');
        
        return true;
      }  
    }

    
  

  }
  
  