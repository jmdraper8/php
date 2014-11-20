<?php

	include_once 'includes/register.inc.php';
	include_once 'includes/functions.php';

?>

<!doctype html>
<html lang="en">
	<head>
    		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    		<title>Register </title>

		<link rel="stylesheet" href="styles/pure.css">



		<!--[if lte IE 8]>
  
    			<link rel="stylesheet" href="styles/grids-responsive-old-ie.css">
  
		<![endif]-->
		<!--[if gt IE 8]><!-->
  
    			<link rel="stylesheet" href="styles/grids-responsive.css">
  
		<!--<![endif]-->



  
    		<!--[if lte IE 8]>
        		<link rel="stylesheet" href="register/css/layouts/blog-old-ie.css">
    		<![endif]-->
    		<!--[if gt IE 8]><!-->
        		<link rel="stylesheet" href="register/css/layouts/blog.css">
    		<!--<![endif]-->

	</head>
	<body>

	 <?php
        	if (!empty($error_msg)) {
            		echo $error_msg;
        	}
        ?>

		<div id="layout" class="pure-g">
    			<div class="sidebar pure-u-1 pure-u-md-1-4">
        			<div class="header">
            				<h1 class="brand-title">REGISTER</h1>
            				<h2 class="brand-tagline">Creating a user account on CEERRA</h2>
					<h3>  <p>Return to the <a href="index.php">login page</a>.</p></h3>
        			</div>
    			</div>

    			<div class="content pure-u-1 pure-u-md-3-4">
        			<div>
            				<!-- A wrapper for all the blog posts -->
            				<div class="posts">

                				<!-- A single blog post -->
                				<section class="post">
                    				<header class="post-header">

                        				<h2 class="post-title">Register with us</h2>

                    				</header>

                    <div class="post-description">
                        <p>

				<ul>
            				<li>Passwords must be at least 6 characters long</li>
            				<li>Passwords must contain
                			<ul>
                    				<li>At least one upper case letter (A..Z)</li>
                    				<li>At least one lower case letter (a..z)</li>
                    				<li>At least one number (0..9)</li>
                			</ul>
            				</li>
            				<li>Your password and confirmation must match exactly</li>
        			</ul>

                        </p>

			<form class="pure-form pure-form-aligned" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
     			           method="post" name="registration_form">
				<fieldset>
					<div class="pure-control-group">
						<label for="username">Email:</label>
            					<input type="email" name='username' id='username' />
            				</div>
					<br>

					<div class="pure-control-group">
						<label for="email">Retype Email:</label>
						<input type="email" name="email" id="email" />
					</div>
					<br>
					
					<div class="pure-control-group">
           	 				<label for="password">Password:</label>
						<input type="password" name="password" id="password"/>
            				</div>
					<br>
				
					<div class="pure-control-group">
						<label for="confirmpwd">Confirm password:</label>
						<input type="password" name="confirmpwd" id="confirmpwd" />
            				</div>
					<br>

					<input type="button" class="pure-button pure-button-primary" value="Register" 
                   				onclick="return regformhash(this.form,
                                   			this.form.username,
                                   			this.form.email,
                                   			this.form.password,
                                   			this.form.confirmpwd);" /> 
				</fieldset>
			</form>
                    </div>
            </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>
