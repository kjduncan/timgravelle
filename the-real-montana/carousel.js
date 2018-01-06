(function () {
  var carousel = document.getElementById('carousel-selector');
  var children = carousel.children;

  for(var i=0; i<children.length; i++) {
    console.log(children[i]);
  }

  function addFadeout(el) {
    if (el.classList)
      el.classList.add('fadeout');
    else
      el.className += ' ' + 'fadeout';
  }
  function removeFadeout(el) {
    el.classList.remove('fadeout');
  }

  var i = 0;
  function imgTransition () {
    children[i].style.zIndex = 2;
    addFadeout(children[i]);
    if(i >= children.length-1) {
      i=0;
    } else {
      i++;
    }
    children[i].style.zIndex = 1;
    removeFadeout(children[i]);
  }
  imgTransition();
  setInterval(imgTransition, 10000);

}());
