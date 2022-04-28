<?php
session_start(); //before we store information of our member, we need to start first the session
	
	//create a new function to check if the session variable member_id is on set
	function logged_in() {
		return isset($_SESSION['USERID']);
        
	}
	//this function if session member is not set then it will be redirected to login.php
	function confirm_logged_in() {
		if (!logged_in()) {?>

			<script type="text/javascript">
				window.location = "login.php";
			</script>

		<?php
		}
	}
function admin_confirm_logged_in() {
		if (@!$_SESSION['USERID']) {?>
			<script type="text/javascript">
				window.location ="login.php";
			</script>

		<?php
		}
	}

	function studlogged_in() {
		return isset($_SESSION['CUSID']);
        
	}
	function studconfirm_logged_in() {
		if (!studlogged_in()) {?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>

		<?php
		}
	}

	function message($msg="", $msgtype="") {
	  if(!empty($msg)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['message'] = $msg;
	    $_SESSION['msgtype'] = $msgtype;
	  } else {
	    // then this is "get message"
			return $message;
	  }
	}
		function check_message(){
  
    if(isset($_SESSION['message'])){
      if(isset($_SESSION['msgtype'])){
        if ($_SESSION['msgtype']=="info"){
          echo  '<label class="alert alert-info" style="width:100%;padding:5px">'. $_SESSION['message'] . '</label>';
           
        }elseif($_SESSION['msgtype']=="error"){
          echo  '<label class="alert alert-danger" style="width:100%;padding:5px">' . $_SESSION['message'] . '</label>';
                  
        }elseif($_SESSION['msgtype']=="success"){
          echo  '<label class="alert alert-success" style="width:100%;padding:5px">' . $_SESSION['message'] . '</label>';
        } 
        unset($_SESSION['message']);
        unset($_SESSION['msgtype']);
        }
  
    }

 }

function cusmsg($num=""){
  if(!empty($num)){
    $_SESSION['gcNotify'] = $num;
  }else{
    return $gcNotify;
  }
}

function notifycheck(){
  if(isset($_SESSION['gcNotify'])){
      echo $_SESSION['gcNotify'];
  }else{
      echo "";
  }
  unset($_SESSION['gcNotify']);
}


 function keyactive($key=""){
 	 if(!empty($key)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['active'] = $key; 
	  } else {
	    // then this is "get message"
			return $keyactive;
	  }
  
 }

 function check_active(){
 	 if(isset($_SESSION['active'])){
         switch ($_SESSION['active']) {

        case 'basicInfo' :
        $_SESSION['basicInfo']   = "active";
        break;
        case 'otherInfo' :
        $_SESSION['otherInfo']= 'active';
        break;
        
        case 'work' :
        $_SESSION['work'] = 'active' ;
        break;
      }
      }else{

      	  $active = (isset($_GET['active']) && $_GET['active'] != '') ? $_GET['active'] : '';
                 switch ($active) {

                  case 'otherInfo' :
                   $_SESSION['otherInfo']= 'active';
        			break;

                  case 'work' :
                   $_SESSION['work'] = 'active' ;
       				 break;

                  default :

                    $_SESSION['basicInfo']   = "active";
       			 break;
 
        
      }
 }
}

