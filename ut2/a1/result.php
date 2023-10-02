<?php 
	if ($_POST ["value1"] !="" and $_POST ["value2"]!=""){
		if ($_POST["operation"] == "sume") {
			print ($resultado = $_POST ["value1"] + $_POST ["value2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operation"] == "resta") {
			print ($resultado = $_POST ["value1"] - $_POST ["value2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operation"] == "multiplicacion") {
			print ($resultado = $_POST ["value1"] * $_POST ["value2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operation"] == "division") {
			print ($resultado = $_POST ["value1"] / $_POST ["value2"]);
			print ('<br /><a href="calculator.php">Volver</a>');
		}
	} else {
		print("Input some value");
		print ('<br/><a href="calculadora.php">Volver</a>');
	}
