<?php
//pasta raiz por url
$applicationFolder = "app";
define("ROOTDIRECTORYURL", "{$_SERVER['HTTP_HOST']}/{$applicationFolder}");
//pasta raiz relativa ao server
$rootDirectory = "decoreba";
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define("ROOTDIRECTORYSERVER", "{$_SERVER['DOCUMENT_ROOT']}/{$rootDirectory}/{$applicationFolder}");
} else {
    define("ROOTDIRECTORYSERVER", "{$_SERVER['DOCUMENT_ROOT']}/{$rootDirectory}/{$applicationFolder}");
}
//diretório controllers
define("DIRECTORYCONTROLLERS","{$applicationFolder}/controllers/");
//diretório models
define("DIRECTORYMODELS", "{$applicationFolder}/models/");
//diretório utils
define("DIRECTORYUTILS", "{$applicationFolder}/utils/");
//diretório views
define("DIRECTORYVIEWS", "{$applicationFolder}/views/");
?>