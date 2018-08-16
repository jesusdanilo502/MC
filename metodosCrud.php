<?php
class metodos {
    public function insertarDatos($datos){
        $c= new conectar();
        $conexion= $c->conexion();
        $sql ="INSERT into productos (marca,color,medida,espesor,precio,notas) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
        return $result=mysqli_query($conexion,$sql);
    }
}
?>