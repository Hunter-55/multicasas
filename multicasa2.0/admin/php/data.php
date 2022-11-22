<?php

header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "multicasa");

if (mysqli_connect_errno($con))
{
    echo "Error en conectar a base de datos: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $resultado = mysqli_query($con, "SELECT * FROM inmueble");
    
    while($renglon = mysqli_fetch_array($resultado))
    {        
        $point = array("label" => $renglon['encabezado'] , "y" => $renglon['costo_inmueble']);
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>