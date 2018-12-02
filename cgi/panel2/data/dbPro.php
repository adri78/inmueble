<?php include_once('view2.php') ?>
<?php

include 'dbconfig.php';

//$all= "SELECT `idPro`, `Alqui`, `Banios`, `CodPro`, `Cocheras`, `Credi`, `Destacar`, `Dolar`, `Domicilio`, `DuenioID`, `Estado`, `FAlta`, `Gmap`, `Galeria`, `Habita`, `M2`, `MC2`, `MT`, `Mascotas`, `Plano`, `Portada`, `Descript`, `TipoID`, `Valor`, `ZonaID`,`Comodidades` FROM `t_pro` ORDER BY `Estado`,`TipoID` ASC;"; // all

$all= "SELECT `idPro`, CASE `Alqui` WHEN 'A' THEN 'ALQUILER' WHEN 'V' THEN 'VENTA' WHEN 'X' THEN 'ALQ/VEN' END AS 'Espara'";
$all = $all . ",`Banios`, `CodPro`, `Comodidades`,`Cocheras`,IF( `Dolar` =1 ,'Pesos' , 'Dolares') AS Moneda, `Domicilio`,";
$all = $all ."(SELECT `contacto` FROM `t_duenio` WHERE `iddu`=`DuenioID`) AS DUENIO , `Estado`,`Habita`, `M2`, `MC2`,`Portada`,";
$all = $all ."(SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) AS TIPO ,`Valor`,(SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`)as 'Barrio' FROM `t_pro` ORDER BY `Estado`,`TipoID` ASC;"; // all


$xID="SELECT `idPro`, `Alqui`, `Banios`, `CodPro`, `Cocheras`, `Credi`, `Destacar`, `Dolar`, `Domicilio`, `DuenioID`, `Estado`, `FAlta`, `Gmap`, `Galeria`, `Habita`, `M2`, `MC2`, `MT`, `Mascotas`, `Plano`, `Portada`, `Descript`, `TipoID`, `Valor`, `ZonaID`,`Comodidades` FROM `t_pro` WHERE `idPro` =?;"; //id
$del='DELETE FROM `t_pro` WHERE `idPro`=?';  // d
$Up="UPDATE `t_pro` SET  `Alqui`=?,`Banios`=?,`CodPro`=?,`Cocheras`=?,`Credi`=?,`Destacar`=?,`Dolar`=?,`Domicilio`=?,`DuenioID`=?,`Estado`=?,`FAlta`=?,`Gmap`=?,`Galeria`=?,`Habita`=?,`M2`=?,`MC2`=?,`MT`=?,`Mascotas`=?,`Plano`=?,`Portada`=?,`Descript`=?,`TipoID`=?,`Valor`=?,`ZonaID`=?,`Comodidades`=?  WHERE `idPro`=?" ;
$Supender="UPDATE `t_pro` SET `Estado`=? WHERE `idPro`=?" ;
$In="INSERT INTO `t_pro`(`Alqui`, `Banios`, `CodPro`, `Cocheras`, `Credi`, `Destacar`, `Dolar`, `Domicilio`, `DuenioID`, `Estado`, `FAlta`, `Gmap`, `Galeria`, `Habita`, `M2`, `MC2`, `MT`, `Mascotas`, `Plano`, `Portada`, `Descript`, `TipoID`, `Valor`, `ZonaID`,`Comodidades`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$Ultimo="SELECT (MAX(`idPro`)+1) AS Ultimo FROM `t_pro` LIMIT 1;";


