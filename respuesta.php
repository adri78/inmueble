
<?php
/*
?>
<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MAINETTI Propiedades</title>
    <style>
        body{
            text-align: center;
            background: #b2b2b2;
        }
        a{
            text-decoration: none;
            background: #ff9109;
            padding: 20px 35px;
        }
        h2{
            margin-top: 2em;
            font-size: 2em;
        }
        img{
            height: 12em;
            padding: 3em auto auto 2em ;
            box-shadow: 7px 10px #0b0b0b;
        }
        </style>
</head>
<body>
<img src="img\logo\logo2.jpg" alt="Mainetti Propiedes" id="LogoJPG">

*/

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );


$Nombre=(isset($_POST['Nombre']))? $_POST['Nombre']: "Clienta Anonimo";
$Email=(isset($_POST['Email']))? $_POST['Email']:"NO";
$Asunto=(isset($_POST['Asunto']))? $_POST['Asunto']:"-";
$Dudas=(isset($_POST['Dudas']))? $_POST['Dudas']:"";
$Codigo=(isset($_POST['Codigo']))? $_POST['Codigo']:"NO";
$codi=(isset($_POST['codi']))? $_POST['codi']:"NO";

$MiEmail="adri78@gmail.com";


$MSG="El Sr/a:  ".$Nombre ." contacto :". $Email." envio una consulta de la proiedad CODIGO: ".$Codigo . " Sobre ".$Asunto ." <br> ". $Dudas ." <hr>";

$headers="";

//$headers = "MIME-Version: 1.0\r\n";
//$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";


/*
$mail = $Email;
//Titulo
$titulo = $Asunto ."// Cod:".$Codigo;
//cabecera

//dirección del remitente
$headers .= "From: Duda desde la web ".$Email ."\r\n";
//Enviamos el mensaje a tu_dirección_email
$bool = mail($MiEmail,$titulo,$mail,$headers);

*/




    $from = $Email;
    $to = $MiEmail;
    $subject = $Asunto ."// Cod:".$Codigo;
    $message = $MSG;
    $headers .= "From:" . $from;
    $bool =mail($to,$subject,$message, $headers);



if($bool){
    echo "Ya enviamos tus consulta, pronto nos comunicaremos con usted  ";
}else{
    echo "Error en el envio de mensaje, trate mas tarde o via telefonica ";
}
 //echo " <br> <br> <h3> <a href='index.php'> Volver  </a></h3>"

/*
</body>
</html>
*/

?>

