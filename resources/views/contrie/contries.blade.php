<!DOCTYPE html>
<html>
<head>
	<title>Contries</title>
</head>
<body>
		<form action="{{ Route('pais')}}" method="GET">


			Introduzca: <input type="text" name="pais"> 
			<input type="submit" name="enviar" value="ok">
		</form>
	<br>

<?php
if(isset($_GET['pais'])){
for($i=0; $i<count($rapi); $i++){ ?>

	<br>
		Pais: {{$rapi[$i]['name']}}
	<br>
		Capital: {{$rapi[$i]['capital']}} 
	<br>
		Region: {{$rapi[$i]['region']}}
	<br>
		Idioma:	{{$rapi[$i]['languages'][0]['name']}}
	<br>
<?php	
}}
?> 

</body>
</html>