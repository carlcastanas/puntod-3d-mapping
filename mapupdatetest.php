
<style type="text/css">
	* {
    box-sizing: border-box;
}
 .row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="grid-col-"] {
    float: left;
    padding: 0px;
    margin: 0px;
    border: 1px solid #ddd; 
}
.grid-col-1 {width: 1.33%;}
.grid-col-2 {width: 16.66%;}
.grid-col-3 {width: 25%;}
.grid-col-4 {width: 33.33%;}
.grid-col-5 {width: 41.66%;}
.grid-col-6 {width: 50%;}
.grid-col-7 {width: 58.33%;}
.grid-col-8 {width: 66.66%;}
.grid-col-9 {width: 75%;}
.grid-col-10 {width: 83.33%;}
.grid-col-11 {width: 91.66%;}
.grid-col-12 {width: 100%;}
[class*="grid-row-"] {
    float: left;
    padding: 0px;
    margin: 0px;
    border: 1px solid #ddd; 
}
.grid-row-1 {height:  1.33%;}
.grid-row-2 {width: 16.66%;}
.grid-row-3 {width: 25%;}
.grid-row-4 {width: 33.33%;}
.grid-row-5 {width: 41.66%;}
.grid-row-6 {width: 50%;}
.grid-row-7 {width: 58.33%;}
.grid-row-8 {width: 66.66%;}
.grid-row-9 {width: 75%;}
.grid-row-10 {width: 83.33%;}
.grid-row-11 {width: 91.66%;}
.grid-row-12 {width: 100%;}
</style>
<?php
include 'map2Func.php';
// retrieveData_ASC_Horizontal_A(0,16);
// retrieveData_ASC_Vertical_A(16,30);
?>
<div class="grid-row-1"><?php retrieveData_ASC_Horizontal_A(0,38);?></div>
<div class="grid-col-2"><?php retrieveData_ASC_Horizontal_A(0,16);?><br/><?php retrieveData_ASC_Horizontal_A(0,16);?><br/><?php retrieveData_ASC_Horizontal_A(0,16);?></div>