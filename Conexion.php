<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sin título 1</title>
</head>

<body>
<?php
	$servidor = "127.0.0.1";
	$usuario = "root";
	$password = "123";
	$bd = "biblioteca";
		$con = mysqli_connect($servidor,$usuario,$password,$bd);
		if (mysqli_connect_error())
		{
			echo "Falla en la conexion MySqli: " . mysqli_connect_error();	
		}
?>

</body>

</html>
