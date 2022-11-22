<?php 
// Include the database config file 
include("class/class_inmueble_dal.php");
$obj = new inmueble_dal(); 
 
    // Fetch city data based on the specific state
    //echo '<option value="">Ciudad no disponible</option>';
    $nombreEstado = $_POST['nomEstado'];
    $sql = "SELECT cve_ent FROM entidad WHERE nom_ent ='$nombreEstado';";
    $obj->set_sql($sql);
    $obj->db_conn->set_charset("utf8");
    $resultado1 = mysqli_query($obj->db_conn,$obj->db_query) or die(mysqli_error($obj->db_conn));
    $row1 = mysqli_fetch_assoc($resultado1);
    $cve_ent = $row1['cve_ent'];
    $query = "SELECT nom_mun FROM municipio WHERE cve_ent ='$cve_ent' ORDER BY nom_mun ASC"; 
    $obj->set_sql($query);
    $obj->db_conn->set_charset("utf8");
    $result = mysqli_query($obj->db_conn,$obj->db_query) or die(mysqli_error($obj->db_conn));
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Seleccione una Ciudad</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['nom_mun'].'">'.$row['nom_mun'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Ciudad no disponible</option>'; 
    } 
?>