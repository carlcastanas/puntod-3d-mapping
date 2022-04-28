<?php

  // $query="SELECT count(IMAGES) as 'counts'  FROM `tblpromopro` pr , `tblproduct` p  
  // WHERE pr.`PROID`=p.`PROID` and `PROBANNER`=1";
  // $mydb->setQuery($query);
  // $cur = $mydb->loadResultList(); 
  // foreach ($cur as $result) {
  // $maxrow = $result->counts; 
  // }
 
?>
 
<style type="text/css">
 .item {
   width: 100%;

 }
 .item img  {
    width: 100%;
    height: 100%;
 }
</style>
     <header id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active"> 
                    <img  src="<?php echo web_root ;?>img/oldcemeterybanner.png"/>  
                <div class="carousel-caption">
                    <h1>Geographic Information System for Cemetery in Nasugbu Batangas</h1>
                </div>
            </div> 
        </div>
    </header>