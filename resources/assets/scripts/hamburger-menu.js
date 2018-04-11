const hamburger = document.querySelector('.hamburger');
const smallMenu = document.querySelector('.mobile-small-menu');
const menuItems = document.querySelectorAll('.menu-item');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('is-active');
  hamburger.nextElementSibling.classList.toggle('is-open');
  hamburger.parentElement.classList.toggle('is-open');

  smallMenu.classList.toggle('show-small-menu');
})

// Remove menu when menu item is clicked as well
menuItems.forEach((menuItem) => {
  menuItem.addEventListener('click', () => {
    hamburger.classList.toggle('is-active');
    hamburger.nextElementSibling.classList.toggle('is-open');
    hamburger.parentElement.classList.toggle('is-open');
    smallMenu.classList.toggle('show-small-menu');
    console.log("hej");
  })
})
