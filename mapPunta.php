<?php
	include "map1Func.php";
?>


<style type="text/css">
/*	.rowborder{
		border: 1px solid #ddd;
		padding: 0px;

	}
	.partition{
		background-color: #ddd;
		color: #ddd;
		padding: 0px;
		height: 4px;
	}

	.tbls {
		width: 100%;
		margin: 0;
		padding: 0;
		text-align: center;
		font-size:10px;

	} 
	#table {
		width: auto;
		margin: 0;
		padding: 0;
		text-align: center;
		font-size:12px;
	}
	.tbls td tr {

		border-right: 1px solid #ddd;
	}*/
	.t{
		font-size: 8px;
	}

	.fill{
		/*border: 1px solid #f9112c;*/
		background-color: #f66c7c;
	} 
/*	#t tr td {
			border-right: 1px solid #ddd;
	}*/

</style>

<div class="container">
	<div class="row tooltip-demo  scrolly" >
		<div class="col-md-8" style="margin-top: 20%" >
		  
			<table style="font-size: 6px; "> 
				<tr> 
					<!-- section A -->
					<td><?php retrieveData_ASC_Horizontal_A(0,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(2,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(4,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(6,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(8,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(10,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(11,2); ?></td>
					<td><?php retrieveData_ASC_Horizontal_A(12,2); ?></td>  
					<td><?php retrieveData_ASC_Horizontal_A(13,2); ?></td>
					<td><?php retrieveData_ASC_Horizontal_A(14,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(16,2); ?></td>  
					<td><?php retrieveData_ASC_Horizontal_A(18,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(20,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(22,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(24,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(26,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(28,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(30,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(32,2); ?></td> 
					<td><?php retrieveData_ASC_Horizontal_A(34,2); ?></td>
					<td><?php retrieveData_ASC_Horizontal_A(36,2); ?></td> 
					 <!-- section b -->
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(0,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(3,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(6,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(9,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(12,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(15,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(18,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(21,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(24,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(28,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(30,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(33,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(36,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(42,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(48,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(54,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(60,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(63,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(66,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(69,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(72,3); ?></td>
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(75,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(78,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(81,3); ?></td>  
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(84,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(87,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(90,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(93,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(96,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(99,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(102,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(105,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(108,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(111,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(114,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(117,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(120,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(123,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(126,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(129,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(132,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(135,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(138,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(141,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(144,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(147,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(150,3); ?></td> 
					<td width="1px"><?php retrieveData_ASC_Horizontal_B(153,3); ?></td>  
				</tr> 
				 
			</table>
 
			<!-- <div class="col-lg-12 row partition"></div> -->
 			<table id="t" class="t"  >
 								<!-- layer -1 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 --> 
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td  width="5" colspan="8"  ><?php  retrieveData_ASC_Vertical(250,8) ?></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td width="5" colspan="2"   ><?php  retrieveData_ASC_Vertical(294,2) ?></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 							<!-- layer 0 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 --> 
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td width="5" colspan="8"  ><?php  retrieveData_ASC_Vertical(242,8) ?></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td ></td> <!-- 33 --> 
 					<td  width="5" colspan="2"  ><?php  retrieveData_ASC_Vertical(296, 2) ?></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- layer 1 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td rowspan="5"><?php retrieveData_ASC_Horizontal(7,5) ?></td> <!-- 5 -->
 					<td rowspan="5"><?php retrieveData_ASC_Horizontal(12,4) ?></td> <!-- 6 -->
 					<td rowspan="4"   ><?php retrieveData_ASC_Horizontal(19,5) ?></td> <!-- 7-->
 					<!-- <td></td>  --><!-- 8 -->
 					<td rowspan="4"><?php retrieveData_ASC_Horizontal(25,5) ?></td> <!-- 9 -->
 					<td rowspan="4"><?php retrieveData_ASC_Horizontal(30,5) ?></td> <!-- 10 -->
 					<td rowspan="8"><?php retrieveData_ASC_Horizontal(39,8) ?></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td rowspan="10"><?php retrieveData_ASC_Horizontal(61,8) ?></td> <!-- 14 -->
 					<td rowspan="10"><?php retrieveData_ASC_Horizontal(69,8) ?></td> <!-- 15 -->
 					<td rowspan="10"><?php retrieveData_ASC_Horizontal(77,8) ?></td> <!-- 16 -->
 					<td rowspan="10"><?php retrieveData_ASC_Horizontal(85,8) ?></td> <!-- 17 -->
 					<td rowspan="10"><?php retrieveData_ASC_Horizontal(93,8) ?></td> <!-- 18 -->
 					<td width="20">  </td> <!-- 19 -->
 					<td rowspan="10" width="5"><?php retrieveData_ASC_Horizontal(101,8) ?></td> <!-- 20 -->
 					<td width="5" rowspan="5"><?php  retrieveData_ASC_Horizontal(144,6) ?></td> <!-- 21 -->
 					<td width="5" rowspan="5"><?php  retrieveData_ASC_Horizontal(150,6) ?></td> <!-- 22 -->
 					<td width="5" rowspan="5"><?php  retrieveData_ASC_Horizontal(156,6) ?></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td width="5" rowspan="10"><?php  retrieveData_ASC_Horizontal(165,8) ?></td> <!-- 25 -->
 					<td width="5" rowspan="2" ><?php  retrieveData_ASC_Horizontal(173,2) ?></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td width="5"  ><?php  retrieveData_ASC_Horizontal(175,1) ?></td> <!-- 22 -->
 					<td width="5" colspan="7"  ><?php  retrieveData_ASC_Vertical(226,7) ?></td> <!-- 23 -->
 					<td width="5" rowspan="8"  ><?php  retrieveData_ASC_Horizontal(234,8) ?></td> <!-- 24 -->
 					<td width="5" rowspan="12"  ><?php  retrieveData_ASC_Horizontal(258,12) ?></td> <!-- 25 -->
 					<td width="5" rowspan="12"  ><?php  retrieveData_ASC_Horizontal(270,12) ?></td> <!-- 26 -->
 					<td width="5" rowspan="12"  ><?php  retrieveData_ASC_Horizontal(282,12) ?></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td width="5" rowspan="12"  ><?php  retrieveData_ASC_Horizontal(282,12) ?></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td  width="5" rowspan="8"  ><?php  retrieveData_ASC_Horizontal(298,8) ?></td> <!-- 34 --> 
 					<td width="5" rowspan="8"  ><?php  retrieveData_ASC_Horizontal(310,8) ?></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 2-->
 				<tr>
 					<td><?php retrieveData_ASC_Horizontal(1,1) ?></td> <!-- 1 -->
 					<td><?php retrieveData_ASC_Horizontal(2,1) ?></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td rowspan="3"><?php retrieveData_ASC_Horizontal(3,4) ?></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td><?php retrieveData_ASC_Vertical(47,4) ?></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td> --> <!-- 8 -->
 					<!-- <td></td> --> <!-- 9 -->
 					<!-- <td></td> --> <!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td  width="5" colspan="7"  ><?php  retrieveData_ASC_Vertical(175,7) ?></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 -->  
 				</tr>
 				<!-- end -->
 				<!-- layer 3 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td> --> <!-- 8 -->
 					<!-- <td></td> --> <!-- 9 -->
 					<!-- <td></td> --> <!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(197,4) ?></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 -->  
 				</tr>
 				<!-- end -->
 				<!-- layer 4 -->
 				<tr>
 					<td><?php retrieveData_ASC_Horizontal(0,1) ?></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td>  <!-- 4 -->
 					<td><?php retrieveData_ASC_Vertical(51,3) ?></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td> --> <!-- 8 -->
 					<!-- <td></td> --> <!-- 9 -->
 					<!-- <td></td> --> <!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td  width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(178,4) ?></td> <!-- 12 -->
 					<td ></td> <!-- 13 --> 
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(185,4) ?></td> <!-- 14 -->
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(189,4) ?></td> <!-- 15 -->
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(193,4) ?></td> <!-- 16 -->
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(197,4) ?></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 -->  
 				</tr>
 				<!-- end -->
 				<!-- layer 5 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td ></td> <!-- 7 -->
 					<!-- <td></td> --> <!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td> --> <!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td><?php retrieveData_ASC_Vertical(55,3) ?></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(175,3) ?></td> <!-- 15 -->
 					<td width="5" rowspan="6" ><?php  retrieveData_ASC_Horizontal(182,3) ?></td> <!-- 16 -->
 					<td> </td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 -->  
 				</tr>
 				<!-- end -->
 				<!-- layer 6 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td>  <!-- 5-->
 					<td ></td> <!-- 6 -->
 					<td><?php retrieveData_ASC_Vertical(16,3) ?></td>   <!-- 7-->
 					<td colspan="3"><?php retrieveData_ASC_Vertical(35,4) ?></td> <!-- 8 -->
 					<!-- <td></td> --> <!-- 9 -->
 					<!-- <td></td> --> <!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td><?php retrieveData_ASC_Vertical(59,2) ?></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 7 -->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td> --> <!-- 8 -->
 					<!-- <td></td> --> <!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 8-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 				<!-- 	<td></td> --> <!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 				<!-- 	<td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td colspan="3"><?php retrieveData_ASC_Vertical(162,3) ?></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 9-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 				<!-- 	<td></td> --> <!-- 8 -->
 				<!-- 	<td></td>  --><!-- 9 -->
 				<!-- 	<td></td> --> <!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td colspan="2" rowspan="4" width="100" height="20" style="border: 1px solid #ddd; text-align: center;font-size: 8px">535</td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 10-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 11-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td colspan="7"><?php retrieveData_ASC_Vertical(108,7); ?></td> <!-- 16 -->
 					<td colspan="15"><?php retrieveData_ASC_Vertical(115,14); ?></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 10-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td colspan="15"><?php retrieveData_ASC_Vertical(128,16); ?></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- layer 10-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td colspan="15"><?php retrieveData_ASC_Vertical(204,14); ?></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td colspan="10"><?php retrieveData_ASC_Vertical(310,4); ?></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 10-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td colspan="15"><?php retrieveData_ASC_Vertical(218,8); ?></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 10-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end -->
 				<!-- layer 10-->
 				<tr>
 					<td></td> <!-- 1 -->
 					<td></td> <!-- 2 -->
 					<td></td> <!-- 3 -->
 					<td></td> <!-- 4 -->
 					<td></td> <!-- 5 -->
 					<td ></td> <!-- 6 -->
 					<td></td> <!-- 7 -->
 					<!-- <td></td>  --><!-- 8 -->
 					<!-- <td></td>  --><!-- 9 -->
 					<!-- <td></td>  --><!-- 10 -->
 					<td></td> <!-- 11 -->
 					<td></td> <!-- 12 -->
 					<td></td> <!-- 13 --> 
 					<td></td> <!-- 14 -->
 					<td></td> <!-- 15 -->
 					<td></td> <!-- 16 -->
 					<td></td> <!-- 17 -->
 					<td></td> <!-- 18 -->
 					<td></td> <!-- 19 -->
 					<td></td> <!-- 20 -->
 					<td></td> <!-- 21 -->
 					<td></td> <!-- 22 -->
 					<td></td> <!-- 23 -->
 					<td></td> <!-- 24 -->
 					<td></td> <!-- 25 -->
 					<td></td> <!-- 26 -->
 					<td></td> <!-- 27 -->
 					<td></td> <!-- 28 -->
 					<td></td> <!-- 29 -->
 					<td></td> <!-- 30 --> 
 					<td></td> <!-- 31 --> 
 					<td></td> <!-- 32 --> 
 					<td></td> <!-- 33 --> 
 					<td></td> <!-- 34 --> 
 					<td></td> <!-- 35 --> 
 					<td></td> <!-- 36 --> 
 					<td></td> <!-- 37 --> 
 				</tr>
 				<!-- end --> 

 			</table>

	    </div>  
		<div class="col-md-4 " >
			<table class="t">
			 
				<!-- layer 1 last updated -->
				<tr>
					<td style="width: 5%"></td>
					<td width="5" rowspan="18"><?php retrieveData_ASC_Horizontal(327,20); ?></td> <!-- 1 -->
					<td width="5" rowspan="18"><?php retrieveData_ASC_Horizontal(347,22); ?></td> <!-- 2 -->
					<td width="5" rowspan="18"><?php retrieveData_ASC_Horizontal(369,25); ?></td> <!-- 3 -->
					<td width="5" rowspan="18"><?php retrieveData_ASC_Horizontal(399,25); ?></td> <!-- 4 -->
					<td width="5" rowspan="18"><?php retrieveData_ASC_Horizontal(424,19); ?></td> <!-- 5 -->
					<td width="5" rowspan="3"><?php retrieveData_ASC_Horizontal(443,3); ?></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"><?php retrieveData_ASC_Horizontal(644,1); ?></td></td> <!-- 8 -->
					<td width="5" ></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5" ></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5" rowspan="31" style="margin-left: 50%" ><?php require_once 'testmap.php' ?></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 2 -->
				<tr>
					
					<td style="width: 5%"></td>
					
					<td width="5" ></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 3-->
				<tr> 
					<td style="width: 5%"></td>
		 
				 <td width="5"></td> <!-- 7 -->
					<td width="5" rowspan="2"><?php retrieveData_ASC_Horizontal(645,3); ?></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 4-->
				<tr>  
					<td style="width: 5%"></td>
					
					 <td width="5"><?php retrieveData_ASC_Horizontal(446,1); ?></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer5-->
				<tr> 
					<td style="width: 5%"></td>
				     <td width="5"></td> <!-- 6 -->
				      <td width="5"></td> <!-- 7-->
					<td width="5"><?php retrieveData_ASC_Horizontal(648,1); ?></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer6-->
				<tr>

					<td style="width: 5%"></td> 
					
					 <td width="5" rowspan="13" style="height: 50px"><?php retrieveData_ASC_Horizontal(447,13); ?></td> <!-- 6 -->
					  <td width="5" ></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 7-->
				<tr>
					
					<td style="width: 5%"></td>
					
					<td width="5"></td> <!-- 6 -->
					 <td width="5"  rowspan="12"><?php retrieveData_ASC_Horizontal(649,14); ?></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 8-->
				<tr>
					
					<td style="width: 5%"></td>
					
					 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 9-->
				<tr>
					
					<td style="width: 5%"></td>
					
					 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 10-->
				<tr>
					
					<td style="width: 5%"></td> 
					
					 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 11-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 12-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 13-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer14-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 15-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer16-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer17-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 18-->
				<tr>
					
					<td style="width: 5%"></td>
					
						 <td width="5"></td> <!-- 6 -->
					  <td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer19-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer20-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 21-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 22-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 23-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer24-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
				<!-- layer 25-->
				<tr>
					
					<td style="width: 5%"></td>
					<td width="5"></td> <!-- 1 -->
					<td width="5"></td> <!-- 2 -->
					<td width="5"></td> <!-- 3 -->
					<td width="5"></td> <!-- 4 -->
					<td width="5"></td> <!-- 5 -->
					<td width="5"></td> <!-- 6 -->
					<td width="5"></td> <!-- 7 -->
					<td width="5"></td> <!-- 8 -->
					<td width="5"></td> <!-- 9 -->
					<td width="5"></td> <!-- 10 -->
					<td width="5"></td> <!-- 11 -->
					<td width="5"></td> <!-- 12-->
					<td width="5"></td> <!-- 13-->
					<td width="5"></td> <!-- 14-->
					<td width="5"></td> <!-- 15-->
					<td width="5"></td> <!-- 16 -->
					<td width="5"></td> <!-- 17 -->
					<td width="5"></td> <!-- 18 -->
					<td width="5"></td> <!-- 19 -->
					<td width="5"></td> <!-- 20 --> 
					<td width="5"></td> <!-- 21 -->
					<td width="5"></td> <!-- 22 -->
					<td width="5"></td> <!-- 23 -->
					<td width="5"></td> <!-- 24 -->
					<td width="5"></td> <!-- 25 -->
					<td width="5"></td> <!-- 26 -->
					<td width="5"></td> <!-- 27 -->
					<td width="5"></td> <!-- 28 -->
					<td width="5"></td> <!-- 29 -->
					<td width="5"></td> <!-- 30 -->
					<td width="5"></td> <!-- 31 -->
				</tr>
				<!-- end -->
			</table>
		 

		</div>
			
	</div>
</div>
<div class="col-md-12" >
	<div class="row">
		<table style="border: 1px solid #eee;width: 100%;background-color: #ddd">
			<tr>
				<td>HIGHWAY</td>
			</tr>
		</table>
	</div>
</div>