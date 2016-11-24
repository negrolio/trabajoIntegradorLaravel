


//funcion para llamada de ajax
function ajaxCall(url, functionToCall, method, params) {
    var ajaxCall = new XMLHttpRequest();

    ajaxCall.onreadystatechange = function() {
        if (ajaxCall.readyState == 4 && ajaxCall.status == 200) {
            try {
                var respuesta = JSON.parse(ajaxCall.responseText);
                functionToCall(respuesta);
            } catch (e) {
                functionToCall(ajaxCall.responseText);
            }
        }else{
          console.log('parece que hay un error en el servidor');
        }
    };

    if (method.toUpperCase() === 'GET' || method.toUpperCase() === 'POST') {
        ajaxCall.open(method, url, true);
    }

    if (method.toUpperCase() === 'POST') {
        ajaxCall.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }

    if (method === 'GET') {
        ajaxCall.send();
    } else if (method.toUpperCase() === 'POST' && (typeof params === 'object' || typeof params === 'undefined')) {

        ajaxCall.send(serialize(params));
    }
}

//funcion para pasar los parametros que se hagan con POST a queryString
serialize = function(obj) {
    var str = [];
    for (var p in obj)
        if (obj.hasOwnProperty(p)) {
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        }
    return str.join("&");
};

//funcion que realizara ajax un vez hecha la llamada
function showAjaxResponse(parametro){
  var popup = document.querySelector('.popup');
  var popNumber = document.querySelector('#pop-number');
  popup.style.display = "block";
  popNumber.appendChild(document.createTextNode(parametro.cantidad));
};


/*se fija que el input tenga los caracteres de un email
  muestra los errores correspondientes*/
function validateEmail(email) {
  email.value == null ? email.value = " " : email.value
  var atpos = email.value.indexOf("@");
  var dotpos = email.value.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.value.length) {
      document.querySelector('.email-error').style.display = "inline";
      return false;
  }
  document.querySelector('.email-error').style.display = "none";
  return true;
};

/* se fija que el input tenga algo y no sean solo espacios en blanco.
   Muestra lso errores correspondientes*/
function validateName(name){
  if( name.value == null || name.value.length == 0 || /^\s+$/.test(name.value) ) {
    document.querySelector('.name-error').style.display = "inline";
    return false;
  };
  document.querySelector('.name-error').style.display = "none";
  return true;
}

/* valida que los password no contengan espacios en blanco,
   que no esten vacios y que sean iguales.
   muestra los errores correspondientes*/
function validatePass(pass1,pass2){
  var espacios = false;
  var cont = 0;

  while (!espacios && (cont < pass1.length)) {
    if (pass1.charAt(cont) == " ")
      espacios = true;
    cont++;
  }

  document.querySelector('#pass-sp-error').style.display     = "none";
  document.querySelector('#pass-empty-error').style.display  = "none";
  document.querySelector('#pass2-empty-error').style.display = "none";
  document.querySelector('#pass-diff-error').style.display   = "none";

  if (espacios) {
    document.querySelector('#pass-sp-error').style.display = "inline";
    return false;
  }

  if (pass1.length == 0) {
    document.querySelector('#pass-empty-error').style.display = "inline";
    return false;
  }else if (!pass1.length==0 && pass2.length==0) {
    document.querySelector('#pass2-empty-error').style.display = "inline";
    return false;
  }

  if (pass1 != pass2) {
    document.querySelector('#pass-diff-error').style.display = "inline";
    return false;
  }

  return true;
};

/* llama a cada una de las funciones para validar
   si las 3 dan true devuelve true*/
function validarRegistro(nameUser,email,pass1,pass2){
  var name = validateName(nameUser);
  var mail = validateEmail(email);
  var pass = validatePass(pass1,pass2);
  if (name && mail && pass) {
    return true;
  }
  return false;
};

//valida el formulario y hace la llamada ajax
function register(registerForm){
  var emailInput   = document.querySelector('.email-register');
  var nameRegister = document.querySelector('.name-user');
  var pass1 = document.querySelector('#pass1').value;
  var pass2 = document.querySelector('#pass2').value;

  var validate = validarRegistro(nameRegister,emailInput,pass1,pass2);

  if (validate) {
    registerForm.submit();
    ajaxCall('https://sprint.digitalhouse.com/nuevoUsuario',hola,'GET');
    ajaxCall('https://sprint.digitalhouse.com/getUsuarios',showAjaxResponse,'GET');
  }
};


function validarLogin(email,pass){
  if (email && pass) {
    return true;
  } else {
    document.querySelector('.email-error').style.display = "block";
  }
};

function login(loginForm){
  var emailInput = document.querySelector('#email-login');
  var pass       = document.querySelector('#pass-login').value;
  var validate   = validarLogin(emailInput,pass);
  if (validate) loginForm.submit();
};

function hola(){
  console.log('hola');
};
