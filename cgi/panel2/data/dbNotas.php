<?php include_once('view2.php') ?>
<?php
/**
 * Created by PhpStorm.
 * User: movil
 * Date: 16/10/2018
 * Time: 19:05
 */

include 'dbconfig.php';

$all= "SELECT `idNota`, `Imagen`, `Fecha`, `Titulo`, `Nota`, `Tag` FROM `t_notas` ORDER BY `Fecha` DESC"; // all
$xID="SELECT `idNota`, `Imagen`, `Fecha`, `Titulo`, `Nota`, `Tag` FROM `t_notas` WHERE `idNota`=?"; //id
$del='DELETE FROM `t_notas` WHERE `idNota`=?';  // d
$Up='UPDATE `t_notas` SET `Imagen`=?,`Titulo`=?,`Nota`=?,`Tag`=? WHERE `idNota`=?' ;

$In="INSERT INTO `t_notas`( `Imagen`,  `Titulo`, `Nota`, `Tag`) VALUES (?,?,?,?)";

$hoy=date("Y-m-d | h:i:sa");

if(isset($_POST['ID'])) {
     $ID= (int) $_POST['ID'] ;

     // Emparejo los campos  Dato:Data,id:Id};
    $Imagen =(isset($_POST["Imagen"]))? $_POST['Imagen']:"No definida";
    $Titulo= (isset($_POST["Titulo"]))? strtoupper( $_POST['Titulo']) :" Texto de pruebas ";
    $Nota=(isset($_POST["Nota"]))? $_POST['Nota'] :"No definida";
    $Tag= (isset($_POST["Tag"]))?  $_POST['Tag']:" General ";



    if($ID>0){
        $stmt = $DBcon->prepare($Up);
        $stmt->execute([ $Imagen , $Titulo,$Nota,$Tag, $ID]);
    }else{
        $stmt = $DBcon->prepare($In);
        $stmt->bindParam(1, $Imagen);
        $stmt->bindParam(2, $Titulo);
        $stmt->bindParam(3, $Nota);
        $stmt->bindParam(4, $Tag);

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

/* ********************************************************* */
?>
