<?php include_once('view2.php') ?>
<?php
/**
 * Created by PhpStorm.
 * User: movil
 * Date: 16/10/2018
 * Time: 19:05
 */

include 'dbconfig.php';

$all= "SELECT `idz`, `zona` FROM `t_zonas` ORDER BY `zona` ASC"; // all
$xID="SELECT `idz`, `zona` FROM `t_zonas` WHERE `idz`=?"; //id
$del='DELETE FROM `t_zonas` WHERE `idz`=?';  // d
$Up='UPDATE `t_zonas` SET `zona`=? WHERE `idz`=?' ;

$In="INSERT INTO t_zonas (zona) VALUES (?)";

if(isset($_POST['ID'])) {
     $ID= (int) $_POST['ID'] ;

     // Emparejo los campos  Dato:Data,id:Id};
    $Data1 =(isset($_POST["Dato"]))? strtoupper( $_POST['Dato']):"No definida";// user name
    $userjob = (isset($_POST["userjob"]))? strtoupper( $_POST['userjob']) :" ";// user email


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
