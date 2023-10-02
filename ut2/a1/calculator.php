<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Native calculator</h2>
    <form method="get" action="result.php">
        <label>Value 1:</label>
        <input type="text" id="value1" name="value1" />
        <br><br>
        <label>Value 2:</label>
        <input type="text" id="value2" name="value2" />
        <br><br>
        <label>Operation:</label>
        <select name="operation" size="number_of_options">  
            <option>Addition</option>  
            <option>Subtract</option>  
            <option>Division</option>  
            <option>Multiplication</option>  
          </select>
          <br><br>
          <img src="calculadora.png">
          <br><br>
          <button type="submit">Calculate</button>
    </form>
    <br>
    <?php 
 
 $Numero1=$_REQUEST['n1'];
 $Numero2=$_REQUEST['n2'];
 $Opciones=$_REQUEST['Operacion'];
 switch ($Opciones) {
     case 1: $suma = $Numero1 + $Numero2;
     echo "la suma es:  " . $suma;
     break;
     case 2: $resta = $Numero1 - $Numero2;
     echo "la resta es:  " . $resta;
     break;
     case 3: $mult = $Numero1 * $Numero2;
     echo "la Multiplicacion es:   " . $mult;
     break;
     case 4: $div = $Numero1 / $Numero2;
     echo "la Divicion es:   " . $div;
     break;
     }
 ?>
</body>
</html>