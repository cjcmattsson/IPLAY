const athleteImages = document.querySelector('.athletes-images');
const athleteText = document.querySelector('.athletes-info-text');


window.setInterval( function() {
  const superuserImg = document.querySelector('.skew-img');
  athleteImages.appendChild(superuserImg);

  const superuserText = document.querySelector('.athlete-text');
  athleteText.appendChild(superuserText);
}, 2500)


const lineSuperusers = document.querySelector('.line-super');

const superusersLine = [lineSuperusers];

var options = {
  root: null,
  rootMargin: '50px 0px',
  threshold: 1
}

function onIntersection(entries) {
  // Loop through the entries
  entries.forEach(entry => {

    // Are we in viewport?
    if (entry.intersectionRatio > 0.5) {
      console.log("hej");
        entry.target.classList.add('line-animate-super');
    }
  });
};

var observer = new IntersectionObserver(onIntersection, options);

superusersLine.forEach((line) => {
  observer.observe(line);
});
