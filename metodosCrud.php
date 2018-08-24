<?php
class metodos {
    public function insertarDatos($datos){
        $sql ="INSERT into productos (marca,color,medida,espesor,precio,notas) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
        return  $this->conexion_data($sql);
    }

    public function consultaDatos($consultados){
        $consulta = "SELECT * FROM productos WHERE marca  LIKE '%$consultados%' OR medida  LIKE '%$consultados%' OR CONCAT(marca,' ',medida) LIKE '%$consultados%'";
        return $this->conexion_data($consulta);
    }

    public function conexion_data($sql){
        $c= new conectar();
        $conexion= $c->conexion();
        return array(mysqli_query($conexion,$sql),$sql);
    }
} 
   
?>