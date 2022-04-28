 <?php
  $customer = New customer;
  $res = $customer->single_customer($_SESSION['CUSID']);
 
  ?>  
<h3>Your Account</h3>
  <form  class="form-horizontal span6" action="customer/controller.php?action=edit" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data">
          <div class="col-lg-12" style="margin-top:5%;">
          <div class="row">
             <div class="col-lg-6">
            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-4 control-label" for=
                "FULLNAME">Full Name:</label>
                  <div class="col-md-8">
                   <input class="form-control input-sm" id="FULLNAME" name="FULLNAME" placeholder=
                      "Full Name" type="text" value="<?php echo $res->FULLNAME; ?>">
                </div>
              </div>
            </div>
           </div>       

          
            <div class="col-lg-6">
             
             <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-4 control-label" for=
                "ADDRESS">Address:</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                      "Address" type="text" value="<?php echo $res->ADDRESS; ?>">
                </div>
              </div>
            </div>

           </div>  


            
             
            <div class="col-lg-6">
              <div class="form-group">
                <div class="col-md-12">
                  <label class="col-md-4 control-label" for=
                  "CUSUNAME">Username:</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="CUSUNAME" name="CUSUNAME" placeholder=
                        "Username" type="text" value="<?php echo $res->CUSUSERNAME; ?>">
                  </div>
                </div>
              </div> 
           </div>  
            <div class="col-lg-6">
               <div class="form-group">
                  <div class="col-md-12">
                    <label class="col-md-4 control-label" for=
                    "CUSPASS">Password:</label>

                    <div class="col-md-8">
                       <input class="form-control input-sm" id="CUSPASS" name="CUSPASS" placeholder=
                          "Password" type="password" value="" required="true"><span></span>
                          <!--  <p>Note</p>
                          Password must be atleast 8 to 15 characters. Only letter, numeric digits, underscore and first character must be a letter.
                       -->
                    </div>
                  </div>
                </div>
           </div> 
            <div class="col-lg-6">
             
                <div class="form-group">
                <div class="col-md-12">
                  <label class="col-md-4 control-label" for=
                  "CONTACTNO">Contact#:</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="CONTACTNO" name="CONTACTNO" placeholder=
                        "Contact Number" type="text" value="<?php echo $res->CONTACTNO; ?>">
                  </div>
                </div>
              </div>

           </div> 



          <div class="col-lg-6">
            <div class="form-group">
                  <div class="col-md-12">
                    <label class="col-md-4 control-label" for=
                    "EMAILADDRESS">Email Address:</label>

                    <div class="col-md-8">
                       <input class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder=
                          "Email Address" type="email" value="<?php echo $res->EMAILADDRESS; ?>">
                    </div>
                  </div>
                </div>
           </div>
           </div>  
          </div>
          
           

          <div class="col-lg-6"> 
              <div class="form-group">
                <div class="col-md-12">
                   <label class="col-md-4" align = "right"for=
                  "btn"></label>
                  <div class="col-md-8">
                    <input type="submit"  name="save"  value="Save"  class="submit btn btn-primary btn-lg"  />
                      
                </div>
              </div>
            </div>
         </div>     
  </form>   
  
   
                
 
                  

                               
                





 
              








                   
        
        </form>