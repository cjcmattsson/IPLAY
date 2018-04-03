const athleteImages = document.querySelector('.athletes-images');
const athleteText = document.querySelector('.athletes-info-text');


window.setInterval( function() {
  const superuserImg = document.querySelector('.skew-img');
  athleteImages.appendChild(superuserImg);

  const superuserText = document.querySelector('.athlete-text');
  athleteText.appendChild(superuserText);
}, 5000)
