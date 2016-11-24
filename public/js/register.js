(function(){
  window.onload = function(){
    var registionButton = document.querySelector('#register-button');
    var registerForm    = document.querySelector('#register-form');

    registionButton.onclick = function(){register(registerForm)};
  }
})();
