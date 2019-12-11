<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  
<body>
	<form action="{{route('Countries')}}" method="GET">
		<input class="form-control" type="text" name="name">
		<button type="submit" class="btn btn-primary" value="filtrar"><i class=" fa fa-filter"></i>Ok</button>
</form>
<pre>{{var_dump($rapi)}}</pre>



</body>


</html>