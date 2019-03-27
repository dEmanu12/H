<!-- Falta fórmula y CSS -->
<!-- Cambiar valores rentabilidad -->
<!DOCTYPE html>
<html>
<head>
	<title>Resultados 2</title>
</head>
<body>
<?php
	$sexo = $_POST['sexo'];
	$afp = $_POST['AFP'];
	$tipo = $_POST['tipo'];
	$pDeseada = $_POST['pDeseada'];
	$pActual = $_POST['pActual'];
	$edad = $_POST['edad'];
	$mEmpl = 0;

	switch($afp) {
		case "Capital":
			switch($tipo) {
				case 'A':
					$p100 = 0.01;
					break;
				case 'B':
					$p100 = 0.02;
					break;
				case 'C':
					$p100 = 0.03;
					break;
				case 'D':
					$p100 = 0.04;
					break;
				case 'E':
					$p100 = 0.05;
					break;
			}
			break;
		case "Cuprum":
			switch($tipo) {
				case 'A':
					$p100 = 0.06;
					break;
				case 'B':
					$p100 = 0.07;
					break;
				case 'C':
					$p100 = 0.08;
					break;
				case 'D':
					$p100 = 0.09;
					break;
				case 'E':
					$p100 = 0.10;
					break;
			}
			break;
		case "Habitat":
			switch($tipo) {
				case 'A':
					$p100 = 0.11;
					break;
				case 'B':
					$p100 = 0.12;
					break;
				case 'C':
					$p100 = 0.13;
					break;
				case 'D':
					$p100 = 0.14;
					break;
				case 'E':
					$p100 = 0.15;
					break;
			}
			break;
		case "Modelo":
			switch($tipo) {
				case 'A':
					$p100 = 0.16;
					break;
				case 'B':
					$p100 = 0.17;
					break;
				case 'C':
					$p100 = 0.18;
					break;
				case 'D':
					$p100 = 0.19;
					break;
				case 'E':
					$p100 = 0.20;
					break;
			}
			break;
		case "Planvital":
			switch($tipo) {
				case 'A':
					$p100 = 0.21;
					break;
				case 'B':
					$p100 = 0.22;
					break;
				case 'C':
					$p100 = 0.23;
					break;
				case 'D':
					$p100 = 0.24;
					break;
				case 'E':
					$p100 = 0.25;
					break;
			}
			break;
		case "Provida":
			switch($tipo) {
				case 'A':
					$p100 = 0.26;
					break;
				case 'B':
					$p100 = 0.27;
					break;
				case 'C':
					$p100 = 0.28;
					break;
				case 'D':
					$p100 = 0.29;
					break;
				case 'E':
					$p100 = 0.30;
					break;
			}
			break;
	}

	echo "Sexo: ", $sexo, "<br>AFP: ", $afp, "<br>Tipo: ", $tipo, "<br>Pensión deseada: ", $pDeseada, "<br>Pensión actual: ", $pActual, "<br>Edad: ", $edad, "<br>Rentabilidad: ", $p100, "<br>";
	if($sexo == 'Masculino') {
		$mEmpl = (65 - $edad) * 12;
	} elseif ($sexo == 'Femenino') {
		$mEmpl = (60 - $edad) * 12;
	}
	echo "Meses de empleabilidad restantes: ", $mEmpl, "<br><br>";
	$sNecesario = 0;
?>
</body>
</html>
