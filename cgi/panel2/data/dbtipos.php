<?php include_once('view2.php') ?>
<?php
/**
 * Created by PhpStorm.
 * User: movil
 * Date: 16/10/2018
 * Time: 19:05
 */

include 'dbconfig.php';

$all= "SELECT `idt`, `tipo` FROM `t_tipo` ORDER BY `tipo` ASC;"; // all
$xID="SELECT `idt`, `tipo` FROM `t_tipo` WHERE `idt`=?"; //id
$del='DELETE FROM `t_tipo` WHERE `idt`=?';  // d
$Up='UPDATE `t_tipo` SET `tipo`=? WHERE `idt`=?' ;
$In="INSERT INTO `t_tipo`(`tipo`) VALUES (?)";

if(isset($_POST['ID'])) {
    $ID= (int) $_POST['ID'] ;

    $Data1 =(isset($_POST["Dato"]))? strtoupper( $_POST['Dato']):"No definida";// user name

    if($ID>0){
        $stmt = $DBcon->prepare($Up);
        $stmt->execute([$Data1, $ID]);
    }else{
        $stmt = $DBcon->prepare($In);
        $stmt->bindParam(1, $Data1);
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
