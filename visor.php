<?php

include 'cgi/panel2/data/dbconfig.php';

$all= "SELECT `idPro`, CASE `Alqui` WHEN 'A' THEN 'ALQUILER' WHEN 'V' THEN 'VENTA' WHEN 'X' THEN 'ALQ/VEN' END AS 'Espara'";
$all = $all . ",`Banios`,`Mascotas`,`Credi`,`CodPro`, `Credi`,`FAlta`,`Cocheras`,IF( `Dolar` =1 ,'Pesos' , 'Dolares') AS Moneda, `Domicilio`,";
$all = $all ."`Habita`, `M2`, `MC2`,`Destacar`,`Portada`,(SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`)as 'Barrio',`ZonaID`,";
$all = $all ."(SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) AS TIPO ,`Valor`  FROM `t_pro`"; // all

if(isset($_GET['all'])){
    $query =$all." WHERE `Estado`=1 ";
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $userData = array();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $userData['ALLData'][] = $row;
    }
    echo json_encode($userData);
}

if(isset($_GET['A'])){
    $query =$all." WHERE ((`Estado`=1 ) and (`Alqui` <> 'V'))";
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $userData = array();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $userData['ALLData'][] = $row;
    }
    echo json_encode($userData);
    //echo $query;
}

if(isset($_GET['V'])){
    $query =$all." WHERE ((`Estado`=1 ) and (`Alqui` <> 'A'))";
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $userData = array();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $userData['ALLData'][] = $row;
    }
    echo json_encode($userData);
}

?>