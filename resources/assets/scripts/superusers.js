const athleteImages = document.querySelector('.athletes-images');
const athleteText = document.querySelector('.athletes-info-text');
const content = document.querySelector('.parallax');

window.setInterval( function() {
  const superuserImg = document.querySelector('.skew-img');
  athleteImages.appendChild(superuserImg);

  const superuserText = document.querySelector('.athlete-text');
  athleteText.appendChild(superuserText);
}, 2500)


// Svg line superusers

const lineSuperusers = document.querySelector('.line-super');
content.addEventListener('scroll', () => {
  console.log(content.scrollTop);
  if (content.scrollTop >= 500) {
    lineSuperusers.classList.add('line-animate-super');
  }
})
