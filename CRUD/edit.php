<?php
if(!isset($_SESSION)){
    session_start();
}

$absPath = $_SESSION["absPath"];

    if (isset($_POST["btn-edit"])) {
        $newNameFolder = $_POST["edit"];
        $rutaAbsoluta = $_SESSION["absPath"];
        $directorio = $_SESSION["altPath"] ;

        rename($rutaAbsoluta, './root/'.$newNameFolder);
    }



?>
