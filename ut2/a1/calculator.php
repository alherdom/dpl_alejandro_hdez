<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Calculator</title>
</head>

<body>
    <h1>Calculator</h1>
    <form method="post" action="calculator.php">
        <label>Value 1:</label>
        <input type="text" id="value1" name="value1" />
        <br><br>
        <label>Value 2:</label>
        <input type="text" id="value2" name="value2" />
        <br><br>
        <label>Operation:</label>
        <select name="operation" size="number_of_options">
            <option value="" disabled selected></option>
            <option value="Addition">Addition</option>
            <option value="Substract">Substract</option>
            <option value="Division">Division</option>
            <option value="Multiplication">Multiplication</option>
        </select>
        <br><br>
        <img src="calculadora.png" width="100" height="100">
        <br><br>
        <button type="submit">Calculate</button>
    </form>
    <br>

    <?php
        $number1=$_POST['value1'];
        $number2=$_POST['value2'];
        $option=$_POST['operation'];

        if($option == "Addition"){
            $solucion = $number1 + $number2;
        }else if($option == "Substract"){
            $solucion = $number1 - $number2;
        }else if($option == "Division"){
            $solucion = $number1 / $number2;
        }else if($option == "Multiplication"){
            $solucion = $number1 * $number2;
        }
        echo "The solution is: " .$solucion;
    ?>
</body>

</html>