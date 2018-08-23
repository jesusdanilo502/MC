<?php
class metodos {

    public function insertarDatos($datos){
        $c= new conectar();
        $conexion= $c->conexion();
        $sql ="INSERT into productos (marca,color,medida,espesor,precio,notas) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
         return mysqli_query($conexion,$sql);
    }

    public function consultaDatos($consultados){
        $c= new conectar();
        $conexion = $c->conexion();
        $consulta = "SELECT * FROM productos WHERE marca  LIKE '%$consultados%' OR medida  LIKE '%$consultados%' OR CONCAT(marca,' ',medida) LIKE '%$consultados%'";
        return mysqli_query($conexion,$consulta);
    }
} 
   
?>