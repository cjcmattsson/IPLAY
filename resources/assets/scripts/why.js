// const communication = document.querySelector('.communication')
// const socialMedia = document.querySelector('.social-media')
// const stakeholders = document.querySelector('.stakeholders')
// const team = document.querySelector('.team')
const leftWhy = document.querySelector('.left-social-com ');
const rightWhy = document.querySelector('.right-team-stakeholders');

// const allWhy = document.querySelector('.why-content');

const infoLines = [leftWhy, rightWhy]

var options = {
  root: null,
  rootMargin: '50px 0px',
  threshold: 1.0
}

function onIntersection(entries) {
  // Loop through the entries
  entries.forEach(entry => {
    // Are we in viewport?
    if (entry.intersectionRatio > 1) {
        entry.target.classList.add('new-width')
    }
  });
}
var observer = new IntersectionObserver(onIntersection, options);

infoLines.forEach((line) => {

  observer.observe(line);

});
