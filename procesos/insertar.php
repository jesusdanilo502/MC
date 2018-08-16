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
	$datos=array(
			$marca,
            $color,
            $medida,
            $espesor,
            $precio,
            $mensaje
				);
	$obj= new metodos();
	if($obj->insertarDatos($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}

 ?>