<?php



define("SITE_URL", siteURL() );
define("APPLICATION_ROOT", getApplicationRoot() );
define("IMAGES_ROOT", APPLICATION_ROOT."/images");
define("CSS_ROOT", APPLICATION_ROOT."/css");
define("JS_ROOT", APPLICATION_ROOT."/js");




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