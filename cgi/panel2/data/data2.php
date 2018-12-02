<?php

/**
 * Created by PhpStorm.
 * User: movil
 * Date: 7/9/2018
 * Time: 08:47
 */

include('../job/view2.php');

$id="";
$sql="";
$mysqli="";
$metodo = $_SERVER["REQUEST_METHOD"]; 
$ruta = $_SERVER["REQUEST_URI"];



include('../job/view.php');

$datos = json_decode(file_get_contents("php://input"));


switch ($metodo) {
    case 'GET':
        switch ($ruta) {
            case '/panel/Panel/Data/data2.php/ALL': /*Todos los usurios.*/
                $result = $mysqli->query("SELECT idu as 'id',`Real`as 'Nreal',U as 'Us', IF(N=1,'ADMIN','USER') as 'Nivel' from t_ver;");
                while ($r = $result->fetch_assoc()) {
                    $rawdata[] = $r;
                }
                echo json_encode($rawdata);
 
                mysqli_close($mysqli);
               // echo json_encode($rawdata);
                break;


            default:   // Busca por ficha
                if (isset($_GET['F'])) {

                    $sql = "SELECT idu as 'id',`Real`as 'Nreal',U as 'Us', N as 'Nivel' from t_ver WHERE idu='" . $_GET['F'] . "';";
                    $result = $mysqli->query( $sql);

                    while ($r = $result->fetch_assoc()) {
                        $rawdata[] = $r;
                    }
                    echo json_encode($rawdata);

                    mysqli_close($mysqli);
                };
                break;
        }
        break;
    case 'POST':
        switch ($ruta) {
            case '/Panel/Data/data2.php/User':
                $ID= $datos->ID;
                $Us = $datos->Us;
                $Nivel= $datos->Nivel;
                $Nreal  = $datos->Nreal;

                $Us =  substr($Us, 0, 8); 
                $Nreal =  substr($Nreal, 0, 30);
                $ID = substr($ID, 0, 8); 

                if ($ID > 0) {
                    $sql = "UPDATE `t_ver` SET `U`='" . $Us . "',`N`='" . $Nivel . "',`Real`='" . $Nreal . "' WHERE `idu`=" . $ID . ";";
                } else {
                    $sql = "INSERT INTO `t_ver`(`U`, `P`, `N`, `Real`) VALUES ('" . $Us . "','" . $P . "','" . $Nivel . "','" . $Nreal . "');";
                }

                $result = $mysqli->query($sql);
                $result->fetch_assoc();
 
                echo json_encode("OK");
                break;
   /*         case 'venta':
                echo json_encode("Guardamos una venta");
                break;*/
        }
        break;
    case 'PUT':
        switch ($ruta) {
            case '/Panel/Data/data2.php/User':
                $ID = $datos->ID;
                $CC = $datos->C;
                $ID = substr($ID, 0, 8);
                $CC = substr($CC, 0, 8);

                $CC = sha1($CC); 
                $sql= "UPDATE `t_ver` SET `P` ='" . $CC . "' WHERE `idu`='" . $ID . "';";
                $result = $mysqli->query($sql);
                echo json_encode("OK");
                break;
          
        }
        break;
    case 'DELETE':
       
        if (isset($_GET['D'])) {
                $sql = "DELETE FROM `t_ver` WHERE `idu`='" . $_GET['D']  . "' ;";
                $result = $mysqli->query($sql);
                echo json_encode("Borrado  "  .$sql );
        }
        break;
}
?>
