<!DOCTYPE html>
<html id="all">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>hidden-stream</title
		<link rel="stylesheet" type="text/css" href="all.css" />
    </head>
    <body>
    	<?php
			$hiddenNumber = 42; //the "hidden number"
			$output = "empty";

			//Defining functions here
			function highOrLow($guess) {
				if ($guess < $hiddenNumber) {
					return "Too low!";
					}
				elseif ($guess > $hiddenNumber) {
					return "Too high!";
					}
				else {
					return "You guessed it! The number was " . $hiddenNumber . ".";
				}
			}

			if ($_POST["number"]) {
				$output = highOrLow($_POST["number"]);
				}
    		else {
				$output = "You didn't pick a number!";
			}
    	?>
    	<h1>A new side project</h1><br />
    	
    	<a href="league.php">Some league thing</a><br />
    	<a href="http://damp-cove.herokuapp.com">Some other thing that doesn't work</a><br />
    	<a href="git://git@heroku.com:hidden-stream.git">Git</a>
    
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
