<?php
/***************************************************************
 * register1.php
 *
 * Computer Science 50
 * David J. Malan
 *
 * Implements a registration form for Frosh IMs.  Redirects
 * user to froshims1.php upon error.
 ***************************************************************/
	// validate submission
	if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"]))
	{
    		header("Location: froshims1.php");
	exit; }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Frosh IMs</title>
  </head>
  <body>
    You are registered!  (Well, not really.)
  </body>
</html>
