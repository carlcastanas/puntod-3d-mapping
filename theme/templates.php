<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?> | Geographic Information System for Cemetery in Nasugbu Batangas </title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
 <link rel="icon" href="<?php echo web_root; ?>img/favicon.png" type="image/x-icon">  
 
 <style type="text/css">

.p {

  color: white;
   margin-bottom: 0;
  margin-top: 0;
  /*padding: 0;*/
  /*float: right;*/
  list-style: none;
}

.p > a { 
  color: white;
  /*text-align: center;*/
  margin-bottom: 0;
  margin: 0;
  padding: 0;
  text-decoration:none;
  background-color:  #0000FF;
}
.p > a:hover ,
.p > a:focus {
   color: black; 
   text-decoration:none;
   background-color: #2d52f2;
}


 
.title-logo  {
    color:black;
    text-decoration:none;
    font-size: 50px;
    font-family: "broadway";
    /*font-style: bold;*/
    padding: 0;
    margin: 0;
    top: 0;
  
  }
.title-logo:hover {
  color: blue; 
  text-decoration:none; 
}
.carttxtactive {
  color: red;
  font-style: bold;
  box-shadow: red;

}
.carttxtactive:hover {
   color: white;
}

</style>

<?php
if (isset($_SESSION['gcCart'])){
  if (count($_SESSION['gcCart'])>0) {
    $cart = '<label class="label label-danger">'.count($_SESSION['gcCart']) .'</label>';
  } 
 
} 
 ?>
 
<script type="text/javascript">
   

</script>
</head>

<body style="background-color:#e0e4e5" onload="totalprice()" >

<div class="navbar-fixed-top navbar-inverse  "    role="navigation">
  <div class="container">
    <div class="navbar-header">
          <h5 class="navbar-menu p" >Geographic Information System for Cemetery in Nasugbu Batangas</h5>
         <button type="button" class="navbar-toggle btn-xs p" data-toggle="collapse" data-target=".smMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
    </div>
      <div  class="collapse navbar-collapse  smMenu "> 

        <ul class="navbar-nav p navbar-left tooltip-demo" style="margin-left:-8%;"> 
            <li class="dropdown dropdown-toggle ">
              <a  data-toggle="tooltip" data-placement="bottom" title="Cemetery Mapping and Information System"   href="#"> 
               <i class="fa fa-info fa-fw"> </i>   
              </a>
            </li> 
          </ul>
         
      </div>

  </div>
</div>


 <div class=" " style=" margin-top:-2%"> 
  <!-- <div class="col-md-10 col-md-offset-1 " >  -->
 
   
    <div class="col-md-12" style="margin-bottom: 9px; ">
     <div class="row ">
        <?php require_once 'banner.php'; ?>
     </div>  
    </div>

   </div>

 <div class="navbar navbar-static-top navbar-inverse  "    role="navigation">
    
      <div class="container ">
        <div class="navbar-header"> 
            <div class="navbar-menu p" >Menu</div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bigMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 

       <!--  <a class="navbar-brand"  href="<?php echo web_root; ?>index.php" title="View Sites">GC Appliance Centrum Corp</a> -->
        </div>
<?php
  
  ?>
        <div class="collapse navbar-collapse bigMenu" style="float:left" > 
          <!-- <ul class="nav navbar-nav" style="margin-left:-4%;"    >  -->

          <ul class="nav navbar-nav" > 
            <li class="dropdown dropdown-toggle <?php echo ($_GET['q']=='') ? "active" : false;?> ">
              <a href="<?php echo web_root.'index.php'; ?>"> Home</a>
            </li>
            <li class="dropdown dropdown-toggle <?php echo ($_GET['q']=='person') ? "active" : false;?> ">
              <a href="<?php echo web_root.'index.php?q=person'; ?>"> Deceased Person</a>
            </li>
            <li class="dropdown-toggle <?php echo ($_GET['q']=='mapa') ? "active" : false;?>">
              <a href="<?php echo web_root.'index.php?q=mapa';  ?>"> Map</a>
            </li>
             <li class="dropdown-toggle <?php echo ($_GET['q']=='about') ? "active" : false;?>">
              <a href="<?php echo web_root.'index.php?q=about';  ?>"> About Us</a>
            </li>
           
          </ul>           
        </div> 
        <!--/.navbar-collapse --> 
    </div> 
   <!-- /.nav-collapse --> 
  </div> 
 <!-- /.container -->
 
  
