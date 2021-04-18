window.onload = (function ScrllReveal() {
  ScrollReveal().reveal('.card', {
    duration   : 600,
    distance   : '20px',
    easing     : 'ease-out',
    origin     : 'bottom',
    reset      : true,
    scale      : 1,
    viewFactor : 0,
    afterReveal  : revealChildren
  }, 150);

  ScrollReveal().reveal('.services', {
    duration   : 600,
    reset: true,
    delay: 150
  });

  
  
    var revealChildren = sr.reveal('.card-body, .card-text', {
    duration   : 500,
    scale      : 1,
    distance   : '20px',
    origin     : 'bottom',
    reset      : true,
    easing     : 'ease-out',
    viewFactor : 1,
  }, 75);
})



$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

