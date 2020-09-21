<?php 
	$identificacion =array(806152,563165,6514563);
	$nombre = array('Nicolas', 'Adriana', 'Sara');
	$apellido = array('Londono','Perez', 'Suarez');
	$index = 0;
	$html='';
	foreach ($identificacion as $value) {
		$html.='
			<tr>
				<td>'.$value.'</td>
				<td>'.$nombre[$index].'</td>
				<td>'.$apellido[$index].'</td>
			</tr>
		';
		$index ++;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Literal 12</title>
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
	 		<h3>12. Teniendo los siguientes arrays: </h1>
	 		<br>
	 		<br>
	 		<br>
	 		<table>
	 			<?php echo $html; ?>
			</table>
	 	</div>
	</div>
</body>
</html>