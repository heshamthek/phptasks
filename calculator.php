<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cal</title>
    </head>
    <body>
        <form method="GET">
<input type="number" name="num1">
<input type="number" name="num2">
<select name="operator">
<option>add</option>
<option>sub</option>
<option>mult</option>
<option>dev</option>
</select>
<button type="submit" name="submit" value="submit">Calculate</button>
        <!-- </form>
        <?php 
        if((isset($_GET['submit']))){

        $num1= $_GET['num1'];
        $num2= $_GET['num2'];
        $op=$_GET['operator'];
        switch($op){
        case 'add':
            echo $num1+ $num2;
            break;
            case 'sub':
                echo $num1 - $num2;
                break;
                case 'mult':
                    echo $num1 * $num2;
                    break;
                    case 'dev':
                        echo $num1 / $num2;
                        break;

        }
    }

         -->
        ?>

    </body>
    </html>