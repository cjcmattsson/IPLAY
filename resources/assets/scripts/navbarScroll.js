const content = document.querySelector('.parallax');
const nav = document.querySelector('.menu-nav');
const video = document.querySelector('.video');

content.addEventListener('scroll', function() {
  let scroll = content.scrollTop;
  // console.log(scroll);
  if (scroll >= 200) {
    nav.classList.add('nav-back-color');
  } else if (scroll < 200) {
    nav.classList.remove('nav-back-color');
  }
});
