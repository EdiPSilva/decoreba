<?php
//Author
define("AUTHOR", "Édi P Silva");
define("DESCRIPTION", "Site para estudo de inglês");

//pasta raiz por url
$applicationFolder = "app" . DIRECTORY_SEPARATOR;
define("ROOTDIRECTORYAPP", "app". DIRECTORY_SEPARATOR);
define("PROJETO", "DECOREBA | ");

define("ROOTDIRECTORYURL", "{$_SERVER['HTTP_HOST']}/{$applicationFolder}");
//pasta raiz relativa ao server
$rootDirectory = "decoreba";
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == DIRECTORY_SEPARATOR) {
    define("ROOTDIRECTORYSERVER", "{$_SERVER['DOCUMENT_ROOT']}". DIRECTORY_SEPARATOR."{$rootDirectory}");
} else {
    define("ROOTDIRECTORYSERVER", "{$_SERVER['DOCUMENT_ROOT']}" . DIRECTORY_SEPARATOR . "{$rootDirectory}" . DIRECTORY_SEPARATOR);
}
//diretório controllers
define("DIRECTORYCONTROLLERS", "controllers" . DIRECTORY_SEPARATOR);
//diretório models
define("DIRECTORYMODELS", "models" . DIRECTORY_SEPARATOR);
//diretório utils
define("DIRECTORYUTILS", "utils" . DIRECTORY_SEPARATOR);
//diretório views
define("DIRECTORYVIEWS", "views" . DIRECTORY_SEPARATOR);

//requires
define("REQUIRESCONTROLLERS", ROOTDIRECTORYSERVER . ROOTDIRECTORYAPP . DIRECTORYCONTROLLERS);
define("REQUIRESMODELS", ROOTDIRECTORYSERVER . ROOTDIRECTORYAPP . DIRECTORYMODELS);
define("REQUIRESUTILS", ROOTDIRECTORYSERVER . ROOTDIRECTORYAPP . DIRECTORYUTILS);
define("REQUIRESVIEWS", ROOTDIRECTORYSERVER . ROOTDIRECTORYAPP . DIRECTORYVIEWS);

//SRC

define("DIRSRC",  "http://{$_SERVER['SERVER_NAME']}/decoreba/src");
define("LINKCSS",  DIRSRC. "/css");
define("LINKFONTS",  DIRSRC . "/fonts");
define("LINKJS",  DIRSRC . "/js");

define("URL", "http://{$_SERVER['SERVER_NAME']}/decoreba/");

?>