if(isset($_POST['IdPro'])) {
    $ID= (int) $_POST['IdPro'] ;

    $Alqui =(isset($_POST["Alqui"]))? $_POST['Alqui']:"A";// Es
    $Banios =(isset($_POST["Banios"]))? (int) $_POST['Banios']:"0";
    $Cocheras =(isset($_POST["Cocheras"]))? (int) $_POST['Cocheras']:"1";
    $Cre =(isset($_POST["Cre"]))? $_POST['Cre']:"false";
    $Codigo =(isset($_POST["Codigo"]))? $_POST['Codigo']:"Pedir";
    $Destacados=(isset($_POST["Destacados"]))? $_POST['Destacados']:"0";
    $Dolar =(isset($_POST["Dolar"]))? $_POST['Dolar']:"1";
    $Domicilio =(isset($_POST["Domicilio"]))? strtoupper( $_POST['Domicilio']):"No definido";// contacto
    $DuenioID =(isset($_POST["Duenio"]))? $_POST['Duenio']:"1";
    $Estado =(isset($_POST["Estado"]))? $_POST['Estado']:"1";
    $FA=date("Ymd");
    $GMap =(isset($_POST["GMap"]))? $_POST['GMap']:"Sin_Mapa.html";
    $Galeria =(isset($_POST["Galeria"]))? $_POST['Galeria']:"";
    $Habitaciones =(isset($_POST["Habitaciones"]))? $_POST['Habitaciones']:"0";
    $M2 = (isset($_POST["MTotales"]))?(int) $_POST['MTotales']: 1 ; ///(isset($_POST["M"]))?(int) $_POST['M']: 1 ;
    $Mc =(isset($_POST["MCubiertos"]))?(int) $_POST['MCubiertos']: 1 ;
    $Mt =(isset($_POST["MTotales"]))?(int) $_POST['MTotales']: 1 ;
    $Mascota =(isset($_POST["Mascota"]))? $_POST['Mascota']:"0";
    $Plano =(isset($_POST["Plano"]))? $_POST['Plano']:"galery/sin_imagen.jpg";
    $Portada =(isset($_POST["Portada"]))? $_POST['Portada']:"galery/sin_imagen.jpg";
    $Otros =(isset($_POST["Otros"]))? $_POST['Otros']:"";
    $Texto =(isset($_POST["Texto"]))? $_POST['Texto']:"";
    $TipoId =(isset($_POST["Tipo"]))? $_POST['Tipo']:"1";
    $Valor =(isset($_POST["Valor"]))? $_POST['Valor']:"0.00";
    $ZonaId =(isset($_POST["Zona"]))? $_POST['Zona']:"1";

    if($ID>0){
        echo $Alqui."-".$Banios."-".$Codigo."-".$Cocheras."-".$Cre."-".$Destacados."-".$Dolar."-".$Domicilio."-".$DuenioID."-".$Estado."-".$FA."-".$GMap."-".$Galeria."-".$Habitaciones."-".$M2."-".$Mc."-".$Mt."-".$Mascota."-".$Plano."-".$Portada."-".$Texto."-".$TipoId."-".$Valor."-".$ZonaId."-".$Otros."-".$ID ;
        $stmt = $DBcon->prepare($Up);
        $stmt->execute([$Alqui,$Banios,$Codigo,$Cocheras,$Cre,$Destacados,$Dolar,$Domicilio,$DuenioID,$Estado,$FA,$GMap,$Galeria,$Habitaciones,$M2,$Mc,$Mt,$Mascota,$Plano,$Portada,$Texto,$TipoId,$Valor,$ZonaId,$Otros,$ID]);
    }else{
        $stmt = $DBcon->prepare($In);
        echo $Alqui."-".$Banios."-".$Codigo."-".$Cocheras."-".$Cre."-".$Destacados."-".$Dolar."-".$Domicilio."-".$DuenioID."-".$Estado."-".$FA."-".$GMap."-".$Galeria."-".$Habitaciones."-".$M2."-".$Mc."-".$Mt."-".$Mascota."-".$Plano."-".$Portada."-".$Texto."-".$TipoId."-".$Valor."-".$ZonaId."-".$Otros."-".$ID ;

        $stmt->bindParam(1, $Alqui);
        $stmt->bindParam(2, $Banios);
        $stmt->bindParam(3, $Codigo);
        $stmt->bindParam(4, $Cocheras);
        $stmt->bindParam(5, $Cre);
        $stmt->bindParam(6, $Destacados);
        $stmt->bindParam(7, $Dolar);
        $stmt->bindParam(8, $Domicilio);
        $stmt->bindParam(9, $DuenioID);
        $stmt->bindParam(10, $Estado);
        $stmt->bindParam(11, $FA);
        $stmt->bindParam(12, $GMap);
        $stmt->bindParam(13, $Galeria);
        $stmt->bindParam(14, $Habitaciones);
        $stmt->bindParam(15, $M2);
        $stmt->bindParam(16, $Mc);
        $stmt->bindParam(17, $Mt);
        $stmt->bindParam(18, $Mascota);
        $stmt->bindParam(19, $Plano);
        $stmt->bindParam(20, $Portada);
        $stmt->bindParam(21, $Texto);
        $stmt->bindParam(22, $TipoId );
        $stmt->bindParam(23, $Valor);
        $stmt->bindParam(24, $ZonaId);
        $stmt->bindParam(25,  $Otros);

        $stmt->execute();
    }
}

// Listar

if(isset($_GET['all'])){
    $query =$all;
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $userData = array();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $userData['ALLData'][] = $row;
    }
    echo json_encode($userData);
}


// Por ID

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id =$_GET['id'];
    $stmt = $DBcon->prepare($xID);
    $stmt->execute([$id]);

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $Data['Data'][] = $row;
    }
    echo json_encode($Data);
}

// Detele

if(isset($_GET['d'])){
    $id =$_GET['d'];
    $stmt_delete = $DBcon->prepare($del);
    $stmt_delete->execute([$id]);
}

if(isset($_GET['E']) && !empty($_GET['E'])){
    $id =$_GET['id'];
    $E=$_GET['E'];
    $stmt = $DBcon->prepare($xID);
    $stmt->execute([$id]);

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $Data['Data'][] = $row;
    }
    echo json_encode($Data);
}

if(isset($_GET['U'])){

    $stmt = $DBcon->prepare($Ultimo);
    $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $Data['Data'][] = $row;
    }
    echo json_encode($Data);
}


/* ********************************************************* */
?>

