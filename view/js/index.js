const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const logFooter = document.querySelector(".logo-footer");
const txtCont = document.querySelector(".contenedor");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu_visible");

  if (navMenu.classList.contains("nav-menu_visible")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
    logFooter.style.visibility = 'hidden';
    txtCont.style.visibility = 'hidden' ;
    slides.style.display = 'none' ;
  } else {
    navToggle.setAttribute("aria-label", "Abrir menú");
    logFooter.style.visibility = 'visible';
    txtCont.style.visibility = 'visible' ;
    slides.style.display = '' ;
  }
});