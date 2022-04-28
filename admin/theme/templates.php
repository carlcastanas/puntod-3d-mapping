<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?></title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
 
   <link href="<?php echo web_root; ?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">

<link href="<?php echo web_root; ?>admin/css/ekko-lightbox.css" rel="stylesheet">
<!-- <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/fixnmix.js"></script> / -->
 <link rel="icon" href="<?php echo web_root; ?>img/favicon.png" type="image/x-icon">  

<link rel="stylesheet" href="<?php echo web_root; ?>admin/select2/select2.min.css">
</head>


  <?php
   admin_confirm_logged_in();
  ?> 

  <?php
    $query = "SELECT * FROM tbltransaction WHERE TRANSTATUS = 'Pending'";
    $mydb->setQuery($query);
    $cur = $mydb->executeQuery();
    $rowscount = $mydb->num_rows($cur);
    $res = isset($rowscount)? $rowscount : 0;

    if($res>0){
    $order = '<label  class="label label-danger">'.$res.'</label>';
    }else{
        $order = '<label class="label label-danger">'.$res.'</label>';
    }
?>
      
<body>
 
   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top  " role="navigation"  >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <img src="<?php echo web_root; ?>img/adminloginlogo.png" style="height: px;"> -->
                 <a class="navbar-brand"  href="<?php echo web_root; ?>admin/index.php" >Geographic Information System for Cemetery in Nasugbu Batangas</a>  
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"> 
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-plus fa-fw"></i> New  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user"> 
                     <li><a href="<?php echo web_root; ?>admin/person/index.php?view=add"><i class="fa fa-users fa-fw"></i> Person</a>
                        </li>
                        <li><a href="<?php echo web_root; ?>admin/category/index.php?view=add"><i class="fa fa-list fa-fw"></i> Section</a>
                        </li>
                         </li>
                            <?php if ($_SESSION['U_ROLE']=='Administrator') {
                            # code...
                        ?>
                         <li><a href="<?php echo web_root; ?>admin/user/index.php?view=add"><i class="fa fa-user  fa-fw"></i> User</a>
                            </li>
                        <?php }?>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
<?php
 $user = New User();
$singleuser = $user->single_user($_SESSION['USERID']);

?> 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Hi, <?php echo $_SESSION['U_NAME']; ?> <img title="profile image" width="25px" height="25px" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                            
                    </a>
                    <ul class="dropdown-menu dropdown-acnt">

                          <div class="divpic"> 
                            <a href="" data-target="#usermodal"  data-toggle="modal" > 
                                <img title="profile image" width=70 height="70" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                            </a>
                          </div> 
                    

                      <div class="divtxt">
                        <li><a href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['USERID']; ?>"> <?php echo $_SESSION['U_NAME']; ?> </a>
                      <li><a title="Edit" href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['USERID']; ?>"  >Edit My Profile</a>
                                    
                        </li>
                         </li>
                           <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                        </li> 
                  </div>
                     
                         
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul> 
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li>
                             <a href="<?php echo web_root; ?>admin/person/index.php"><i class="fa fa-users fa-fw"></i>Deceased Persons </a>
           
                        </li>
                      
                        <li>
                             <a href="<?php echo web_root; ?>admin/category/index.php"><i class="fa fa-list fa-fw"></i>Section </a>
           
                        </li>
                        
                        <?php if ($_SESSION['U_ROLE']=='Administrator') {
                            # code...
                        ?> 
                         <li>
                             <a href="<?php echo web_root; ?>admin/import/index.php" ><i class="fa fa-gear fa-fw"></i>Import Excel File</a>
            
                        </li> 
                          <li>
                            <a href="<?php echo web_root; ?>admin/user/index.php" ><i class="fa fa-user fa-fw"></i> Manage Users </a>
                          
                        </li> 
                         <li>
                             <a href="<?php echo web_root; ?>admin/report/index.php" ><i class="fa fa-list fa-fw"></i>Report</a>
            
                        </li> 
                        
                 <?php }  ?>
 
 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

            <!-- Modal -->
                    <div class="modal fade" id="usermodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                            <div class="col-md-12">
                                                <div class="rows">
                                                    <img title="profile image" width="500" height="360" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                          
                                                </div>
                                            </div><br/>
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="MIDNO" id="MIDNO" value="<?php echo $_SESSION['USERID']; ?>">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file">
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
  

  <div id="page-wrapper">
                  
            <div class="row" >
      
                <div class="col-lg-12" style="margin-top: 2%"> 
                    <?php 
                    if ($title<>'Administrator Panel'){
                       echo   '
                    <p class="breadcrumb" >  <a href="'. web_root.'admin/index.php" title="Administrator Panel" >Administrator Panel</a>  / 
                        <a href="index.php" title="'. $title.'" >'. $title.'</a> 
                        '.(isset($header) ? ' / '. $header : '') .'   </p>'  ;
                    } ?>
                       
                    <?php   check_message();  ?>   
                  <?php require_once $content; ?>
                    
                </div>
                       <!-- /.col-lg-12 -->

            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 
      
 


  <!-- jQuery -->
  <script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/metisMenu.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.date.extensions.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.extensions.js"></script> 

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/ekko-lightbox.js"></script>
  <script src="<?php echo web_root; ?>admin/js/sb-admin-2.js"></script> 

  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/janobe.js"></script> 
  <script src="<?php echo web_root; ?>admin/select2/select2.full.min.js"></script>

  <script type="text/javascript">
  $(".select2").select2();

       //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //Money Euro
      $("[data-mask]").inputmask();


  $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });

     $('#example').DataTable({
                responsive: true ,
                  "sort": false
        });

    });

  $(document).on("click", ".DESIGNID", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

  }); 


$(document).on("change",".POSDESIGNID", function(){
       var pid = document.getElementById("DESIGNID").value;
       // alert(pid)
       $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "controller.php?action=addtocart",             
        dataType: "text",   //expect html to be returned  
        data:{PID:pid},               
        success: function(data){         
          // alert(data);
          $("#showcart").html(data);
        }

    });

  });

$(document).on("focusout",".cartqty", function(){
       var pid = $(this).data('id');
       var qty = document.getElementById(pid+'qty').value;
       // alert(pid);
       // alert(qty);
       $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "controller.php?action=editcart",             
        dataType: "text",   //expect html to be returned  
        data:{PID:pid,QTY:qty},               
        success: function(data){         
          // alert(data);
          $("#showcart").html(data);
        }
    });

  });

$(document).on("click",".delcart", function(){
       var pid = $(this).data('id');
       // alert(pid)
       $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "controller.php?action=deletecart",             
        dataType: "text",   //expect html to be returned  
        data:{PID:pid},               
        success: function(data){         
          // alert(data);
          $("#showcart").html(data);
        }

    });

  });

$(document).on("click",".cartqty", function(){
  $(this).select();
});


 
$('.date_pickerfrom').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0 

    });


$('.date_pickerto').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

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
    forceParse: 0,
     changeMonth: true,
      changeYear: true,
      yearRange: '1945:'+(new Date).getFullYear() 
});




</script>  
 
</body>
<footer><div style="text-align: center;">Copyrignt &copy; Geographic Information System for Cemetery in Nasugbu Batangas</div></footer>
</html>