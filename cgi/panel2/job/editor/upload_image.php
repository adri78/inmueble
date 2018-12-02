<?php
/**
 * Created by PhpStorm.
 * User: Server64
 * Date: 26/07/2018
 * Time: 17:31
 */

// Include the editor SDK.
//require 'PATH_TO_FROALA_SDK/lib/froala_editor.php';

// Store the image.
try {
    $response = FroalaEditor_Image::upload('/uploads/');
    echo stripslashes(json_encode($response));
}
catch (Exception $e) {
    http_response_code(404);
}

?>