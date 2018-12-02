<?php
// $imagen = optimizar_imagen( $_FILES['imagen']['tmp_name'], $destino, 40 );  baja calidad.


function optimizar_imagen($origen, $destino, $calidad) {
 
 $info = getimagesize($origen);

 if ($info['mime'] == 'image/jpeg'){
$imagen = imagecreatefromjpeg($origen);
 }

else if ($info['mime'] == 'image/gif'){  // imagegif ( resource $image [, mixed $to ] ) 
$imagen = imagecreatefromgif($origen);
}

else if ($info['mime'] == 'image/png'){  // imagepng ( resource $image [, mixed $to [, int $quality [, int $filters ]]] )

$imagen = imagecreatefrompng($origen);
}

imagejpeg($imagen, $destino, $calidad);

return $destino;

}




/********************************************************************************/

?>

<?php
 function Subir_Imagen($Input, $Ruta, $Foto, $Miniatura, $AnchoMax, $AltoMax){
    $Respuesta = array();
    $NombreOriginal  = basename($_FILES[$Input]['name']);
    $Extension = pathinfo($NombreOriginal, PATHINFO_EXTENSION);

    if ($Foto != '') { //Si el nombre esta vacio uso el orginal
        $Nombre = $Foto.'.'.$Extension;
    } else {
        $Nombre = $_FILES[$Input]['name'];
    }

//Ruta de los archivos
    $ImagenOriginal = $Ruta.basename($Nombre);
    $ImagenMini = $Ruta."Mini_".basename($Nombre);

//Subo la imagen
    if (move_uploaded_file($_FILES[$Input]['tmp_name'],$ImagenOriginal)) {
        //redimensiono la imagen si es demasiado grande.
        if ($Extension == "jpg" || $Extension == "jpeg") { $ImagenGrande = imagecreatefromjpeg($ImagenOriginal);
            } elseif ($Extension == "png") { $ImagenGrande = imagecreatefrompng($ImagenOriginal);
            } elseif ($Extension == "gif") { $ImagenGrande = imagecreatefromgif($ImagenOriginal);
            }

        $x = imagesx($ImagenGrande);
        $y = imagesy($ImagenGrande);

        if($x <= $AnchoMax && $y <= $AltoMax){
            $Respuesta['Script'] .= "Alerta('La imagen ya estaba optimizada.','success',3000);";
            return json_encode($Respuesta);
        }

        if ($x >= $y) {
            $nuevax = $AnchoMax;
            $nuevay = $nuevax * $y / $x;
            $Mininuevax = 400;
            $Mininuevay = $Mininuevax * $y / $x;
        } else {
            $nuevay = $AltoMax;
            $nuevax = $x / $y * $nuevay;
            $Mininuevay = 400;
            $Mininuevax = $x / $y * $Mininuevay;
        }

        $ImagenNueva = imagecreatetruecolor($nuevax, $nuevay);
        imagecopyresized($ImagenNueva, $ImagenGrande, 0, 0, 0, 0, floor($nuevax), floor($nuevay), $x, $y);

        if ($Extension == "jpg" || $Extension == "jpeg") { imagejpeg($ImagenNueva,$ImagenOriginal,100);
            } elseif ($Extension == "png") { imagepng($ImagenNueva,$ImagenOriginal,100);
            } elseif ($Extension == "gif") { imagegif($ImagenNueva,$ImagenOriginal,100); }

    if($Miniatura == "SI") { //creo la miniatura
            $Miniatura = imagecreatetruecolor($Mininuevax, $Mininuevay);
            imagecopyresized($Miniatura, $ImagenGrande, 0, 0, 0, 0, floor($Mininuevax), floor($Mininuevay), $x, $y);

        if ($Extension == "jpg" || $Extension == "jpeg") { imagejpeg($Miniatura,$ImagenMini,100);
            } elseif ($Extension == "png") { imagepng($Miniatura,$ImagenMini,100);
            } elseif ($Extension == "gif") { imagegif($Miniatura,$ImagenMini,100); }
            imagedestroy($Miniatura);
    }

    } else {
        $Respuesta['Script'] .= "Alerta(Ocurrió un error al subir la imagen.','error',3000);";
    }
//imagedestroy($ImagenRedimensionada);
        $Respuesta['Script'] .= "Alerta('La imagen se ha optimizado correctamente.','success',3000);";
    return json_encode($Respuesta);
}
?>