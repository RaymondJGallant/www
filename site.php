<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesalands 3 Belongs To Me</title>
</head>
<body>
    <form>
         First Num:  <input type="number" name="num1"> <br>
         OP: <input type="textbox" name="op"> <br>
         Second Num:  <input type="number" name="num2"> <br>

         <input action="site.php" method="post">
         <input type="submit">
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num1 = $_POST["num2"];
        $op = $POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        }elseif($op == "-"){
            echo $num1 - $num2;
        }elseif($op == "/"){
            echo $num1 / $num2;
        }elseif($op =="*"){
            echo $num1 * $num2;
        }else {
            echo "Invalid Operator";
        }
    ?>
   
</body>
</html>