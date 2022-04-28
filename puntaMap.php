<?php
	include "map1Func.php";

?> 
<style type="text/css">
	#stretchmap {
		width: 100px;
		height: 100px;
		margin: -100px 0px 0px 0px;
	}
	#stretchmap img {
		width: 100%;
		height: 100%;
	}

	.bg {
		width: auto;
		height: auto;
	}
	.bg img {
		width: 100%;
		height: 100%;
	}

.style1 {

          background: url(img/mapaputa.jpg);
                  -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; 
        background-size: cover;
      
}
</style>

<div id="container" > 
	  <table  class="style1" >
	   
 		<tr >
 			<td > 
 				<div style="margin:  0px  0px 0px 30px;width: 1100px">
 				<?php 
					  include 'puntaAB.php';  
				   ?> 
				 </div>

 				<div style="margin:  0px  0px 0px 40px;width: 1100px">
 				<?php  
				       include 'puntaC.php'; 
				   ?> 
				 </div>
 			</td>
 			<td>
 			 
 				<div style="margin:  0px  0px 0px 10px;width: 200px">
 				<?php  
			    	   include 'puntaC1.php'; 
			    ?> 
				</div>
 			</td> 
 			<td>
 				<div style="margin:  0px  0px 0px 240px;width: 500px">
 				<?php  
			    	  include 'puntaC2.php'; 
			    ?> 
				</div>
 			</td>
 			<td><p style="height: 1000px;background-color: #eee;color: black;text-align: center;">Daanan</p></td>
 			<td>
 				<div style="margin:  0px  0px 0px 0px; width: 220px">
				<?php 
					  include 'puntaD.php'; 
				?>
				</div>
 			</td>
 			  <td>
 				<table style="margin: 50px 0px 50px 0px">
 					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px;">
								<?php 
									 include 'puntaDsevenlayer.php';

								?>
							</div>
						</td>
					</tr>
 					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px;">
								<?php 
									    include 'puntaDsixlayer.php';

								?>
							</div>
						</td>
					</tr>
				 	<tr>
						<td>
							<div style="margin:  0px  0px -80px 0px;">
								<?php 
									  include 'puntaDfifthlayer.php';

								?>
							</div>
						</td>
					</tr>
				 	<tr>
						<td>
							<div style="margin:  0px  0px -30px 0px;">
								<?php 
									    include 'puntaDforthlayer.php';

								?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px;">
								<?php 
									   include 'puntaDthirdlayer.php';

								?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin:  0px  0px -50px 0px;">
								<?php 
									  include 'puntaDsecondlayer.php';

								?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px">
								<?php 
									    include 'puntaDfirstlayer.php';

								?>
							</div>
						</td>
					</tr>
				</table>
 			</td> 
 		</tr>
 	
 	</table>    
</div>