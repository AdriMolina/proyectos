<?php 
function Conectarse() //Se la da el nombre a la funcion que se conectara a la base de datos
{ 
	$link = mysql_connect("localhost","root","");  //Se colocan los datos, en este caso la base no esta protegida
	if (!($link)) //Si no se puede abrir, se manda un mensaje de error
	{ 
		echo "Error conectando a la base de datos."; 
		exit(); 
	} 
	if(!mysql_select_db("login",$link)) //Si la base (en este caso llamada "login") no existe, manda mensaje de error
	{ 
		echo "Error seleccionando la base de datos."; 
		exit(); 
	} 
	
   return $link; 
} 
?>