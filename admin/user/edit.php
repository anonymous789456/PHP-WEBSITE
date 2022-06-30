<?php  
     if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

  @$USERID = $_GET['id'];
    if($USERID==''){
  redirect("index.php");
}
  $user = New User();
  $singleuser = $user->single_user($USERID);

?> 

 <form class="form-horizontal span6" style="color: whitesmoke; background-color: #313131; border: 1px solid white; border-radius: 20px;" action="controller.php?action=edit" method="POST">

          <fieldset>
            <legend style="padding-top: 15px; padding-bottom: 9px;text-align: center;margin: 20px 6px 20px;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;
    color: whitesmoke;"><i class="fa fa-edit fa-fw"></i> Update User Account</legend>
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="USERID" name="USERID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singleuser->USERID; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->      
                  
                  <div class="form-group" style="margin-left: 115px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_NAME" style="font-size: 17px;">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                            "Account Name" type="text" value="<?php echo $singleuser->U_NAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 115px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_USERNAME" style="font-size: 17px;">Username:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                            "Email Address" type="text" value="<?php echo $singleuser->U_USERNAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 115px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_PASS" style="font-size: 17px;">Password:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder=
                            "Account Password" type="Password" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="margin-left: 115px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_ROLE" style="font-size: 17px;">Role:</label>

                      <div class="col-md-8" style="width: 170px;">
                       <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                          <option value="Administrator"  <?php echo ($singleuser->U_ROLE=='Administrator') ? 'selected="true"': '' ; ?>>Administrator</option>
                          <option value="Staff" <?php echo ($singleuser->U_ROLE=='Staff') ? 'selected="true"': '' ; ?>>Staff</option> 
                          <!-- <option value="Customer">Customer</option> -->
                          <option value="Encoder" <?php echo ($singleuser->U_ROLE=='Encoder') ? 'selected="true"': '' ; ?>>Partnership</option>
                        </select> 
                      </div>
                    </div>
                  </div>

            
             <div class="form-group" style="margin-left: 300px;"s>
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary " name="save" type="submit" style="font-size: 15px; border-radius: 20px;"><span class="fa fa-save fw-fa"></span> Save</button>
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->