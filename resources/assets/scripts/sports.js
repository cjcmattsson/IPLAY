const leftLineSports = document.querySelector('.sports-header-left-line');
const rightLineSports = document.querySelector('.sports-header-right-line');
// const leftSmall = document.querySelector('.sports-small-line left-small');
// const rightSmall = document.querySelector('.sports-small-line right');

const sportsLines = [leftLineSports, rightLineSports];

var options = {
  root: null,
  rootMargin: '0px',
  threshold: 1.0
}

function onIntersection(entries) {
  // Loop through the entries
  entries.forEach((entry) => {
    // Are we in viewport?
    if (entry.intersectionRatio > 1) {
      console.log("hej");
        // entry.target.classList.add('test');
    }
  });
};

var observer = new IntersectionObserver(onIntersection, options);

sportsLines.forEach((line) => {
  observer.observe(line);
});
