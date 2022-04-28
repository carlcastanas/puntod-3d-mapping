
<style type="text/css">
	.grave{
		font-size: 7px;
	}
</style>

<style>
* {
    box-sizing: border-box;
}
 
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 0px;
    margin: 0px;
    border: 1px solid #ddd;
     font-size: 9px;
    text-align: center;
}
.col-1 {width: 6.2%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

[class*="row-"] {
    /*float: left;*/
    padding: 1px;
    border: 1px solid #ddd;
    font-size: 9px;
    text-align: center;
}
.row-1 {width: 1.33%;}
.row-2 {width: 16.66%;}
.row-3 {width: 25%;}
.row-4 {width: 33.33%;}
.row-5 {width: 41.66%;}
.row-6 {width: 50%;}
.row-7 {width: 58.33%;}
.row-8 {width: 66.66%;}
.row-9 {width: 75%;}
.row-10 {width: 83.33%;}
.row-11 {width: 91.66%;}
.row-12 {width: 100%;}
.fill{background-color: red;}
</style>

<?php 
function retrieveData_ASC_Horizontal_D($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='NASUGBU CATHOLIC CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Horizontal($sql);
}

function retrieveData_ASC_Vertical_D($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='D' AND LOCATION='OLD MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Vertical($sql);
}

function retrieveData_ASC_Horizontal_A($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Horizontal($sql);
}
function retrieveData_ASC_Vertical_A($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Vertical($sql);
}

function retrieveData_ASC_Horizontal_B($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Horizontal($sql);
}

 

function retrieveData_ASC_Vertical($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Vertical($sql);
}

function retrieveData_DESC_Vertical($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO ORDER BY PEOPLEID DESC LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Vertical($sql);
}

function retrieveData_ASC_Horizontal($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Horizontal($sql);
}

function retrieveData_DESC_Horizontal($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='C' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO ORDER BY PEOPLEID DESC LIMIT {$gravenofrom}, {$gravenoto}";
	loadData_Horizontal($sql);
}

 


function loadData_Vertical($sql=""){
		   global $mydb; 
				// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT 17,17";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();
 
					foreach ($cur as $result) { 


						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<div class="fill row-1" style="border:1px solid #ddd"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </div>';
							}else{
									$graveno = '<div class="row-1"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </div>';

							} 
							// $graveno = $result->GRAVENO;

						// if age < 13 then call define(_col_,"style","style={background=red}");
						}else{
						    // $graveno = $result->GRAVENO;
							$graveno = '<div class="row-1"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </div>';

						} 
 

					 //  for ($i=0; $i < $gravenos; $i++) { 
						// 	# code...
						// 	if ($i = $gravenos) {
						// 		# code...
						// 		$gravenos = '<td class="fill"><a title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';
						//   }
					     
						// }
					 
						  echo  $graveno;
					} 
			} 
		}

		function loadData_Horizontal($sql=""){
		   global $mydb; 
				// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='MUNICIPAL CEMETERY' GROUP BY GRAVENO  LIMIT 17,17";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

					foreach ($cur as $result) { 
 

						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<div class="fill col-1" style="border:1px solid #ddd"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </div>';
							}else{
									$graveno = '<div class="col-1"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </div>';

							} 
							// $graveno = $result->GRAVENO;

						// if age < 13 then call define(_col_,"style","style={background=red}");
						}else{
						    // $graveno = $result->GRAVENO;
							$graveno = '<div class="col-1"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></div>';

						} 
 

					 //  for ($i=0; $i < $gravenos; $i++) { 
						// 	# code...
						// 	if ($i = $gravenos) {
						// 		# code...
						// 		$gravenos = '<td class="fill"><a title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';
						//   }
					     
						// }
					 
						  echo  $graveno;
 
					}

							
			} 		}
?> 









 


























       