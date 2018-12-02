<?php include('../job/view2.php'); ?>
<?php

//{Grabar:2,Titulo:Titulo,id:ID,Fondo:Fondo,PAG:pag};;


 include_once ('../job/view.php');

    if (isset($_POST["Grabar"])) {
        $modo= $_POST["Grabar"];
    }
    if (isset($_POST["Titulo"])) {
        $Titulo = htmlentities($_POST["Titulo"]);
    }
    if (isset($_POST["PAG"])) {
        $PAG = htmlentities($_POST["PAG"]);
    }
    if (isset($_POST["id"])) {
        $ID = htmlentities($_POST["id"]);
    }
    if (isset($_POST["Fondo"])) {
        $Fondo = $_POST["Fondo"];
    }else{
        $Fondo ="img/sin_imagen.jpg";
    }
if($modo==2){
        if($ID>0){
            $sql="UPDATE `t_galery` SET `Imagen`='".$Fondo."',`Titulo`='".$Titulo."',`pag`='".$PAG."' WHERE`idIma`='".$ID."' ;" ;

        }else{
            $sql="INSERT INTO `t_galery`(`Imagen`, `Titulo`, `pag`) VALUES ('".$Fondo."','".$Titulo."','".$PAG."')";
        }
    $segmento = mysqli_query($mysqli,$sql);
}

if($modo==1){
    $sql="DELETE FROM `t_galery` WHERE `idIma`=".$ID ;
    $segmento = mysqli_query($mysqli,$sql);
}
if($modo==0){
    $sql="SELECT `idIma`, `Imagen`, `Titulo`, `pag` FROM `t_galery` WHERE `idIma`=".$ID ;
    $segmento = mysqli_query($mysqli,$sql);
    while ($row = mysqli_fetch_array($segmento)){
        $ID=$row['idIma'];
        $Imagen=$row['Imagen'];
        $Titulo=$row['Titulo'];
        $Pag=$row['pag'];
    }
    print "$ID|$Titulo|$Imagen|$Pag";
}
    mysqli_close($mysqli);



?>
