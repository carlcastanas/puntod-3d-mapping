<?php
require_once ("include/initialize.php");
// if(isset($_SESSION['IDNO'])){
// 	redirect(web_root.'index.php');

// }

$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
 

switch ($view) {
 
 case 'mapa' :
        $title="Map";	
		$content='mapa.php';		
		break;

	 case 'about' :
        $title="About Us";	
		$content='about.php';		
		break;

	case 'person' :
        $title="Deceased Person";	
		$content='person.php';		
		break;
  
	default :
	    $title="Home";	
		$content ='home.php';		

}

require_once("theme/templates.php");
 

?>

