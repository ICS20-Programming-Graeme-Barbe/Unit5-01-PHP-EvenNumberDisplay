<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Even Number Display" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Even Number Display</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Even Number Display</h1></center>';
			echo '<img src=./images/numberCounter.webp width="35%">';
			echo "<center><p><br>Enter your maximum and minimum number and the computer will display all the numbers in between.</p";
		?>

		<!-- Textfield -->
		<form method = "post">   
			<p>Min: </p><input type="number" name="min" step="1">   
			<br><br>  
			<p>Max: </p><input type="number" name="max" step="1">   
			<br><br>
			<input type = "submit" name = "submit" value="Submit">
		</form>
		<br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['submit'])) {  
				$max = intval($_POST['max']);   
				$counter = intval($_POST['min']);
				$numbers = ""; 
				
				if ($max >= $counter) {
					//while loop for counter
					while ($counter <= $max) {
						$numbers = $numbers . $counter . '<br>';
						$counter = $counter + 1;
					}
				} else {
					echo '<p>Please make sure your min is smaller than your max</p>';
				}

				echo "<p>". $numbers;
			}
		?>
	</body>
</html>