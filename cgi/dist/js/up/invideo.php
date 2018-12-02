<?php
 echo " --" . $_FILES["file"]["name"] ."// --".getcwd();
$allowedExts = array("avi", "webm", "jpg", "png", "blob");
$temp = explode(".", $_FILES["file"]["name"]);// Get filename.
$extension = end($temp);// Get extension.

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);


/*
if ((($mime == "video/mpeg")
        || ($mime == "video/x-msvideo")
        || ($mime == "video/webm")
        || ($mime == "video/3gpp")
        || ($mime == "video/ogg"))
    && in_array(strtolower($extension), $allowedExts)) {
    // Generate new random name.
*/
    $name = sha1(microtime()) . "." . $extension;
    try {
        // Save file in the uploads folder.
        move_uploaded_file($_FILES["file"]["tmp_name"], getcwd() . "/uploads/" . $name);

        // Generate response.
        $response = new StdClass;
        $response->link = "/uploads/" . ( $name) ."?007" ;

        echo stripslashes(json_encode($response));}
    catch (Exception $e) {
        http_response_code(404);
    }


//}