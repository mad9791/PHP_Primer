 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>PHP Primer - While/Do -While Loop</title>
 </head>
 <body>
     <h1>While Loop</h1>
     
     <?php
     
        $grade = 0;
       //Inifinte loop
      //  while($grade < 10){
      //      echo '<p>I am less than ten</p>';
      //  }
    //Pre-condition loop
      while ($grade < 10){
          echo '<p>I am less than 10!</p>';
          $grade++;
      }

      echo 'EXIT LOOP!';
     ?>
    
     <h1>Do-While LOOP</h1>
    
      <?php  
        do{
            echo '<p>I am less than 10!</p>';
            $grade++;

        }
        while($grade <10)
      ?>



 </body>
 </html>
