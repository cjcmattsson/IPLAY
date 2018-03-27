const content = document.querySelector('.parallax');
const line = document.querySelector('.hero-line-right');

content.addEventListener('scroll', function() {
  // console.log(content.scrollTop);
  let scroll = content.scrollTop;
  console.log(line.scrollHeight);
  if (line.scrollHeight <= '1000') {
    line.style.height = ((scroll+700)/1.65) + 'px';
  }
});
