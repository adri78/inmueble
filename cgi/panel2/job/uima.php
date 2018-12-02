<?php //require_once('../job/view2.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: movil
 * Date: 17/9/2018
 * Time: 20:48
 */
//$return = Array('ok'=>TRUE);
error_reporting(0);

$upload_folder ="../../../galery";

$nombre_archivo = $_FILES['archivo']['name'];

$tipo_archivo = $_FILES['archivo']['type'];

$tamano_archivo = $_FILES['archivo']['size'];

$tmp_archivo = $_FILES['archivo']['tmp_name'];

$final= "/".time().".png";

$archivador = $upload_folder  . $final  ;

$final2="galery".$final;

$return = Array('final'=>$final2);

if (!move_uploaded_file($tmp_archivo, $archivador)) {

    $return = Array('ok' => FALSE, 'msg' => "Ocurrio un error al subir el archivo. No pudo guardarse.", 'status' => 'error');

}

echo json_encode($return);
   
