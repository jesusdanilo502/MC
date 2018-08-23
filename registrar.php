<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/estilos_contactos.css">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  
  
  <div class="container">
  
  
  <form action="Procesos/insertar.php" method="post">
  <h2>Registro Productos</h2>
  <a class="button button3" href="index.php">Consultar...</a>
 
  <hr>
  
 
 
</ul>
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-12">
      
        
        <input  type="text" name="txtmarca" placeholder="Marca..." required>
        
        <input type="text" name="txtcolor" placeholder="Color..." required>
         
        <input type="text" name="txtmedida" placeholder="Medida..." required>
          
         <input type="text" name="txtespesor" placeholder="Espesor...">
         <input type="text" name="txtprecio" placeholder="Precio...">
          
        <textarea id="area" name="txtmensaje" placeholder="Escriba aqui espesificaciones tecnicas" required></textarea>
  	
    		<input type="submit" value="Enviar" id="boton">
      </div>
      
    </div>
    
  </form>
  <br>
  <br>
  
  </div>
  
  
  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<!-- <script src="js/bootstrap.js"></script> -->
  <script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>