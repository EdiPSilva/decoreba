<?php
//pasta raiz por url
$applicationFolder = "app" . DIRECTORY_SEPARATOR;
define("ROOTDIRECTORYAPP", "app". DIRECTORY_SEPARATOR);
define("ROOTDIRECTORYURL", "{$_SERVER['HTTP_HOST']}/{$applicationFolder}");
//pasta raiz relativa ao server
$rootDirectory = "decoreba";
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == DIRECTORY_SEPARATOR) {
    define("ROOTDIRECTORYSERVER", "{$_SERVER['DOCUMENT_ROOT']}/{$rootDirectory}/");
} else {
    define("ROOTDIRECTORYSERVER", "{$_SERVER['DOCUMENT_ROOT']}/{$rootDirectory}/");
}
//diretório controllers
define("DIRECTORYCONTROLLERS", "controllers" . DIRECTORY_SEPARATOR);
//diretório models
define("DIRECTORYMODELS", "models" . DIRECTORY_SEPARATOR);
//diretório utils
define("DIRECTORYUTILS", "utils" . DIRECTORY_SEPARATOR);
//diretório views
define("DIRECTORYVIEWS", "views" . DIRECTORY_SEPARATOR);
?>