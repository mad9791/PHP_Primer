 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>PHP Primer - Index</title>
 </head>
 <body>
	<h2>Follow each link to the page example</h2>
 	<ul>
		<li><a href="array.php">Simple Arrays and Printouts</a></li>
		<li><a href="forloop.php">Simple For Loop</a></li>
		<li><a href="dowhileloop.php">Simple Do </a></li>
		<li><a href="whileloop.php">Simple While loop</a></li>
		<li><a href="ifstatement.php">Simple If Statement</a></li>
		<li><a href="switchstatments.php">Simple Switch Statement</a></li>
		<li><a href="stringmanip.php">Simple String Manipulation</a></li>	
 	</ul>    
     <!-- Basic html -->
     <h1>Hello HTML!</h1>

    <?php
       //printin to html echo
        echo "Hello PHP World!";
	echo "<br/>";
	echo "Second Line";
    ?>

    <?php
	$name = "Michael Duzyk";
	$age = "40";
	
	echo "<br/>";	
	echo $name;
	echo "<h1>My name is: ".$name." </h1>";
	echo "<br/>";
	echo "<h1>My age is: ".$age." </h1>";
    ?>

 </body>
 </html>
