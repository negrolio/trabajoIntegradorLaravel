(function(){

  jQuery(document).ready(function ($) {

    $('.accordion').click(function(){
      $(this).next().toggle(500)
    })

  })
// window.onload = function (){
//
//   var toggleNav = document.querySelector('.toggle-nav');
//   var acc       = document.getElementsByClassName("accordion");
//
//   toggleNav.onclick = function(){toogleNav()};
//
//   showFaq(acc);
//
//
// } // hasta aqui el onload
//
// //despliega la barra en mobile
// function toogleNav(){
//   var mainNav = document.querySelector('.main-nav');
//   if (mainNav.style.display === 'block') {
//     mainNav.style.display = 'none';
//   }else {
//     mainNav.style.display = 'block';
//   }
// };
//
// function showFaq(acc){
//   var i;
//   for (i = 0; i < acc.length; i++) {
//       acc[i].onclick = function(){
//         console.log('Hola');
//           this.classList.toggle("active");
//           this.nextElementSibling.classList.toggle("show");
//     }
//   }
// }

})();
