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
   Password: <input type= "password" name="password"><br>
    <input type="submit">
    </form>
    <br><br>


    <?php
    //$GET vs $POST

        echo $_POST["password"];
       
    ?>



</body>
</html>