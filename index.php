<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['hiddenNumber'];
?>
<html id="all">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>hidden-stream</title
		<link rel="stylesheet" type="text/css" href="all.css" />
    </head>
    <body>
    	<?php
			$hiddenNumber = $_SESSION['hiddenNumber']; //the "hidden number" is randomly
			$output = "";                              //set when someone guesses right

			//Defining functions here
			function highOrLow($guess) {
				global $hiddenNumber;
				if ($guess < $hiddenNumber) {
					return "Too low!";
					}
				elseif ($guess > $hiddenNumber) {
					return "Too high!";
					}
				else {
					return "You guessed it! The number was " . $hiddenNumber . ". The number has been reset, so you can guess again!";
					$_SESSION['hiddenNumber'] = mt_rand(1,100);
				}
			}

			if ($_POST["number"]) {
				$output = highOrLow($_POST["number"]);
				}
    		else {
				$output = "You didn't pick a number! The number has been reset!";
				$_SESSION['hiddenNumber'] = mt_rand(1,100);
			}
    	?>
    	<h1>A new side project</h1><br />
    	
    	<a href="league.php">Some league thing</a><br />
    	<a href="http://damp-cove.herokuapp.com" target="_blank">Some other thing that doesn't work</a><br />
    	<a href="git://git@heroku.com:hidden-stream.git" target="_blank">Git</a>
    
    	<p>
    		<?php
				echo $output;
    		?>
    	</p>
    	
    	<form id="myForm" action="index.php" method="POST">
    		<input type="text" name="number" />
			<input type="submit" />
    	</form>
    	
    </body>
</html>
