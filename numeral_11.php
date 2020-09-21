<?php 
	date_default_timezone_set('America/El_Salvador'); 
	$dia = date('w');
	$dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	$ordinario = '';
	switch ($dia) {
		case 0: case 6: $ordinario = 'F'; break;
		default: $ordinario = 'O'; break;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Literal 11</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
</head>
<body>
	<div class="row">
	 	<div class="col-md-8 col-md-offset-2">
	 		<br>
	 		<br>
	 		<br>
	 		<h3>11. Construya un algoritmo en PHP quentregue en una tabla HTML:</h1>
	 		<p>
	 			a. La fecha y hora actual actual en formato ‘yyyy-mm-dd hh:mm:ss’<br>
				b. El nombre del día (lunes, martes, …) de la fecha actual. <br>
				c. Si el día es ordinario imprimir una ‘O’, en caso contrario una ‘F’<br>
				d. La fecha y hora actual del salvador en formato ‘yyyy-mm-dd hh:mm:ss’

	 		</p>
	 		<br>
	 		<br>
	 		<br>
	 		<table>
	 			<tr>
				    <th width="25%">A</th>
				    <th width="25%">B</th>
				    <th width="25%">C</th>
				    <th width="25%">D</th>
			  </tr>
			  <tr>
			    <td><?php echo date("Y-m-d G:i:s"); ?></td>
			    <td><?php echo $dias[$dia]; ?></td>
			    <td><?php echo $ordinario; ?></td>
			    <td><?php echo date("Y-m-d G:i:s"); ?></td>
			  </tr>
			</table>
	 	</div>
	</div>
</body>
</html>