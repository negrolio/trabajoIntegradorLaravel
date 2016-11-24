(function(){
  window.onload = function(){
    var loginButton     = document.querySelector('#login-button');
    var loginForm       = document.querySelector('#login-form');

    loginButton.onclick = function(){login(loginForm)};
  }
})();
