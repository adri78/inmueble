<?php

$max_ancho = 1280;
$max_alto = 900;
$Calidad = 70;


$origen = "ima/ima1.jpg";
echo "<img src='" . $origen . "?456' >";


$info = new SplFileInfo($origen);
var_dump($info->getExtension());
$es= mime_content_type($origen);


echo "<br> $es";

$destino = "ima/nuevaimagen.jpg";
$destino_temporal = tempnam("tmp/", "tmp");




if (redimensionarImagen($origen, $destino_temporal, $max_alto , $max_ancho, $Calidad=100)) {
    // guardamos la imagen redimensionada
    $fp = fopen($destino, "w");
    fputs($fp, fread(fopen($destino_temporal, "r"), filesize($destino_temporal)));
    fclose($fp);

    // mostramos la imagen
    echo "<img src='ima/nuevaimagen.jpg?123'>";
} else {
    // la imagen original es mas pequeña que el tamaño destino
    //  echo "<img src='ima/ima1.jpg'>";

    echo " <h1> Fallo </h1>";

    if ($es == 'image/png' || $es == 'image/jpeg' || $es == 'image/gif') {


        //Redimensionar
        $rtOriginal = $origen;

        if ($es == 'image/jpeg') {
            $original = imagecreatefromjpeg($rtOriginal);
        } else if ($es == 'image/png') {
            $original = imagecreatefrompng($rtOriginal);
        } else if ($es == 'image/gif') {
            $original = imagecreatefromgif($rtOriginal);
        }

        list($ancho, $alto) = getimagesize($rtOriginal);

        $lienzo = imagecreatetruecolor($max_ancho, $max_alto);


        imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $max_alto, $max_ancho, $ancho, $alto);

        if ($es == 'image/jpeg') {
            imagejpeg($lienzo, $destino);
        } else if ($es == 'image/png') {
            imagepng($lienzo, $destino);
        } else if ($es == 'image/gif') {
            imagegif($lienzo, $destino);
        }


    }
}
    /**
     * Funcion para redimensionar imagenes
     *
     * @param string $origin Imagen origen en el disco duro ($_FILES["image1"]["tmp_name"])
     * @param string $destino Imagen destino en el disco duro ($destino=tempnam("tmp/","tmp");)
     * @param integer $newWidth Anchura máxima de la nueva imagen
     * @param integer $newHeight Altura máxima de la nueva imagen
     * @param integer $jpgQuality (opcional) Calidad para la imagen jpg
     * @return boolean true = Se ha redimensionada|false = La imagen es mas pequeña que el nuevo tamaño
     */


    function redimensionarImagen($origin, $destino, $newWidth = 1280, $newHeight = 900, $jpgQuality = 90)
    {
        // getimagesize devuelve un array con: anchura,altura,tipo,cadena de
        // texto con el valor correcto height="yyy" width="xxx"
        $datos = getimagesize($origin);

        // comprobamos que la imagen sea superior a los tamaños de la nueva imagen
        if ($datos[0] > $newWidth || $datos[1] > $newHeight) {


            // creamos una nueva imagen desde el original dependiendo del tipo
            if ($datos[2] == 1)
                $img = imagecreatefromgif($origin);
            if ($datos[2] == 2)
                $img = imagecreatefromjpeg($origin);
            if ($datos[2] == 3)
                $img = imagecreatefrompng($origin);

            // Redimensionamos proporcionalmente
            if (rad2deg(atan($datos[0] / $datos[1])) > rad2deg(atan($newWidth / $newHeight))) {
                $anchura = $newWidth;
                $altura = round(($datos[1] * $newWidth) / $datos[0]);
            } else {
                $altura = $newHeight;
                $anchura = round(($datos[0] * $newHeight) / $datos[1]);
            }

            // creamos la imagen nueva
            $newImage = imagecreatetruecolor($anchura, $altura);

            // redimensiona la imagen original copiandola en la imagen
            imagecopyresampled($newImage, $img, 0, 0, 0, 0, $anchura, $altura, $datos[0], $datos[1]);

            // guardar la nueva imagen redimensionada donde indicia $destino
            if ($datos[2] == 1)
                imagegif($newImage, $destino);
            if ($datos[2] == 2)
                imagejpeg($newImage, $destino, $jpgQuality);
            if ($datos[2] == 3)
                imagepng($newImage, $destino);

            // eliminamos la imagen temporal
            imagedestroy($newImage);

            return true;
        }
        return false;
    }

