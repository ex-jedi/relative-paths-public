// =========================================
// ** Responsive Menu  **
// =========================================


var app = new Vue({
  el: '#vue-wrapper',
  data: {
      navPull: false
  }
});

document.addEventListener('keyup', (evt) => {
  if(evt.keyCode === 27) {
    app.navPull = false;
  }
});




// =========================================
// ** Rellax  **
// =========================================

var rellax = new Rellax('.rellax');
