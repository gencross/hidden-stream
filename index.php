<!DOCTYPE html>
<html id="all">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>hidden-stream</title>
    </head>
    <body>
    	<?php
    		if ($_POST["number"]) {
    			$number = "Your number was " . $_POST["number"] . ".";
    			}
    		else {
    			$number = "You didn't pick a number!";
    			}
    	?>
    	<h1>A new side project</h1><br />
    	
    <!--	
    	<a href="league.php">Some league thing</a><br />
    	<a href="http://damp-cove.herokuapp.com">Some other thing that doesn't work</a><br />
    	<a href="git://git@heroku.com:hidden-stream.git">Git</a>
    -->
    
    	<p>
    		<?php
    			echo $number;
    		?>
    	</p>
    	
    	<form id="myForm" action="index.php" method="POST">
    		<input type="text" name="number">
    		<input type="sumbit">
    	</form>
    	
    </body>
</html>
