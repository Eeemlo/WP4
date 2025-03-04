
document.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelector('#smallNav');
  const menu = document.querySelector('.smallNav .menu-top-menu-container');
  const menuToggle = document.querySelector('.nav__toggle');
  let isMenuOpen = false;

  // Toggla hidden attributet
  if (menu) {
    if (!isMenuOpen) {
      menu.setAttribute('hidden', ''); // Dölj menyn
    } else {
      menu.removeAttribute('hidden'); // Visa menyn
    }
  }

  // TOGGLE MENU ACTIVE STATE
  if (menuToggle) {
    menuToggle.addEventListener('click', e => {
      e.preventDefault();
      isMenuOpen = !isMenuOpen;

      // toggle a11y attributes and active class
      menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
      if (menu) {
        menu.hidden = !isMenuOpen;
      }
      if (nav) {
        nav.classList.toggle('nav--open');
      }
    });
  }

  document.querySelectorAll('details').forEach(details => {
    details.addEventListener('toggle', () => {
      // När ett nytt <details> öppnas, stäng de andra
      if (details.open) {
        document.querySelectorAll('details').forEach(otherDetails => {
          if (otherDetails !== details && otherDetails.open) {
            otherDetails.removeAttribute('open');
          }
        });
      }
  
      // Animation när detaljer öppnas eller stängs
      const p = details.querySelector('p');
      if (details.open) {
        // Vid öppning, ta bort animationen så den kan starta om
        p.style.animation = 'none';
        // Tvinga att animera om
        p.offsetHeight;  // Trigger för att rensa animation
        p.style.animation = 'slideUp 0.5s ease-out forwards';
      }
    });
  });
  

});

document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.workItem, .educationItem, .accentImg, .service-item, .accentContent, .newsContainer article, .essential-content');

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
            console.log(entry.target);
            entry.target.classList.add('visible'); // Lägg till klass när elementet är synligt
            observer.unobserve(entry.target); // Sluta observera efter att animationen triggas
          }
      });
  }, { threshold: 0.3 }); // Startar animation när 50% av elementet är synligt

  items.forEach(item => {
      observer.observe(item);
  });
});


document.addEventListener('DOMContentLoaded', function () {
  // Hitta alla element med klassen 'menu-item-has-children'
  const menuItems = document.querySelectorAll('.smallNav .menu-item-has-children');

  menuItems.forEach(function(item) {
      // Lägg till en klickhändelse på varje kategori
      item.addEventListener('click', function(event) {
          // Förhindra att länken navigerar (om det är en länk)
          event.preventDefault();

          // Ta bort 'active' klass från alla andra menyitem
          menuItems.forEach(function(otherItem) {
              if (otherItem !== item) {
                  otherItem.classList.remove('active');
              }
          });

          // Lägg till eller ta bort 'active' klass på den här menyitem
          item.classList.toggle('active');
      });
  });

  document.querySelectorAll('.smallNav .menu-top-menu-container ul li a').forEach(link => {
    link.addEventListener('click', function(event) {
      // Ta bort klassen 'active' från alla länkar
      document.querySelectorAll('.smallNav .menu-top-menu-container ul li a').forEach(otherLink => {
        otherLink.classList.remove('active');
      });
      
      // Lägg till klassen 'active' på den länk som klickades på
      link.classList.add('active');
    });
  });

  const subMenuLinks = document.querySelectorAll('.largeNav .menu-item-has-children a');

  // Lägg till "active" klass på den länk som är aktiv
  subMenuLinks.forEach(link => {
    link.addEventListener('click', function () {
      // Ta bort "active" klass från alla andra länkar
      subMenuLinks.forEach(link => link.classList.remove('active'));
      // Lägg till "active" klass på den klickade länken
      link.classList.add('active');
    });
  });

  // Kontrollera om användaren är på en sida från sub-menyn
  subMenuLinks.forEach(link => {
    if (link.href === window.location.href) {
      link.classList.add('active'); // Markera aktuell länk
    }
  });
});



/*JS FOR SWIPER from swiperjs.com*/
var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  autoplay: {
    delay: 3000, // Tidsintervall mellan bilderna (i millisekunder)
    disableOnInteraction: false, // Sluta inte autoplay om användaren interagerar med slidern
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    620: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 3,
    },
  },
});

