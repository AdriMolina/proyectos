<html>
<head>
<title>Radio Tics</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div id='div1' class='container'>
		<section id='sct3' class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
			<h1><center>Radio Tics </center></h1>
		</section>
		<section id='sct1' class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
			<img id=logo1 src="img/tics.png" alt="imagen">
		</section>
	</div>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.htm">Radio Tics</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href='index.htm'><span class="glyphicon glyphicon-home"></span> INICIO</a></li>
					<li><a href="radio.htm">Radio</a></li>
					<li><a href="madera.htm">Itess</a></li>
					<li><a href="metal.htm">Top Tics</a></li>
					<li><a href="papel.htm">Noticias Escolares</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="contacto.htm">Contacto<span class="glyphicon glyphicon-envelope"></span></a></li>
					 <li><a href="login/index.php">Iniciar Sesión <span class="glyphicon glyphicon-user"></span></a></li>
					</ul>
			</div>
		</div>
	</nav>
	<form method="post" action="guardar.php"> <!-- Se inicia un formulario para enviar a guardar datos si es el caso -->
	<table> <!-- Se abre una tabla con cinco filas para colocar un formulario sencillo -->
		<tr>
			<th align = "left">
				Nombre: <input type="text" name="nick" size="30" maxlength="30" /> <!-- Caja de texto para colocar el nombre o nick -->
			</th>
		</tr>
		<tr>
			<th align = "left">
				Email: <input type="text" name="mail" size="30" maxlength="30" /> <!-- Caja de texto para colocar el correo -->
			</th>
		</tr>
		<tr>
			<th align = "left">
				Password: <input type="password" name="contra1" size="12" maxlength="12" /> <!-- Caja de password -->
			</th>
		</tr>
		<tr>
			<th align = "left">
				Repetir Password: <input type="password" name="contra2" size="12" maxlength="12" /> <!-- Caja de password de verificacion-->
			</th>
		</tr>
		<tr align = "center">
			<th>
				<input type="submit" value="Registrar" name="registrar"/> <!-- Boton que manda verificar la informacion -->
			</th>
		</tr>
	</table>
	</form>

	<?php
		if(isset($_GET["ERROR"])=="ERROR")
		{
		?>
		<script type ="text/javascript">
			alert("NO COINCIDEN LAS CONTRASE�AS");
		</script>

		<?php
		}
	?>
</body>

</html>
