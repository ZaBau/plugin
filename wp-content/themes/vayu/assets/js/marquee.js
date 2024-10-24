function Marquee(selector, speed) {
  const parentSelectors = document.querySelectorAll(selector);

  parentSelectors.forEach(parentSelector => {
    const clone = parentSelector.innerHTML;
    const firstElement = parentSelector.children[0];
    let i = 0;

    // Clone the content several times to create a looping effect
    for (let j = 0; j < 5; j++) {
      parentSelector.insertAdjacentHTML('beforeend', clone);
    }

    setInterval(function () {
      firstElement.style.marginLeft = `-${i}px`;
      if (i > firstElement.clientWidth) {
        i = 0;
      }
      i = i + speed;
    }, 0); // Setting interval to 16ms for a smoother animation (approximately 60fps)
  });
}

document.addEventListener('DOMContentLoaded', function() {
  var isMobileVersion = document.getElementsByClassName('marquee-sec');
  if (isMobileVersion.length > 0) {
    window.addEventListener('load', function() {
      Marquee('.marquee-sec', 0.3);
    });
  }
});