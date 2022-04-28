<?php
require_once ("../../include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break; 

	}

   
function doInsert(){
	global $mydb;
	if(isset($_POST['save'])){

				$borndate =  $_POST['BORNDATE'];
				$dieddate =  $_POST['DIEDDATE'];

		 
		 	
					if ($_POST['FNAME'] == ""  ) {
					$messageStats = false;
					message("All fields are required!","error");
					redirect('index.php?view=add');
					}else{	

						$sql = "SELECT * FROM `tblpeople` WHERE `GRAVENO`= '".$_POST['GRAVENO']."'  AND  `CATEGORIES`='".$_POST['CATEGORIES']."' AND `LOCATION`='".$_POST['LOCATION']."' AND `LATITUDE`='".$_POST['LATITUDE']."' AND `LONGITUDE`='".$_POST['LONGITUDE']."'";
					    $mydb->setQuery($sql);
					    $cur = $mydb->loadSingleResult();

					    if ($cur->GRAVENO== $_POST['GRAVENO']) {
					    	# code...
					    	message("Grave number is already exists!","error");
							redirect('index.php?view=add');
					    }else{

						$autonumber = New Autonumber();
						$res = $autonumber->set_autonumber('PEOPLEID');

  				 	 	$p = New Person(); 
  				 	 	$p->PEOPLEID 	= $res->AUTO; 
						$p->FNAME 		= $_POST['FNAME'];
						$p->CATEGORIES  = $_POST['CATEGORIES'];
						$p->BORNDATE	= $borndate;
						$p->DIEDDATE	= $dieddate; 
						$p->LOCATION 	= $_POST['LOCATION'];
						$p->GRAVENO		= $_POST['GRAVENO'];
						$p->LATITUDE	= $_POST['LATITUDE'];
						$p->LONGITUDE	= $_POST['LONGITUDE'];
						$p->create();
						// }

  

						$autonumber = New Autonumber();
						$autonumber->auto_update('PEOPLEID');



						message("New Record created successfully!", "success");
						redirect("index.php");

					    }

		 
					}
						
				}
		}
			  
 
	function doEdit(){ 
 

		if(isset($_POST['save'])){ 
						$borndate =  $_POST['BORNDATE'];
						$dieddate =  $_POST['DIEDDATE'];	
  				 	 	$p = New Person();  
						$p->FNAME 		= $_POST['FNAME'];
						$p->CATEGORIES  = $_POST['CATEGORIES'];
						$p->BORNDATE	= $borndate;
						$p->DIEDDATE	= $dieddate; 
						$p->GRAVENO		= $_POST['GRAVENO']; 
						$p->LOCATION 	= $_POST['LOCATION'];
						$p->LATITUDE	= $_POST['LATITUDE'];
						$p->LONGITUDE	= $_POST['LONGITUDE'];
						$p->update($_POST['PEOPLEID']);
  

			message("Record has been updated!", "success");
			redirect("index.php");
	  } 
}

	function doDelete(){

 
 

		if (isset($_POST['selector'])==''){
			message("Select the records first before you delete!","error");
			redirect('index.php');
			}else{

			$id = $_POST['selector'];
			$key = count($id);

			for($i=0;$i<$key;$i++){ 

			$p = New Person();
			$p->delete($id[$i]);
  

			message("Record has been Deleted!","info");
			redirect('index.php');

			}
		}

	}
		 
?>