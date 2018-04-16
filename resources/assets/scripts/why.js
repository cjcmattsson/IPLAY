const communication = document.querySelector('.communication p')
const socialMedia = document.querySelector('.social-media p')
const stakeholders = document.querySelector('.stakeholders p')
const team = document.querySelector('.team p')
const leftWhy = document.querySelector('.left-social-com');
const rightWhy = document.querySelector('.right-team-stakeholders');
const lineWhyMobile = document.querySelector('.why-line-mobile');

// const allWhy = document.querySelector('.why-content');

const infoLines = [leftWhy, rightWhy]

var options = {
  root: null,
  rootMargin: '50px 0px',
  threshold: 1.0
}

function onIntersectionLines(entries) {
  // Loop through the entries
  entries.forEach(entry => {
    // Are we in viewport?
    if (entry.intersectionRatio > 1) {
        entry.target.classList.add('new-width')
    }
  });
}
var observerLines = new IntersectionObserver(onIntersectionLines, options);

infoLines.forEach((line) => {

  observerLines.observe(line);

});


const textWhy = [communication, socialMedia, stakeholders, team]
console.log(textWhy);

function onIntersectionText(entries) {
  // Loop through the entries
  entries.forEach(entry => {
    // Are we in viewport?
    if (entry.intersectionRatio > 0.5) {
        entry.target.classList.add('show-text')
    }
  });
}

var observerText = new IntersectionObserver(onIntersectionText, options);

textWhy.forEach((text) => {

  observerText.observe(text);

});

const lineMobile = [lineWhyMobile]

function onIntersectionMobileLine(entries) {
  // Loop through the entries
  entries.forEach(entry => {
    // Are we in viewport?
    if (entry.intersectionRatio > 1) {
        entry.target.classList.add('line-longer-mobile')
    }
  });
}

var observerMobileLine = new IntersectionObserver(onIntersectionMobileLine, options);

lineMobile.forEach((line) => {

  observerMobileLine.observe(line);

});
