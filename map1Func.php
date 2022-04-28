
<style type="text/css">

	.grave{
		font-size: 8px;
		text-align: center;
	} 

	.grave .graveborder { 
		border-width:1px;
		border-style:solid;
		border-bottom-color:#aaa;
		border-right-color:#aaa;
		border-top-color:#ddd;
		border-left-color:#ddd;
		border-radius:3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		/*border:.5px solid #ddd;*/
		/*border-color: #eee; */
		/*border-style: solid;*/

	/*	border-style: solid;
		border-left: 1px solid #4e514e;
		border-right: 1px solid #4e514e;
		border-top: 1px solid #4e514e;
		border-bottom: 1px solid #4e514e;*/
	 	/*border-radius: 100px 0px 100px 0px;*/
		margin:0px;
		padding:0px;
	}
	.gravebg {
		background-color: #fff;
		color: #000;
	}
	.fill{
		/*border: 1px solid #f9112c;*/
		background-color: #f66c7c;
		color: #fff;
	}
	.fill a{
		/*border: 1px solid #f9112c;*/ 
		color: #fff;
	}
 
.gray {  
  background: #778477;    
  /*border: 1px solid black; */
  
  }
  .gray a{
  	color: #fff;
  }

  .bgcolor_C {
  	background-color: #1d0df2;
  }

  .bgcolor_C > a{
  	color :#fff;
  }
 
	 
</style>
<!-- margin: 10px 20px 30px 40px; is the same as margin-top: 10px; margin-right: 20px; margin-bottom: 30px; margin-left: 40px;, for example. -->
<?php 

function retrieveData_ASC_Horizontal_A_odd_bgcolor($gravenofrom=0,$gravenoto=0,$bgcolor){
	$height = 30;
	$width =15;
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' AND GRAVENO % 2 <> 0 AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal_bgcolor($sql,$height,$width,$bgcolor);
}
function retrieveData_ASC_Horizontal_A_even_bgcolor($gravenofrom=0,$gravenoto=0,$bgcolor){
	$height = 30;
	$width =15;
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' AND GRAVENO % 2 = 0 AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal_bgcolor($sql,$height,$width,$bgcolor);
}
 
function retrieveData_ASC_Vertical_B_bgcolor($gravenofrom=0,$gravenoto=0,$bgcolor){
	$height = 30;
	$width =15;
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='MUNICIPAL CEMETERY' AND  GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Vertical_bgcolor($sql,$height,$width,$bgcolor);
}



function retrieveData_ASC_Vertical_C_bgcolor($gravenofrom=0,$gravenoto=0,$height=0,$width=0,$bgcolor){
 
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' AND  GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Vertical_bgcolor($sql,$height,$width,$bgcolor);
}

function retrieveData_ASC_Vertical_D_bgcolor($gravenofrom=0,$gravenoto=0,$height=0,$width=0,$bgcolor){
 
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY' AND  GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Vertical_bgcolor($sql,$height,$width,$bgcolor);
}



function retrieveData_ASC_Horizontal_A_odd($gravenofrom=0,$gravenoto=0){
	$height = 30;
	$width =15;
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' AND GRAVENO % 2 <> 0 AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal($sql,$height,$width);
}
function retrieveData_ASC_Horizontal_A_even($gravenofrom=0,$gravenoto=0){
	$height = 30;
	$width =15;
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' AND GRAVENO % 2 = 0 AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal($sql,$height,$width);
}
 
function retrieveData_ASC_Vertical_B($gravenofrom=0,$gravenoto=0){
	$height = 30;
	$width =15;
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='MUNICIPAL CEMETERY' AND  GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Vertical($sql,$height,$width);
}


function retrieveData_ASC_Vertical_C($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Vertical($sql,$height,$width);
}
function retrieveData_ASC_Horizontal_C($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal($sql,$height,$width);
}

function retrieveData_DESC_Vertical_C($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadData_Vertical($sql,$height,$width);
}
function retrieveData_DESC_Horizontal_C($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadData_Horizontal($sql,$height,$width);
}


function retrieveData_ASC_Horizontal_C_odd($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' AND GRAVENO % 2 <> 0 AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal($sql,$height,$width);
}
function retrieveData_ASC_Horizontal_C_even($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' AND GRAVENO % 2 = 0 AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal($sql,$height,$width);
}

function retrieveData_ASC_slant_C($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal_slant($sql,$height,$width);
}
 
 
function retrieveData_ASC_Vertical_D($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Vertical($sql,$height,$width);
}
function retrieveData_ASC_Horizontal_D($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO";
	loadData_Horizontal($sql,$height,$width);
}

function retrieveData_DESC_Vertical_D($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadData_Vertical($sql,$height,$width);
}
function retrieveData_DESC_Horizontal_D($gravenofrom=0,$gravenoto=0,$height=0,$width=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY'  AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadData_Horizontal($sql,$height,$width);
}

// function retrieveData_ASC_Horizontal_D($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Horizontal($sql);
// }

// function retrieveData_ASC_Vertical_D($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Vertical($sql);
// }

// function retrieveData_ASC_Horizontal_A($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Horizontal($sql);
// }

