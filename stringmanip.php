 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>PHP Primer - String Manipulation</title>
 </head>
 <body>
     <h1>String Manipulation</h1>
    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock.";
        $name = "michael duzyk";
        $firstname = "michael";
         $lastname = "duzyk";
        echo $phrase1 . ", named Tiffany, " . $phrase2;
       echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo ' Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo ' Uppercase first letter: ' . ucfirst($firstname) . " " . ucfirst($lastname).'<br/>';
        echo ' Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtolower("THIS WAS UPPERCASE!").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)).'<br/>';
   ?>

 </body>
 </html>
