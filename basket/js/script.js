window.onload =  function() {
      animate({
        duration: 1000,
        timing: bounceEaseOut,
        draw: function(progress) {
          document.getElementById("ball").style.top = -60 + progress * 60 + 'px';
        }
      });

    };
function makeEaseOut(timing) {
      return function(timeFraction) {
        return 1 - timing(1 - timeFraction);
      }
    }

    function bounce(timeFraction) {
      for (var a = 0, b = 1, result; 1; a += b, b /= 2) {
        if (timeFraction >= (7 - 4 * a) / 11) {
          return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
        }
      }
    }

    var bounceEaseOut = makeEaseOut(bounce);

     
function animate({timing, draw, duration}) {

  let start = performance.now();

  requestAnimationFrame(function animate(time) {
    // timeFraction goes from 0 to 1
    let timeFraction = (time - start) / duration;
    if (timeFraction > 1) timeFraction = 1;

    // calculate the current animation state
    let progress = timing(timeFraction);

    draw(progress); // draw it

    if (timeFraction < 1) {
      requestAnimationFrame(animate);
    }

  });
}
      function redir()
{
  setTimeout(
  function(){
    window.location.href="index.php";
    }	, 3000)
	 
}


