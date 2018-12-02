<?php
/**
 * Created by PhpStorm.
 * User: movil
 * Date: 16/10/2018
 * Time: 19:05
 */

require_once 'dbconfig.php';

$all= "SELECT * FROM tbl_users"; // all
$xID='SELECT userName, userProfession, userPic FROM tbl_users WHERE userID =:uid'; //id
$del='DELETE FROM tbl_users WHERE userID =:uid';  // d
$Up='UPDATE tbl_users 
              SET userName=:uname, 
               userProfession=:ujob, 
               userPic=:upic 
               WHERE userID=:uid' ;

$In='INSERT INTO tbl_users(userName,userProfession,userPic) VALUES(:uname, :ujob, :upic)';

if(isset($_POST['ID'])) {
     $ID= (int) $_POST['ID'] ;

     // Emparejo los campos
    $username =(isset($_POST["user_name"]))? $_POST['user_name']:" ";// user name
    $userjob = (isset($_POST["userjob"]))? strtoupper( $_POST['userjob']) :" ";// user email


    if($ID>0){
        $stmt = $DB_con->prepare($Up);
        $stmt->bindParam(':uid',$ID);
    }else{
        $stmt = $DB_con->prepare($In);
    }

    $stmt->bindParam(':uname',$username);
    $stmt->bindParam(':ujob',$userjob);
    $stmt->bindParam(':upic',$userpic);

    $stmt->execute();

}





// Listar

    if(isset($_GET['all'])){

        $query =$all;

        $stmt = $DBcon->prepare($query);
        $stmt->execute();
        $userData = array();

        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $userData['AllUsers'][] = $row;
        }
        echo json_encode($userData);
    }


// Por ID

    if(isset($_GET['id']) && !empty($_GET['id'])){

        $id = $_GET['id'];
        $stmt_edit = $DB_con->prepare($xID);
        $stmt_edit->execute(array(':uid'=>$id));
        $Data = array();

        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $Data['Data'][] = $row;
        }

        echo json_encode($Data);
    }

// Detele

    if(isset($_GET['d'])){

        $stmt_delete = $DB_con->prepare($del);
        $stmt_delete->bindParam(':uid',$_GET['d']);
        $stmt_delete->execute();

    }

/* ********************************************************* */


?>
