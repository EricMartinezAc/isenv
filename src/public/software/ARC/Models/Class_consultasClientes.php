<?php
require_once ('Class_conexion.php');
class Class_ConsultasClientes{
    
    public function CargarClientes()
    {
        # code...
        $rows = null;
        $modelConn = new Conexion();
        $conexion = $modelConn->get_conexion();
        $sql = "SELECT nombre FROM clientes";
        $statement = $conexion->query($sql);
        $cantColumnas = $statement->rowCount();

        for ($i=0; $i <= $cantColumnas; $i++) { 
            # code...
            $row[$i] = $statement->fetch(PDO::FETCH_COLUMN);
        };
        $rows = $row;
        $statement=null;
        return $rows;
    }
    
}
?>