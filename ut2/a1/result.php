<?php 
	if ($_POST ["value1"] !="" and $_POST ["value2"]!=""){
		if ($_POST["operation"] == "Addition") {
			print ($resultado = $_POST ["value1"] + $_POST ["value2"]);
			print ('<br /><a href="calculator.html">Volver</a>');
		} elseif ($_POST["operation"] == "Subtract") {
			print ($resultado = $_POST ["value1"] - $_POST ["value2"]);
			print ('<br /><a href="calculator.html">Volver</a>');
		} elseif ($_POST["operation"] == "Multiplication") {
			print ($resultado = $_POST ["value1"] * $_POST ["value2"]);
			print ('<br /><a href="calculator.html">Volver</a>');
		} elseif ($_POST["operation"] == "Division") {
			print ($resultado = $_POST ["value1"] / $_POST ["value2"]);
			print ('<br/><a href="calculator.html">Volver</a>');
		}
	} else {
		print("Input some value");
		print ('<br/><a href="calculator.html">Volver</a>');
	}
