AOS.init();

  var options = {
    strings: ['FROID .', 'CHAUD .'],
    typeSpeed: 120,
    loop: true,
    loopCount: Infinity,
    cursorChar: '..',
  };
  
  var typed = new Typed('#fc', options);
  function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

// animateValue("value", 1, 189, 5);

