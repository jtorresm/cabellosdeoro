<?php
include('Conexion.php');	
if ($_POST['Boton']=='Insertar')
{
	$id = @$_POST["Txtid"];	
	$nombre = @$_POST["Txtnombre"];
	$tipo = @$_POST["mat"];
	$resultado = mysqli_query($con,"Insert Into material (id,nombre,idTipoMaterial) Values ('$id','$nombre','$tipo')");
	$numreg = mysqli_affected_rows($con);
    if($numreg > 0)
	{
		echo'<script>alert("Material Registrado")</script>';
		$_SESSION['I'] = "";
		$_SESSION['N'] = "";
		$_SESSION['T'] = "";		
?>
		<script>
       			location.href='material.php'
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
       			location.href='material.php'
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
       			location.href='material.php'
       	</script>
<?php
	
	}
	
}
if ($_POST['Boton']=='Actualizar')
{
	$id = @$_POST["Txtid"];	
	$nombre = @$_POST["Txtnombre"];
	$tipo = @$_POST["mat"];
	$resultado = mysqli_query($con,"Update material Set nombre='$nombre',idTipoMaterial='$tipo' Where id='$id'");
	echo'<script>alert("Usuario Actualizado")</script>';
	$_SESSION['I'] = "";
		$_SESSION['N'] = "";
		$_SESSION['T'] = "";
?>
		<script>
       			location.href='material.php'
       	</script>
<?php
?>
		<script>
       			location.href='material.php'
       	</script>
<?php
}

		



		

