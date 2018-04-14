const content = document.querySelector('.parallax');
const video = document.querySelector('.video');



console.log(window.innerWidth);

if (window.innerWidth > 415) {
  console.log("hej");
}


content.addEventListener('scroll', function() {
  let scroll = content.scrollTop;
  if (scroll >= 200) {
    video.style.width = "300px";
  } else if (scroll < 200) {
    nav.classList.remove('nav-back-color');
  }
});
