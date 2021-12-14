<?php
    $dbhost = "localhost"; //host donde esta la base de datos
   	$dbname = "figuras"; //nombre de BD
   	$dbuser = "root"; // user name
   	$dbpass = ""; // password de usuario
	
	$nombre=$_POST["usuario"];
	$correo=$_POST["password"];
	$ide=$_POST["ide"];
	
	
	

 	 echo "n".$nombre;
	 echo "c".$correo;
	 echo "id".$ide;


//if (($_POST['nombre'])&&($_POST['correo']))
 if (($nombre!="")&&($correo!=""))
 {	 
  echo "si hay nombre y correo";
  $ide="";
   $sql = "INSERT INTO `datos2` ( `usuario` , `password` )VALUES('NULL', '$usuario', '$nombre');"; 
   $sql2="";
   $conexion=mysqli_connect("localhost","root","","figuras") or
    die("Problemas con la conexión");
   mysqli_query($conexion,"SELECT * FROM figuras");
   mysqli_query($conexion,$sql); 
    mysqli_close($conexion);
 }

if ($ide!="")
  {
    $nombre="";
	$correo="";
	$sql="";
	$sql2 = "DELETE FROM `figuras`.`datos2` WHERE `datos2`.`id` =$ide;";
	     $conexion=mysqli_connect("localhost","root","","figuras") or
    die("Problemas con la conexión");
      mysqli_query($conexion,"SELECT * FROM figuras");
	  mysqli_query($conexion,$sql2);
	   mysqli_close($conexion);
  
	
  }
	

	
	
	 include "index.html";
	 

?>