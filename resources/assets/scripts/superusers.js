const athleteImages = document.querySelector('.athletes-images');


window.setInterval( function() {
  const superuser = document.querySelector('.image-super');
  athleteImages.appendChild(superuser);
}, 3000)
