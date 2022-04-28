
<style type="text/css">
 .scrolly {
  /* width: 1400px;
    height:450px;*/
    /*border: thin solid black;*/
    /*overflow-: hidden; */
    overflow: auto;
}  
.scroll {
	   /*width: 600px;*/
      height:500px;
    /*border: thin solid black;*/
    /*overflow-: hidden; */
    overflow-y: auto;
}
</style>

<div class="scroll" id="zoom"> 	

<?php 
 if ($_GET['location']=='MUNICIPAL CEMETERY') {
 		include 'puntaMap.php';
 }else{
 		include 'puntaMap.php'; 
 }
?>

</div>

