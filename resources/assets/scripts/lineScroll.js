const content = document.querySelector('.parallax');
const line = document.querySelector('.hero-line-right');
const header = document.querySelector('.header-super');

let previousPosition = content.pageYOffset || content.scrollTop;

content.addEventListener('scroll', function() {
  var currentPosition = content.pageYOffset || content.scrollTop;
  let scroll = content.scrollTop;
  if (previousPosition > currentPosition) {
    // console.log('scrolling up');
    line.style.height = ((scroll+700)/1.75) + 'px';
  } else {
    line.style.height = ((scroll+700)/1.75) + 'px';
    // console.log('scrolling down');
  }
  previousPosition = currentPosition;
});
