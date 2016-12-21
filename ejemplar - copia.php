<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Centro de proceso</title>
</head>
<body>
<?php 
mysql_connect("localhost","root","123") or 
die("No se puede conectar");
mysql_select_db("biblioteca") or
die ("No se ha podido seleccionar la Base de Datos");
$mat=htmlentities($_REQUEST['mat']);

 

$query="select * from estadoprestamo"; 
$res1=mysql_query($query);
$query="select * from estadomaterial"; 
$res2=mysql_query($query);
$query="select * from ubicacion"; 
$res3=mysql_query($query);
$query="select * from seccion"; 
$res4=mysql_query($query);

?>
<?php

	?>
	  

	
	<form  name="form" method="post" action="registrarejemplar.php">
		<br></br>
		<table style="width: 24%; height: 283px;" align="center">
						
			<tr>
				<td style="width: 187px">Id Material: 		</td>
				<td style="width: 91px">
	<input name="Txtidmat" type="text" value="<?php echo $_SESSION['I']; ?>" required="required" autofocus/></td>
			</tr>
			<tr>
				<td style="width: 187px">Id Ejemplar: 		</td>
				<td style="width: 91px">
	<input name="Txtidejem" type="text" value="<?php echo $_SESSION['I']; ?>" required="required" autofocus/></td>
			</tr>
			<tr>
				<td style="width: 187px">Nombre:
		</td>
				<td style="width: 91px">
		<input name="Txtnombre" type="text" value="<?php echo $_SESSION['N']; ?>" /></td>
			</tr>
			<tr>

		        </select></td>
			</tr>
			<tr>
				<td style="width: 187px">Estado de prestamo:&nbsp; </td>
				<td style="width: 91px">
				<select name="mat1" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res1))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['P']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			<tr>
				<td style="width: 187px">Estado de Material:&nbsp; </td>
				<td style="width: 91px">
				<select name="mat2" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res2))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['M']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			<tr>
				<td style="width: 187px">Ubicacion:&nbsp; </td>
				<td style="width: 91px">
				<select name="mat3" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res3))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['U']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			<tr>
				<td style="width: 187px">Seccion :&nbsp; </td>
				<td style="width: 91px">
				<select name="mat4" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res4))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['S']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			
			<tr>
				<td style="width: 187px">&nbsp;				
				</td>
				<td style="width: 91px">
				<input name="Boton"; style="width: 156px" type="submit" value="Insertar" onClick="validar(this.form);"/></td>
			</tr>
			<tr>
				<td style="width: 187px; height: 23px">&nbsp;</td>
				<td style="height: 23px; width: 91px;">
				<input name="Boton" style="width: 155px" type="submit" value="Actualizar"/></td>
			</tr>
			<tr>
				<td style="width: 187px">&nbsp;</td>
				<td style="width: 91px">
				<input name="Boton" style="width: 154px" type="submit" value="Eliminar"/></td>
			</tr>
			<tr>
			<td style="width: 187px"><a href="selectipo.php" target="_parent">Regresar</a></td>
            </form>
			<td style="width: 91px">
            <form method="post" action="registrarlibro.php">
    			<input name="Boton" style="width: 154px" type="submit"  value="Limpiar"/>
    		</form>
            </td>
		  </tr>

		</table>
		    	
			
	
	
</body>

</html>
	<?Php 

?>	
