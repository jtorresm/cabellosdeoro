<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Centro de procesamiento</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
					<div id="logo">
						<h1><a>Biblioteca</a></h1>
						<span>Design by Torres And Estarita</span>
					</div>

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
		<table style="width: 67%; height: 283px;" align="center">

			<tr>
				<td align="center"</td>
				<td style="width: 91px"><font color="#F7920D"><h1>Id Material:</h1></font>
	<input name="Txtidmat" type="text" value="<?php echo $_SESSION['I']; ?>" required="required" autofocus/></td>
			</tr>
			<tr>
				<td >	</td>
				<td style="width: 91px"> <font color="#F7920D"><h1>Id Ejemplar:</h1></font>
	<input name="Txtidejem" type="text" value="<?php echo $_SESSION['I']; ?>" required="required" autofocus/></td>
			</tr>
			<tr>
				<td style="width: 187px">
		</td>
				<td style="width: 91px"><font color="#F7920D"><h1>Nombre:</h1></font>
		<input name="Txtnombre" type="text" value="<?php echo $_SESSION['N']; ?>" /></td>
			</tr>
			<tr>

		        </select></td>
			</tr>
			<tr>
				<td style="width: 187px">&nbsp; </td>
				<td style="width: 91px"><font color="#F7920D"><h1>Estado de Prestamo:</h1></font>
				<select name="mat1" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res1))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['P']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			<tr>
				<td style="width: 187px"></td>
				<td style="width: 91px"><font color="#F7920D"><h1>Estado de Material:</h1></font>
				<select name="mat2" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res2))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['M']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			<tr>
				<td style="width: 187px"></td>
				<td style="width: 91px"> <font color="#F7920D"><h1>Ubicacion:</h1></font>
				<select name="mat3" style="width: 161px">
			<option value="">-Seleccione-</option>
				<?php while($row=mysql_fetch_array($res3))
				{?>

				<option value="<?php echo $row['id']?>"> <?php echo $_SESSION['U']; echo htmlentities($row['nombre']);?></option>
				<?php } ?>
		</select></td>
			</tr>
			<tr>
				<td style="width: 187px"></td>
				<td style="width: 91px">   <font color="#F7920D"><h1>Seccion:</h1></font>
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
				<a class="button"><input name="Boton"; style="width: 156px" type="submit" value="Insertar" onClick="validar(this.form);"/></a></td>
			</tr>
			<tr>
				<td style="width: 187px; height: 23px">&nbsp;</td>
				<td style="height: 23px; width: 91px;">
                <a class="button"><input name="Boton" style="width: 155px" type="submit" value="Actualizar"/></a></td>
			</tr>
			<tr>
				<td style="width: 187px">&nbsp;</td>
				<td style="width: 91px">
				<a class="button"><input name="Boton" style="width: 154px" type="submit" value="Eliminar"/></a></td>
			</tr>
        	<tr>
            <td style="width: 187px"></td>
            </form>
			<td style="width: 91px">
            <form method="post" action="ejemplar.php">
    		   <a class="button">	<input name="Boton" style="width: 154px" type="submit"  value="Limpiar"/></a>
    		</form>
            </td>
		  </tr>

		</table>

               <a href="index.html"class="button">Regresar</a>  <br><br><br><br><br><br><br><br>



        <font color="#F7920D"><h1>Design: <a >Torres</a> & <a >Estarita</a> (<a>CUES</a>) </h1></font>

</body>

</html>
	<?Php 

?>	
