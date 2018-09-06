<?php

//Archivo de conexión a la base de datos
require_once "../conexion.php";
require_once "../metodosCrud.php";
//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje_result = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla productos 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el marca sea igual a $consultaBusqueda, 
    //o $consultaBusqueda sea igual a marca + (espacio) + medida
    
	/*$consulta = mysqli_query($conexion, "SELECT * FROM productos
	WHERE marca COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' 
	OR medida COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%'
	OR CONCAT(marca,' ',medida) COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%'
	");  */

	$cb= new metodos();
	$oso = $cb->consultaDatos($consultaBusqueda);
	if($oso[0]){
		if(mysqli_num_rows($oso[0]) != 0){
			echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

			//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
			while($resultados = mysqli_fetch_array($oso[0])) {				
				$marca=$resultados['marca'];
				$color=$resultados['color'];
				$medida=$resultados['medida'];
				$espesor=$resultados['espesor'];
				$pPrecio=$resultados['precio'];
				$mensaje=$resultados['notas'];

				$fomatPrecio = number_format($precio,0);
				//Output

				$mensaje_result .= '
				<p>
				<strong>Marca...</strong> ' . $marca . '<br>
				<strong>Color...</strong> ' . $color . '<br>
				<strong>Medidas...</strong> ' . $medida . '<br>
				<strong>Espesor...</strong> ' . $espesor . '<br>
				<strong>Precio... $</strong> ' . $fomatPrecio . '<br>
				<strong>Espesificaciones Tecnicas..</strong> ' . $mensaje . '<br>
				</p>';

			};
		}else{
			$mensaje_result = "<p>No hay ningún para este producto</p>";
		}
	}else{
		$mensaje_result = "<p>Hubo un error!</p><br>".$oso[1];
	}
   

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje_result;
?>