<?php include('../job/view2.php'); ?>
<?php

if(isset($_POST["Grabar"])) {

    include_once ('../job/view.php');

    if (isset($_POST["Titulo"])) {
        $Titulo = htmlentities($_POST["Titulo"]);
    }
    if (isset($_POST["Detalle"])) {
        $Detalle = htmlentities($_POST["Detalle"]);
    }
    if (isset($_POST["Fondo"])) {
        $Fondo = $_POST["Fondo"];
    }else{
        $Fondo ="img/sin_imagen.jpg";
    }

    $sql="UPDATE `t_diseno` SET `Fondo`='".$Fondo."',`Titulo`='".$Titulo."',`Texto`='".$Detalle."' ";
    $segmento = mysqli_query($mysqli,$sql);

    mysqli_close($mysqli);
}


?>
