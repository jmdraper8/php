<?
	// validate submission
	if (!empty($_POST["name"]) && !empty($_POST["gender"]) && !empty($_POST["dorm"]))
	{

		$to = "johndraper@icloud.com";
		$subject = "Registration";
		$body = "This person just registered:\n\n" .
		$_POST["name"] . "\n" . $_POST["captain"] . "\n" . $_POST["gender"] . "\n" . $_POST["dorm"];
		$headers = "From: johndraper@icloud.com\r\n";
    		mail($to, $subject, $body, $headers);
	}
	else
	{
    		header("Location: froshims3.php");
    		exit;
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Frosh IMs</title>
  </head>
  <body>
    You are registered!  (Really.)
  </body>
</html>
