const lineSportsMobile = document.querySelector('.sports-line-mobile');

const sportsLines = [lineSportsMobile];

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
        entry.target.classList.add('longer-sports-line');
    }
  });
};

var observer = new IntersectionObserver(onIntersection, options);

sportsLines.forEach((line) => {
  observer.observe(line);
});
