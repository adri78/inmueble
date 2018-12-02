<?php
/**
 * Created by PhpStorm.
 * User: Server64
 * Date: 13/11/2018
 * Time: 11:51
 */

include 'cgi/panel2/data/dbconfig.php';


$stmt = $DBcon->prepare( "SELECT `idz`, `zona` FROM `t_zonas` ORDER BY `zona` ASC");
$stmt->execute();
$Zona="<option value='0' selected > --> TODOS <--</option>";

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    $Zona=$Zona . '<option value="'.$row["idz"].'">'.$row["zona"].'</option>';

};


$stmt = $DBcon->prepare( "SELECT `idt`, `tipo` FROM `t_tipo` ORDER BY `tipo` ASC");
$stmt->execute();
$TiposA="";
$TiposV="";
$TiposX="";

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    $TiposA=$TiposA . '<option value="'.$row["tipo"].'-A">'.$row["tipo"].' - Alquiler</option>';
    $TiposV=$TiposV . '<option value="'.$row["tipo"].'-V">'.$row["tipo"].' - Venta</option>';
    $TiposX=$TiposX . '<option value="'.$row["tipo"].'-X">'.$row["tipo"].' - Opción</option>';
};




if(isset($_GET['O'])){

    $stmt = $DBcon->prepare( "SELECT `otros` FROM `t_otros` WHERE `ido` IN (". $_POST['Como'] .");");
    $stmt->execute();
    $TComodidades = array();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $TComodidades['ALLData'][] = $row;
    }
    echo json_encode($TComodidades);


};