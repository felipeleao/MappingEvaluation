<?php



//Database connection parameters and credentials
define("SGBD_SERVER", "localhost");
define("SGBD_PORT", "3306");
define("SGBD_USER", "root");
define("SGBD_PASSWORD", "");
define("SGBD_SCHEMA", "mapping_evaluation");



//Parametros de conexao para o Hostinger
// define("SGBD_SERVER", "mysql.hostinger.com.br");
// define("SGBD_PORT", "3306");
// define("SGBD_USER", "u689825796_eval");
// define("SGBD_PASSWORD", "evalP@55");
// define("SGBD_SCHEMA", "u689825796_eval");


//-----------------------------------------------------
// AVOID EDITING BEYOND THIS POINT
//-----------------------------------------------------

//General parameters fused throughout the application
define("SITE_URL", siteURL() );
define("APPLICATION_ROOT", getApplicationRoot() );
define("IMAGES_ROOT", APPLICATION_ROOT."/images");
define("CSS_ROOT", APPLICATION_ROOT."/css");
define("JS_ROOT", APPLICATION_ROOT."/js");


//Access restriction parameters
define("CONNECT_TO_SERVER", true);
define("OPEN_SESSION", true);
define("CASE_SENSITIVE", false);
define("VALIDATE_EVERYTIME", true);
define("LOGIN_PAGE", APPLICATION_ROOT."/login");
define("USERS_DB_TABLE", "users");




function getApplicationRoot(){
	$current_dir = dirname(__FILE__);
	$root_dir = $_SERVER['DOCUMENT_ROOT'];

	return str_replace("/config", "", str_replace($root_dir, SITE_URL, $current_dir));
}


function siteURL(){
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol.$domainName;
}





?>