// function retrieveData_ASC_Horizontal_B($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Horizontal($sql);
// }

 

// function retrieveData_ASC_Vertical($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Vertical($sql);
// }

// function retrieveData_DESC_Vertical($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO ORDER BY PEOPLEID DESC LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Vertical($sql);
// }

// function retrieveData_ASC_Horizontal($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Horizontal($sql);
// }

// function retrieveData_DESC_Horizontal($gravenofrom=0,$gravenoto=0){
// 	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO ORDER BY PEOPLEID DESC LIMIT {$gravenofrom}, {$gravenoto}";
// 	loadData_Horizontal($sql);
// }
function loadData_Vertical_bgcolor($sql="",$height=0,$width=0,$bgcolor=""){
   global $mydb;
   echo '<div class="rotate">';
	echo '<table class="grave tooltip-demo">';
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT 17,17";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();
		$numrows = $mydb->num_rows($cur);//get the number of count


	if ($numrows > 0) {
			# code... 
	 			$cur = $mydb->loadResultList();

			
			foreach ($cur as $result) { 
				echo '<tr class="graveborder"   style="height:'.$height.'px; ">'; 

				if (@$_GET['graveno']   ==$result->GRAVENO) {
					# code...
					if ($_GET['section']==$result->CATEGORIES) {
						# code...
							$graveno = '<td class="fill graveborder" style="width:'.$width.'px;" ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'" autofocus> '.$result->GRAVENO.'</a></td>';
					}else{
							# code...
							$graveno = '<td class="'.$bgcolor.' graveborder" style="width:'.$width.'px; "  ><a  href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a></td>';
					} 
					// $graveno = $result->GRAVENO;

				// if age < 13 then call define(_col_,"style","style={background=red}");
				}else{
				    // $graveno = $result->GRAVENO;
				# code...
							$graveno = '<td class="'.$bgcolor.' graveborder" style="width:'.$width.'px; "  ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a></td>';
				} 


				  echo  $graveno;
				echo '</tr>';
			 
			}

					
	}
	echo '</table>';
	echo '</div>';
}
function loadData_Horizontal_bgcolor($sql="",$height=0,$width=0,$bgcolor=""){
		   global $mydb;
		   echo '<div class="rotate">';
			echo '<table class="grave tooltip-demo">';
				// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT 17,17";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

						echo '<tr class="graveborder"   style="height:'.$height.'px; ">'; 
					foreach ($cur as $result) { 


						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<td class="fill  graveborder" style="width:'.$width.'px;" ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'" autofocus> '.$result->GRAVENO.'</a></td>';
							}else{
									# code...
									$graveno = '<td class="'.$bgcolor.' graveborder" style="width:'.$width.'px; "  ><a  href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a></td>';
							} 
							// $graveno = $result->GRAVENO;

						// if age < 13 then call define(_col_,"style","style={background=red}");
						}else{
						    // $graveno = $result->GRAVENO;
						# code...
									$graveno = '<td class="'.$bgcolor.' graveborder" style="width:'.$width.'px; "  ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a></td>';
						} 
 
 
					 
						  echo  $graveno;
					}

							
						echo '</tr>';
			}
			echo '</table>';
			echo '</div>';
		}
 


function loadData_Horizontal($sql="",$height=0,$width=0){
		   global $mydb;
			echo '<table class="grave tooltip-demo">';
				// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT 17,17";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

						echo '<tr  class="graveborder" style="height:'.$height.'px; ">'; 
					foreach ($cur as $result) { 


						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<td class="fill graveborder" style="width:'.$width.'px;" ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'" autofocus> '.$result->GRAVENO.'</a></td>';
							}else{
									# code...
									$graveno = '<td class="graveborder gravebg" style="width:'.$width.'px; "  ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a></td>';
							} 
							// $graveno = $result->GRAVENO;

						// if age < 13 then call define(_col_,"style","style={background=red}");
						}else{
						    // $graveno = $result->GRAVENO;
						# code...
									$graveno = '<td class="graveborder gravebg" style="width:'.$width.'px; "  ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a></td>';
						} 
 
 
					 
						  echo  $graveno;
					}

							
						echo '</tr>';
			}
			echo '</table>';
		}

		function loadData_Vertical($sql="",$height=0,$width=0){
		   global $mydb;
			echo '<table class="grave tooltip-demo">';
				// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT 17,17";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count



			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

					foreach ($cur as $result) { 

						echo '<tr class="graveborder"  style="height:'.$height.'px">'; 

						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<td class="fill graveborder gravebg" style="width:'.$width.'px;"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'" autofocus> '.$result->GRAVENO.'</a> </td>';
							}else{
									$graveno = '<td class="graveborder gravebg" style="width:'.$width.'px;"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';

							} 
							// $graveno = $result->GRAVENO;

						// if age < 13 then call define(_col_,"style","style={background=red}");
						}else{
						    // $graveno = $result->GRAVENO;
							$graveno = '<td class="graveborder gravebg" style="width:'.$width.'px;"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';

						} 
  
					 
						  echo  $graveno;

						echo '</tr>';
					}

							
			}
			echo '</table>';
		}
?> 









 


























       