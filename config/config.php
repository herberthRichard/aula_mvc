<?php
#arquivos diretorios raízes
$PastaInterna="";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/'){
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Dirétorios Específicos
define('DIRIMG', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/img/");
define('DIRADMIN', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/admin");
define('DIRAUDIO', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/audio");
define('DIRCSS', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/css");
define('DIRDESIGN', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/design");
define('DIRFONTES', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/fontes");
define('DIRJS', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/js");
define('DIRVIDEO', "htpp://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/video");

#Acesso ao banco de dados
 
define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");