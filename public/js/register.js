window.onload=function(){
  
  let formulario = document.querySelector('.form');
  
  console.log(formulario.elements);
  
  //Esta es la función que valida todos los campos del formulario
  function validateRegisterForm() {
    
    let {token, name, lastName, email, unSelect, nroDoc, phone, address, avatar, password, repass, submit} = formulario.elements;

    // Seleccionamos todos los smalls de todos los inputs:

    let errorName = document.getElementById('errorName');
    let errorLastName = document.getElementById('errorLastName');
    let errorEmail = document.getElementById('errorEmail');
    let errorNroDoc = document.getElementById('errorNroDoc');
    let errorPhone = document.getElementById('errorPhone');
    let errorAddress = document.getElementById('errorAddress');
    let errorAvatar = document.getElementById('errorAvatar');
    let errorPassword = document.getElementById('errorPassword');
    let errorRePassword = document.getElementById('errorRePassword');
    
    // Creamos la funcion validateEmail:
    
    function validateEmail() {
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

    function validateName() {
      if (name.value.length < 3){
        errorName.innerHTML = "Nombre de usuario no puede tener menos de 3 caracteres";
        errorName.classList.add('alert-danger');
        name.classList.add('is-invalid');
        return false;
      } else {
        errorName.classList.remove('alert-danger');
        name.classList.remove('is-invalid'); 
        name.classList.add('is-valid');
        return true;
      }
    }
    
    function validatePassword() {
      let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
      
      if (!re.test(password.value)) {
        errorPassword.innerHTML = "Debe especificar una contraseña válida";
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
    
    function validatePasswordRepeat(){
      if (password.value != repass.value) {
        errorRePassword.innerHTML = "Las contraseñas no coinciden";
        errorRePassword .classList.add('alert-danger');
        repass.classList.add('is-invalid');
        return false;  
        
      } else {
        errorRePassword.innerHTML = "";
        errorRePassword.classList.remove('alert-danger');
        repass.classList.remove('is-invalid');
        repass.classList.add('is-valid');
        formulario.elements.userName.focus();
        return true;
      }  
    }

    if(!validateEmail() || !validateName() || !validatePassword() || !validatePasswordRepeat()) {
      return false;
    } else {
      return true;
    }    
  }

  formulario.onsubmit = function(event) {
    if (!validateRegisterForm()) {
      console.log("se previene el default");
      event.preventDefault();
    } else {
      console.log("no se previene el default");
      formulario.submit();
    }
  }

}
  
  