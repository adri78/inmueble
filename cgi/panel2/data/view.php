 
<?php
$Server= "localhost";
$User= "root";
$Pass ="";
$DBase="burzaco";
$mysqli = new mysqli($Server, $User,$Pass ,$DBase);

if (mysqli_connect_errno()) {
   echo  json_encode('Conexion Fallida : ', mysqli_connect_error());
    exit();
}
mysqli_set_charset($mysqli, "utf8");

?>
