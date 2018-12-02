<?php

//session_start();
// error_reporting(0);
 //date_default_timezone_set('America/Argentina/Buenos_Aires');
// $HOY = date("Y-m-d H:i:s");

include_once ('view.php');

$modo="";
$sql="";

if(isset($_GET["M"])){ $modo=$_GET["M"]; }
if(isset($_GET["ID"])){ $ID=$_GET["ID"]; }
if(isset($_GET["L"])){ $Local=$_GET["L"]; }

if(isset($_POST["M"])){ $modo=$_POST["M"];  }
if(isset($_POST["ID"])){ $ID=$_POST["ID"];  }
if(isset($_POST["titulo"])){ $titulo=strtoupper ( trim ( $_POST["titulo"])); }
if(isset($_POST["detalle"])){ $detalle= htmlentities( trim ( $_POST["detalle"])); }
if(isset($_POST["link"])){ $Link=trim ($_POST["link"]); }
if(isset($_POST["imagen"])){ $imagen= $_POST["imagen"]; }  // ../../../



//et data={M:2,ID:IDE,titulo:Titulo,detalle:contenido,link:link,imagen:imag};

if ($modo==1) { // ver articulo
    $sql= "SELECT `idini`, `Logo`, `Portada`, `Texto` FROM `t_pagini` WHERE `idini`=".$ID.";";
    $segmento = mysqli_query($mysqli,$sql);
    while ($row = mysqli_fetch_array($segmento)){
        $ID=$row['idini'] ;
        $Titulo= $row["Portada"];
        $detalle=html_entity_decode( $row["Texto"]);
        $imagen=$row["Logo"];

        print "$ID|$Titulo|$detalle|$imagen";
    }
    mysqli_close($mysqli);
}// Fin Ver Articulo


if ($modo==2) { // ver articulo
    if($ID<1){ // Nuevo
        $sql="INSERT INTO `t_pagini`(`Logo`, `Portada`, `Texto`) VALUES ('".$imagen ."','".$titulo."','".$detalle."' );";
    }else{// Actulizar
        $sql = "UPDATE `t_pagini` SET `Logo`='" .$imagen  . "',`Texto`='" . $detalle . "',`Portada`='" . $titulo . "'  WHERE `idini`=" . $ID . " ;";
    }//fin grabar art
 // print $sql;
    $segmento = mysqli_query($mysqli,$sql);
    mysqli_close($mysqli);
}

if ($modo==3) { // borra VUSER
    $sql="DELETE FROM `t_pagini` WHERE `idini`='".$ID."';";
    $segmento = mysqli_query($mysqli,$sql);
    mysqli_close($mysqli);
}// Fin Ver Articulo





?>