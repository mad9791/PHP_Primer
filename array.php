 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>PHP Primer - Array</title>
 </head>
 <body>
     <h1>Array</h1>
     <?php
     //a variable
        $num = 3;

        //an array
        // only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,101,2,65,78,4,65,65,68,65,65,657);
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>ARRAY Number is size: $size</p>";
        for($count = 0; $count <$size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
 </body>
 </html>