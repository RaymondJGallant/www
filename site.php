<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesalands 3 Belongs To Me</title>
</head>
<body>
    <?php
    echo "<h1> Mesalands 3 Belongs To Me</h1>";
    echo "<hr>";
    echo "<p>This Is My Site</p>"
    
    
    ?>
    <?php
        $characterName = "Tom";
        $characterAge =80;

        echo "There once was a man named $characterName<br>";
        echo "He was $characterAge years old<br>";
            $characterName ="Mike";
        echo "He really liked the name $characterName<br>";
        echo "But he didn't like being $characterAge<br>";
    ?>
      

      <?php
      //This is a single line comment
        $phrase = "To be or not to be"; //this is a string
        $age = -30; // this is an integer it has to be a whole number php knows the difference
        $gpa = "3.25"; // this is a decimal or a floating point number
        $isMale ="false";// boolean is only true or false no in between
        //null value means no value
      ?>
    <?php
        $phrase= "Girrafe Academy";
        echo strtoupper ($phrase);//string to upper strtoupper makes all uppercase
        echo"<hr>";
        echo strtolower ($phrase);//string to lower strtolower makes all lowercase
        echo strlen($phrase);  //string length 
     
        echo $phrase [0];        //index  counts starting at 0 
        //modify index by setting [0] to B
        $phrase="Girrafe Academy";
        $phrase[0] = "B";
        echo"<hr>";
        echo $phrase;   
    ?>
    <?php
          $phrase="Girrafe Academy";//replace string and substring
          echo str_replace("Girrafe","Panda", $phrase);
    ?>
    <?php
         $phrase ="Girraffe Academy"; //
         echo substr($phrase,8, 3);
    ?>

    <?php
            echo 40;
            echo 50;
            echo 60;
    ?>
</body>
</html>