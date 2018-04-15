const rightLineApp = document.querySelector('.app-line-right')
const leftLineApp = document.querySelector('.app-line-left')

const appLines = [rightLineApp, leftLineApp]

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
        entry.target.classList.add('longer')
    }
  });
}
var observer = new IntersectionObserver(onIntersection, options);

appLines.forEach((line) => {
  observer.observe(line);
});
