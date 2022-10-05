<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesalands 3 Belongs To Me</title>
</head>
<body>
    
            <form action="site.php" method="post">
Apples:  <input type="checkbox" name="fruits[]" value="apples"> <br>
Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
Bananas:<input type="checkbox" name="fruits[]" value="bananas"> <br>
<input type = "submit"> 
            </form>
            <!--Because the user can select multiple inputs, the values are stored in an array-->

        <?php
        $fruits = $_POST["fruits"];
        
           
         ?>

  

</body>
</html>