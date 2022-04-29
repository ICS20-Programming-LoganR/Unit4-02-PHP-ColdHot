<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
     <link rel="stylesheet" href="./css/style.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/site.webmanifest">
<link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <!-- title -->
    <title>Hot or Cold</title>
	</head>
	<body>
    <center>
    <h1><?php echo 'Hot or Cold in PHP.'; ?></h1>
		<?php echo '<p>Picture this, it is late October, you live in Canada and do not know if you should wear a jacket today. Well no matter, you can fill the text field with the current temperature and determine whether or not you should wear a jacket.</p>'; ?>
<!-- image -->
    <img src="images/hotcold.jpg" alt="image" length=100 width=200>
		<!-- forms to get the temperature from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=celsius">Temperature (C):</label>
      <input type="number" id="guess" step = "0.01" placeholder="celsius" name="celsius"><br><br>
 <!-- button -->
      <input type="submit" value="Answer">
</form>
			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
  </center>
    </body>
</html>