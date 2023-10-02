<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Native calculator</h2>
    <form method="get" action="calculadora.php">
        <label>Value 1:</label>
        <input type="text" id="value1" name="value1" />
        <br><br>
        <label>Value 2:</label>
        <input type="text" id="value2" name="value2" />
        <br><br>
        <label>Operation:</label>
        <select name="operation" size="number_of_options">  
            <option> Addition </option>  
            <option> Subtract </option>  
            <option> Division </option>  
            <option> Multiplication </option>  
          </select>
          <br><br>
          <img src="calculadora.png">
          <br><br>
          <button type="submit">Calculate</button>
    </form>
    <br>
</body>
</html>