<div class="container"> 
   <!-- start content --> 
        <div class="row"> 
          <div id="page-wrapper">
               <?php

          if($title=='Profile' or $title=='Track Order' ){
                echo ' <div class="row">';

                require_once $content;
                echo ' </div><br/>';
     
              }else{
  // check_message(); ?>

<?php
if (isset($_GET['category'])) {
  # code...
   $categid = isset($_GET['category']) ? $_GET['category'] : ''; 
  $sql="SELECT * FROM `tbltype` WHERE `TYPEID`=".$categid;
  $mydb->setQuery($sql);
  $cur = $mydb->loadSingleResult();
}
 

?>
   <?php if (!isset($_GET['graveno'])): ?>
            <div class="row">
              <div class="col-lg-3"> 
                  <?php 
                    require_once "leftbar.php"; 
                  ?>
              </div>
              <div class="col-lg-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                  <b><?php   
                       echo  $title . (isset($cur->TYPES) ?  '  |  ' .$cur->TYPES : '' )?></b> 
                  </div>
                  <div class="panel-body"> 
                    <?php require_once $content; ?> 
                  </div>
                <!--   <div class="panel-footer">
                      Panel Footer
                  </div> --> 
              </div>
            </div> 
           <div class="col-lg-3"> 
                  <?php 
                    require_once "sidebar.php"; 
                  ?>
             </div>

        </div>
         <?php endif ?>
        <?php if (isset($_GET['graveno'])): ?>
          
      
        <div class="row">
           <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="panel-heading">
                  <b>Map Section | <a  href="#" class="findgrave" style="color: red"><?php   
                       echo   (isset($_GET['name']) ?  $_GET['name'] : '' )?></a></b> 
                  </div>
                </div>
                    <div class="panel-body"> 
                 <?php 
                    require_once "map.php"; 
                  ?>
                </div>
              </div>
             </div>
        </div>
          <?php endif ?>
        <?php }

?>
       </div>
            
      </div>

  </div> 
 <footer class="panel-footer" style="background-color:#000;color:white" >
            <p align="left" >&copy; Geographic Information System for Cemetery in Nasugbu Batangas</p>
         </footer>
<!-- end of page  -->


 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>
<!-- end -->
 
    <!-- jQuery -->
    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript --> 
    <!-- DataTables JavaScript -->
    <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

  <script src="<?php echo web_root; ?>angularjs/angular.min.js"></script>
  <script src="<?php echo web_root; ?>angularjs/angular-animate.min.js"></script>
    <script src="<?php echo web_root; ?>angularjs/angular-aria.min.js"></script>
      <script src="<?php echo web_root; ?>angularjs/angular-messages.min.js"></script>

    <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script>  
<script>
$(function() {
  $("[autofocus]").on("focus", function() {
    if (this.setSelectionRange) {
      var len = this.value.length * 2;
      this.setSelectionRange(len, len);
    } else {
      this.value = this.value;
    }
    this.scrollTop = 999999;
  }).focus();
});

 

 var currentZoom = 1.0;

    $(document).ready(function () {
      $('#zoom').animate({ 'zoom': currentZoom}, 'slow');

        $('#btn_ZoomIn').click(
            function () {
                $('#zoom').animate({ 'zoom': currentZoom += .1 }, 'slow');
            })
        $('#btn_ZoomOut').click(
            function () {
                $('#zoom').animate({ 'zoom': currentZoom -= .1 }, 'slow');
            })
        $('#btn_ZoomReset').click(
            function () {
                currentZoom = 1.0
                $('#zoom').animate({ 'zoom': 1 }, 'slow');
            })
    });
