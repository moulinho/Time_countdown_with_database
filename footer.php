     <script>
var now = <?= time() ?> * 1000;
var countDownDate = <?= strtotime("$date $h:$m:$s") * 1000 ?>;

var x = setInterval(() => {
            now = now + 1000;
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var second = Math.floor((distance % (1000 * 60)) / 1000);
            if (distance > 0) {

                  document.querySelector("#account_rendering").innerHTML = days + ":d " +
                        hours +
                        " h " +
                        minutes +
                        " :m " + second + ":s";

            } else if (distance < 0) {
                  clearInterval(x);
                  document.querySelector("#account_rendering").innerHTML = 'Enter data';
            } else {
                  document.querySelector("#account_rendering").innerHTML = 'EXPIRED';
            }

      },
      1000);
     </script>
     </div>
     </body>

     </html>