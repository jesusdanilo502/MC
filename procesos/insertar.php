<?php 
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$marca=$_POST['txtmarca'];
	$color=$_POST['txtcolor'];
	$medida=$_POST['txtmedida'];
	$espesor=$_POST['txtespesor'];
	$precio=$_POST['txtprecio'];
	$mensaje=$_POST['txtmensaje'];
    /* capturo datos en arreglo */
	$datos=array($marca,$color,$medida,$espesor,$precio,$mensaje);
	$obj= new metodos();
	$response = $obj->insertarDatos($datos);
	if($response[0]){
		header("location:../registrar.php");
	}else{
		echo "<p>Hubo un error!</p><br>".$response[1];
	}

 ?>