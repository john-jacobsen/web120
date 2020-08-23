<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Page</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/forms.css" />
    
    <style type="text/css">
		
        /* start global page styles */
        * {padding:0; margin:0;}
		html {background-color:#ccc;}
		body {
			font-family: Arial, Helvetica, sans-serif;
			max-width:960px; /* keeps from getting too large on wide screen */
			width:90%; /* shrink to fit screen */
			margin:auto; /* center in html element */
			background-color:#fff;
			padding:1%;
			min-height:100%; /* keeps from getting too large on wide screen */
			}
		p,div {margin-bottom:0.5em;}
		h1,h2,h3,h4,h5,h6{
			font-weight:normal;
			margin:10px;
			}
		h1.masthead {margin-top:0;}
		footer {
			text-align:center;
			clear:both; /* ride below all items */
			}
		nav{
			text-align:center; /* centers the nav */
		}
		
		nav ul {
				list-style:none; /* removes the bullets */
			}
		nav ul li
			{
				display:inline-block; /* makes horizontal, but able to declare margins */
				margin:0 2%; /* margin left-right, gets smaller as necessary */
			}
		nav a:hover{
			text-decoration: none;
		}
        
        div.indent{
            width:90%;
            margin: 0 auto;   
        }
        /* end global page styles */
		
		/* start reCAPTCHA styles */
		
		/* writes to small text above reCAPTCHA upon failure */
		.dateFeedback{
			font-style:italic;
			font-size:70%;
			font-weight:bold;
			color:#f00;
		}
        input:required {
              border: 1px solid red;
        }

         input:optional, textarea:optional {
             background-color:#f1f1f1;
             border:1px solid #ccc;
        }

        input[type="submit"], input[type="button"] {
          background-color: #fff;
          border-radius: 4px;
          border: solid 1px #ccc;
          padding: 0.3em 0.5em;
        }

        fieldset {
          border: 1px solid #ccc;
          max-width: 350px;
        }

        legend {
          margin-left: 0.5em;
          padding: 0.2em 0.5em;
          border-left: 1px solid #ccc;
          border-right: 1px solid #ccc;
        }
        
        /* end reCAPTCHA styles */
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>

<body>
    <header role="banner">
		<h1 class="masthead">Our Website</h1>
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
    <main role="main">
	 <header><h3>Contact Us!</h3></header>
    <p>Inside the source of this file, you can un-comment and test 
        2 different types of forms:
        <div class="indent">
            <ul>
                <li><b>loadContact('simple.php');</b> - a simple contact form with reCAPTCHA</li>
                <li><b>loadContact('multiple.php');</b> - a complex form with reCAPTCHA</li>
            </ul>
        </div>    
    </p>    
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jjcascadia@gmail.com";  //place your/your client's email address here
        $toName = "ALL HANDS LLC"; //place your client's name here
        $website = "Jacobsen Design";  //place NAME of your client's website

        /*echo loadContact('simple.php');#demonstrates a simple contact form*/
        echo loadContact('multiple.php');/*demonstrates multiple form elements*/

	?>
     </main>
    <footer>
      <small>&copy; 2013-<?=date('Y')?>, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
</body>
</html>