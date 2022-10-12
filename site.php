<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesalands 3 Belongs To Me</title>
</head>
<body>
    <!--Switch Statements-->

<form  action="site.php" method="post">
        What was your grade?
        <input type ="text" name = "grade">
        <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    //echo $grade; 
    switch ($grade){
        case "A":
            echo " You did Amazing"; 
            break;
            case "B":
                echo "You did pretty good";
                break;
                case "C":
                    echo "You did decent";
                    break;
                    case "D":
                        echo "You could have tried harder";
                        break;
                        case"F": 
                            echo "Are you  kidding me";
                            break;
                            default: 
                            echo "Invalid Grade";
    }
    ?>
   
  
</body>
</html>