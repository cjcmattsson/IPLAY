const hamburger = document.querySelector('.hamburger');
const smallMenu = document.querySelector('.mobile-small-menu');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('is-active');
  hamburger.nextElementSibling.classList.toggle('is-open');
  hamburger.parentElement.classList.toggle('is-open');

  smallMenu.classList.toggle('show-small-menu');
})
