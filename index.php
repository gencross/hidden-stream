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
			$output = "";

			//Defining functions here
			function highOrLow() {
				if ($_POST["number"] < $hiddenNumber) {
					$output = "Too low!";
					}
				elseif ($_POST["number"] > $hiddenNumber) {
					$output = "Too high!";
					}
				else {
					$output = "You guessed it! The number was " . $hiddenNumber . ".";
				}
			}

			if ($_POST["number"]) {
				highOrLow();
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
