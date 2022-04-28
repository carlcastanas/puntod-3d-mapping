<?php
require_once("../../include/initialize.php");
//checkAdmin();
  	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$header=$view;
$title="Import Excel";
switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

 
	default :
		$content    = 'list.php';		
}
require_once ("../theme/templates.php");
?>
  
