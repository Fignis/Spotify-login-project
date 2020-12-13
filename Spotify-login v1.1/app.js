var nav = document.querySelector(".header-nav");
var navPos = nav.offsetTop;

sticky = () => {
  if (window.pageYOffset > navPos) {
    nav.classList.add("stick");
  } else {
    nav.classList.remove("stick");
  }
};
window.onscroll = function () {
  sticky();
};
