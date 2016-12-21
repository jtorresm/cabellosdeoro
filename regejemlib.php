<?php
include('Conexion.php');	
if ($_POST['Boton']=='Insertar')
{
	$id = @$_POST["Txtidmat"];
	$idejemplar = @$_POST["Txtidejem"];		
	$nombre = @$_POST["Txtnombre"];
	$prestamo = @$_POST["mat1"];
	$material = @$_POST["mat2"];
	$ubicacion = @$_POST["mat3"];
	$seccion = @$_POST["mat4"];
	$editorial = @$_POST["mat5"];
	$RNoEjem = mysqli_query($con,"Insert Into noejemplar (id,nombre) Values ('$idejemplar','$nombre')");
	$REdi = mysqli_query($con,"Insert Into editoriallibro (isbn,idEditorial) Values ('$id'"+"'$idejemplar','$nombre')");
	$REjem = mysqli_query($con,"Insert Into ejemplar (Id,Noejemplar,IdEstadoPrestamo,IdEstadoMaterial,IdUbicacion,IdSeccion) Values ('$id','$idejemplar','$prestamo','$material','$ubicacion','$seccion')" );
	$numreg = mysqli_affected_rows($con);
    if($numreg > 0)
	{
		echo'<script>alert("ejemplar Registrado")</script>';
		$_SESSION['I'] = "";
		$_SESSION['N'] = "";
		$_SESSION['P'] = "";
		$_SESSION['M'] = "";
		$_SESSION['U'] = "";				
		$_SESSION['S'] = "";	
		$_SESSION['E'] = "";
?>
		<script>
       			location.href='ejemplar.php'
       	</script>
		   
<?php
	}
	}
		if ($_POST['Boton']=='Consulta')
{
	$id = @$_POST["Txtid"];	
	$resultado = mysqli_query($con,"Select id,nombre, idTipoMaterial from material Where id='$id'");
	$fila = mysqli_fetch_array($resultado);
	$numreg = mysqli_affected_rows($con);
	if ($numreg <= 0)
	{
			echo'<script>alert("¡El material no Existe!")</script>';
		$_SESSION['I'] = "";
		$_SESSION['N'] = "";
		$_SESSION['T'] = "";
?>
		<script>
       			location.href='ejemplar.php'
       	</script>
<?php
	}
	else
	{
		$_SESSION['I'] = $fila['id'];
		$_SESSION['N'] = $fila['nombre'];
		$_SESSION['T'] = $fila['idTipoMaterial'];	 
?>
		<script>
       			location.href='ejemplar.php'
       	</script>
<?php
	
	}
	
}
if ($_POST['Boton']=='Actualizar')
{
	$id = @$_POST["Txtidmat"];
	$idejemplar = @$_POST["Txtidejem"];		
	$nombre = @$_POST["Txtnombre"];
	$prestamo = @$_POST["mat1"];
	$material = @$_POST["mat2"];
	$ubicacion = @$_POST["mat3"];
	$seccion = @$_POST["mat4"];
	$editorial = @$_POST["mat5"];
	$Rejem = mysqli_query($con,"Update ejemplar Set IdEstadoPrestam = '$prestamo',IdEstadoMaterial= '$material',IdUbicacion = '$ubicacion',IdSeccion = '$seccion' Where id='$id' and noejemplar='$idejemplar'");
	$Redi = mysqli_query($con,"Update editoriallibro Set idEditorial = '$editorial', Where isbn = '$id'"+"'$idejemplar'");
	echo'<script>alert("ejemplar Actualizado")</script>'
	$_SESSION['I'] = "";
		$_SESSION['N'] = "";
		$_SESSION['T'] = "";
?>
		<script>
       			location.href='ejemplar.php'
       	</script>
<?php
?>
		<script>
       			location.href='ejemplar.php'
       	</script>
<?php
}