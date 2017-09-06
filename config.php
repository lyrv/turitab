<?php
session_start();
Header('Cache-Control: no-cache');
Header('Pragma: no-cache');
header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set("America/Mexico_City");
if($logout){
    setcookie("ultimavisita", "", time()-1);
}
$hoy = getdate();
setcookie("ultimavisita", $hoy['mday']."-".$hoy['mon']."-".$hoy['year']."-".$hoy['hours'].":".$hoy['minutes'], time()+60*60*24*365);
if(isset($_REQUEST) and !empty($_REQUEST)){
    foreach($_REQUEST as $k => $v) {
        $$k=$v;
        //print "ASA$$k=$v<br>";
    }
}
$i = 1;
define("baseURL", $_SERVER['REQUEST_SCHEME']."://turitab.rvrsi.com.mx");
define("css", baseURL."/css/");
define("js", baseURL."/js/");
define("fonts", baseURL."/fonts/");
define("img", baseURL."/img/");

define("SERVER", "localhost");
define("USER", "rvrsicom_rvrsi");
define("PASSWORD", "rvr2016.");
/*define("USER", "root");
define("PASSWORD", "");
*/

define("DATABASE", "rvrsicom_rvrsi");
define("SERVERAIZ",$_SERVER["DOCUMENT_ROOT"]."/");
//define("SERVERAIZ",$_SERVER["DOCUMENT_ROOT"]."/viirsa/");
define("ENTIDADES","entidades/");
define("MODELO","modelo/");
define("CONTROLLER","controller/");
define("FACEBOOK","Facebook/");
require_once 'Facebook/autoload.php';
function __autoload($class_name) {
    if(file_exists(SERVERAIZ.ENTIDADES.$class_name.".php")){
        require_once(SERVERAIZ.ENTIDADES.$class_name.".php");
    }elseif(file_exists(SERVERAIZ.MODELO.$class_name.".php")){
        require_once(SERVERAIZ.MODELO.$class_name.".php");
    }elseif(file_exists(SERVERAIZ.CONTROLLER.$class_name.".php")){
        require_once(SERVERAIZ.CONTROLLER.$class_name.".php");
    }else{
        print "la Clase no existe "." -$class_name-";
    }    
}

$fb = new Facebook\Facebook([
    'app_id' => '371607063256440',
  'app_secret' => 'ac9c2b1aeac5f04b18d8814399b37210',
  'default_graph_version' => 'v2.2',
  'persistent_data_handler'=>'session'
  ]);

?>