function admin_product_exists($pid,$q){
    // $pid=intval($pid); 
    $max=count($_SESSION['admin_gcCart']);
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($pid==$_SESSION['admin_gcCart'][$i]['pid']){
          if($q>0  && $q<=999){
            # code...
            $flag=1;
             $_SESSION['admin_gcCart'][$i]['qty']= $_SESSION['admin_gcCart'][$i]['qty'] + $q;
             $_SESSION['admin_gcCart'][$i]['subtotal']= $_SESSION['admin_gcCart'][$i]['price'] * $_SESSION['admin_gcCart'][$i]['qty'];
              // message("{$q} Item added in the cart.","success");
              break;
          }
        $flag=1;
        // message("Item is already in the cart.","error");
        break;  
      }
    }
    return $flag;
  }
 function admin_addtocart($pid,$description,$price,$q,$subtotal){
    if($pid<1 or $q<1) return;
    if($q<1) return;
    if (!empty($_SESSION['admin_gcCart'])){


    if(is_array($_SESSION['admin_gcCart'])){
      if(admin_product_exists($pid,$q)) return;
      $max=count($_SESSION['admin_gcCart']);
      $_SESSION['admin_gcCart'][$max]['pid']=$pid;
      $_SESSION['admin_gcCart'][$max]['description']=$description;
      $_SESSION['admin_gcCart'][$max]['qty']=$q;
      $_SESSION['admin_gcCart'][$max]['price']=$price;
      $_SESSION['admin_gcCart'][$max]['subtotal']=$subtotal;
    }
    else{
      $_SESSION['admin_gcCart']=array();
      $_SESSION['admin_gcCart'][0]['pid']=$pid;
      $_SESSION['admin_gcCart'][0]['description']=$description;
      $_SESSION['admin_gcCart'][0]['qty']=$q;
      $_SESSION['admin_gcCart'][0]['price']=$price;
      $_SESSION['admin_gcCart'][0]['subtotal']=$subtotal;
    }
}else{
     $_SESSION['admin_gcCart']=array();
      $_SESSION['admin_gcCart'][0]['pid']=$pid;
      $_SESSION['admin_gcCart'][0]['description']=$description;
      $_SESSION['admin_gcCart'][0]['qty']=$q;
      $_SESSION['admin_gcCart'][0]['price']=$price;
      $_SESSION['admin_gcCart'][0]['subtotal']=$subtotal;
}
  
     // message("{$q} Item added in the cart.","success");
}
function admin_removetocart($pid){
  // $pid=intval($pid);
  $max=count($_SESSION['admin_gcCart']);
  for($i=0;$i<$max;$i++){
    if($pid==$_SESSION['admin_gcCart'][$i]['pid']){
      unset($_SESSION['admin_gcCart'][$i]);
      break;
    }
  }
  $_SESSION['admin_gcCart']=array_values($_SESSION['admin_gcCart']);
}


 function admin_editproduct($pid,$q){
    // $pid=intval($pid); 
  if($q<1) return;
    if (!empty($_SESSION['admin_gcCart'])){
       if(is_array($_SESSION['admin_gcCart'])){
          $max=count($_SESSION['admin_gcCart']);
          $flag=0;
          for($i=0;$i<$max;$i++){
            if($pid==$_SESSION['admin_gcCart'][$i]['pid']){
                if($q>0  && $q<=999){
                  # code...
                  $flag=1;
                   $_SESSION['admin_gcCart'][$i]['qty']= $q;
                   $_SESSION['admin_gcCart'][$i]['subtotal']= $_SESSION['admin_gcCart'][$i]['price'] * $_SESSION['admin_gcCart'][$i]['qty'];
                    break;
                }
              // $flag=1;
              // message("Item is already in the cart.","error");
              // break;
            }
          }
          return $flag;
        }
      }
    }




    function product_exists($pid,$q){
    // $pid=intval($pid); 
    $max=count($_SESSION['gcCart']);
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($pid==$_SESSION['gcCart'][$i]['pid']){
          if($q>0  && $q<=999){
            # code...
            $flag=1;
             $_SESSION['gcCart'][$i]['qty']= $_SESSION['gcCart'][$i]['qty'] + $q;
             $_SESSION['gcCart'][$i]['subtotal']= $_SESSION['gcCart'][$i]['price'] * $_SESSION['gcCart'][$i]['qty'];
              // message("{$q} Item added in the cart.","success");
              break;
          }
        $flag=1;
        // message("Item is already in the cart.","error");
        break;  
      }
    }
    return $flag;
  }
 function addtocart($pid,$description,$price,$q,$subtotal){
    if($pid<1 or $q<1) return;
    if($q<1) return;
    if (!empty($_SESSION['gcCart'])){


    if(is_array($_SESSION['gcCart'])){
      if(product_exists($pid,$q)) return;
      $max=count($_SESSION['gcCart']);
      $_SESSION['gcCart'][$max]['pid']=$pid;
      $_SESSION['gcCart'][$max]['description']=$description;
      $_SESSION['gcCart'][$max]['qty']=$q;
      $_SESSION['gcCart'][$max]['price']=$price;
      $_SESSION['gcCart'][$max]['subtotal']=$subtotal;
    }
    else{
      $_SESSION['gcCart']=array();
      $_SESSION['gcCart'][0]['pid']=$pid;
      $_SESSION['gcCart'][0]['description']=$description;
      $_SESSION['gcCart'][0]['qty']=$q;
      $_SESSION['gcCart'][0]['price']=$price;
      $_SESSION['gcCart'][0]['subtotal']=$subtotal;
    }
}else{
     $_SESSION['gcCart']=array();
      $_SESSION['gcCart'][0]['pid']=$pid;
      $_SESSION['gcCart'][0]['description']=$description;
      $_SESSION['gcCart'][0]['qty']=$q;
      $_SESSION['gcCart'][0]['price']=$price;
      $_SESSION['gcCart'][0]['subtotal']=$subtotal;
}
  
     // message("{$q} Item added in the cart.","success");
}
function removetocart($pid){
  // $pid=intval($pid);
  $max=count($_SESSION['gcCart']);
  for($i=0;$i<$max;$i++){
    if($pid==$_SESSION['gcCart'][$i]['pid']){
      unset($_SESSION['gcCart'][$i]);
      break;
    }
  }
  $_SESSION['gcCart']=array_values($_SESSION['gcCart']);
}


 function editproduct($pid,$q){
    // $pid=intval($pid); 
  if($q<1) return;
    if (!empty($_SESSION['gcCart'])){
       if(is_array($_SESSION['gcCart'])){
          $max=count($_SESSION['gcCart']);
          $flag=0;
          for($i=0;$i<$max;$i++){
            if($pid==$_SESSION['gcCart'][$i]['pid']){
                if($q>0  && $q<=999){
                  # code...
                  $flag=1;
                   $_SESSION['gcCart'][$i]['qty']= $q;
                   $_SESSION['gcCart'][$i]['subtotal']= $_SESSION['gcCart'][$i]['price'] * $_SESSION['gcCart'][$i]['qty'];
                    break;
                }
              // $flag=1;
              // message("Item is already in the cart.","error");
              // break;
            }
          }
          return $flag;
        }
      }
    }

 

function header_subheader($header,$subheader){

  $setheader = (isset($header) && $header != '') ? $header : '';

switch ($setheader) {
 

  case 'product' :
       echo $title="Products"  . (isset($subheader) ?  '  |  ' .$subheader: '' );   
   
  case 'cart' :
       echo $title="Cart List";   
    break;
  case 'profile' :
      echo  $title="Profile";  
    break;
  case 'orderdetails' : 
    echo $title = "Cart List/Order Details";
 
     break;

  case 'billing' :   
      echo $title = "Cart List/Order Details/Billing Details";
    break;

  case 'contact' :
      echo  $title="Contact Us";   
    break;
  case 'single-item' :
      echo  $ $title="Products"  . (isset($subheader) ?  '  |  ' .$subheader: '' ); 
    break;
  default :
   echo   $title="Home";  
  
}
}



?>
