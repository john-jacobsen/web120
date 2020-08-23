<!DOCTYPE html>
  <head>
    <title>BIG</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>
    <header>
      <h1><a href="index.php"><i class="logo fa fa-home"></i> John Jacobsen SCC WEB120 Portal</a></h1>
      <nav>
              <ul class="topnav" id="myTopnav">
                <li><a href="big.php" class="selected">Welcome</a></li>
                <li><a href="research1.html">Research 1</a></li>
                <li><a href="research2.html">Research 2</a></li>
                <li><a href="research3.html">Research 3</a></li>
                <li><a href="research4.html">Research 4</a></li>
                <li><a href="contactform.php">Contact Form</a></li>
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
              </ul>
            </nav>
    </header>

    <div class="section group">
    <div class="col span_1_of_2">
      <p>This is column 1</p>
      <iframe src="https://calendar.google.com/calendar/embed?src=7mfhvk3477o7rskg345prpcf64%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800px" height="600px" frameborder="0" scrolling="no"></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/w_Ma8oQLmSM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col span_1_of_2">
      <p>This is column 2</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yrsfazM3KpM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.505099558114!2d-122.32339754872369!3d47.61631207908321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906accc351c149%3A0xdc1a5c338dd4395c!2sSeattle%20Central%20College!5e0!3m2!1sen!2sus!4v1598165466824!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    <footer>
      <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Johnny</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
            x.className = "topnav";
                }
            }
    </script>
  </body>
</html>