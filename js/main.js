const nav = document.querySelector('#smallNav');
const menu = document.querySelector('.smallNav .menu-top-menu-container');
const menuToggle = document.querySelector('.nav__toggle');
let isMenuOpen = false;

  // Toggla hidden attributet
  if (!isMenuOpen) {
    menu.setAttribute('hidden', ''); // Dölj menyn
  } else {
    menu.removeAttribute('hidden'); // Visa menyn
  }

// TOGGLE MENU ACTIVE STATE
menuToggle.addEventListener('click', e => {
  e.preventDefault();
  isMenuOpen = !isMenuOpen;
  
  // toggle a11y attributes and active class
  menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
  menu.hidden = !isMenuOpen;
  nav.classList.toggle('nav--open');
});