</script>
 <script type="text/javascript">

  angular.module('gridListDemo1', ['ngMaterial'])
.controller('AppCtrl', function($scope) {});

  $(document).on("click", ".proid", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

      });

</script>
 <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>



<script type="text/javascript">
setInterval(function(){autoloadpage()},3000); 
function autoloadpage() {
    $.ajax({
        type: "POST",
        url : "addtocart.php?action=validatecartbutton",
        data :{validate:"yes"},
        success : function(data){
            $("#reloadform").html(data);
        }
    }); 

  
} 

setInterval(function(){autoloadcartno()},3000); 
function autoloadcartno() { 
     $.ajax({
        type: "POST",
        url : "addtocart.php?action=validatenoitemsincart",
        data :{validate:"yes"},
        success : function(data){
            $("#noitemincart").html(data);
        }
    }); 
}
setInterval(function(){autoloadcartno2()},3000); 
function autoloadcartno2() { 
     $.ajax({
        type: "POST",
        url : "addtocart.php?action=validatenoitemsincart",
        data :{validate:"yes"},
        success : function(data){
            $("#noitemincart2").html(data);
        }
    }); 
}
  $(document).on("change",".POSDESIGNID", function(){
       var pid = document.getElementById("DESIGNID").value;
       // alert(pid)
       $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "addtocart.php?action=addtocart",             
        dataType: "text",   //expect html to be returned  
        data:{PID:pid},               
        success: function(data){         
          // alert(data);
          $("#publicshowcart").html(data);
        }

    });

  });

// $(document).on("focusout",".cartqty", function(){
//        var pid = $(this).data('id');
//        var qty = document.getElementById(pid+'qty').value;
//        // alert(pid);
//        // alert(qty);
//        $.ajax({    //create an ajax request to load_page.php
//         type:"POST",
//         url: "addtocart.php?action=editcart",             
//         dataType: "text",   //expect html to be returned  
//         data:{PID:pid,QTY:qty},               
//         success: function(data){         
//           // alert(data);
//           $("#publicshowcart").html(data);
//         }
//     });

//   });
$(document).on("keyup",".cartqty", function(event){
  event.preventDefault();
// ON ENTER EVENT
  if (event.keyCode === 13) {
         var pid = $(this).data('id');
       var qty = document.getElementById(pid+'qty').value;
       // alert(pid);
       // alert(qty);
       $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "addtocart.php?action=editcart",             
        dataType: "text",   //expect html to be returned  
        data:{PID:pid,QTY:qty},               
        success: function(data){         
          // alert(data);
          $("#publicshowcart").html(data);
        }
      });
    }

      

  });

$(document).on("click",".delcart", function(){
       var pid = $(this).data('id');
       // alert(pid)
       $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "addtocart.php?action=deletecart",             
        dataType: "text",   //expect html to be returned  
        data:{PID:pid},               
        success: function(data){         
          // alert(data);
          $("#publicshowcart").html(data);
        }

    });

  });

$(document).on("click",".cartqty", function(){
  $(this).select();
});


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var BRGY = document.getElementById('BRGY').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&BRGY="+BRGY+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       

//        In jQuery, the following would work:

// $("#id_of_textbox").keyup(function(event) {
//     if (event.keyCode === 13) {
//         $("#id_of_button").click();
//     }
// });
// Or in plain JavaScript, the following would work:

// document.getElementById("id_of_textbox")
//     .addEventListener("keyup", function(event) {
//     event.preventDefault();
//     if (event.keyCode === 13) {
//         document.getElementById("id_of_button").click();
//     }
// });

  </script>     

</body>
</html>