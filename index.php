<?php

	include_once 'includes/db-connect.php';
	include_once 'includes/functions.php';
 
	sec_session_start();
 
	if (login_check($mysqli) == true) {
    		$logged = 'in';
	} else {
    		$logged = 'out';
	}
?>

<script type='text/javascript'>
function showDiv() {
   document.getElementById('hiddenDiv').style.display = "block";
}
</script>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A layout example that shows off a responsive product landing page.">

	<title>Landing Page &ndash; </title>

	<link rel="stylesheet" href="styles/pure.css">

	<!--[if lte IE 8]>
  
    		<link rel="stylesheet" href="styles/grids-responsive-old-ie.css">
  
	<![endif]-->
	<!--[if gt IE 8]><!-->
  
    		<link rel="stylesheet" href="styles/grids-responsive.css">
  
	<!--<![endif]-->

  
    	<!--[if lte IE 8]>
        	<link rel="stylesheet" href="styles/css/layouts/marketing-old-ie.css">
    	<![endif]-->
    	<!--[if gt IE 8]><!-->
        	<link rel="stylesheet" href="styles/css/layouts/marketing.css">
    	<!--<![endif]-->

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

</head>

<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">CEERRA</a>
        <ul>
            <li class="pure-menu-selected"><a href="#">About Us</a></li>
            <li><a href="#" onclick="showDiv()">Sign In</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </div>
    <div id="hiddenDiv" style="display:none" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
    	<a class="pure-menu-heading" href="">CEERRA</a>
	<ul>
		<form class="pure-form-aligned">
        			<input type="email"  placeholder="Email">&nbsp; 
        			<input type="password" placeholder="Password">

        		<label for="remember">
            			<input id="remember" type="checkbox"><font color="white"> Remember me</font>
        		</label>

        		<button type="submit" class="pure-button pure-button-primary">Sign in</button>
		</form>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Change the World</h1>
        <p class="splash-subhead">
	<i>"Some scientists believe we have entered a new geological era in which humans play a profound role in shaping the planet"</i>
	<br>
        </p>
	<p align="right"><font color="white">
	ECONOMIST Online 2011</font>
	</p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">Become a force of nature</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Excepteur sint occaecat cupidatat.</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Responsive Layouts
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Modular
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Plays Nice
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="styles/img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Laboris nisi ut aliquip.</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">


                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">

                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">

                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        View the source of this layout to learn more. Made with love by the YUI Team.
    </div>

</div>






</body>
</html>
