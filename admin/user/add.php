                      <?php 
                       if (!isset($_SESSION['USERID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" style="color: whitesmoke; background-color: #313131; border: 1px solid white; border-radius: 20px;" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="" style="padding-bottom: 9px;text-align: center;margin: 20px 6px 20px;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;color: whitesmoke;"><i class="fa fa-user" aria-hidden="true"></i> Add New User</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label>

                      <div class="col-md-8"> --> 
                        <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                    <!--   </div>
                    </div>
                  </div> -->           
                   <div class="form-group" style="margin-left: 95px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_NAME" style="font-size: 17px;">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                            "Account Name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 95px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_USERNAME" style="font-size: 17px;">Username:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                            "Account Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 95px;">
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
                  <div class="form-group" style="margin-left: 95px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_ROLE" style="font-size: 17px;">Role:</label>

                      <div class="col-md-8" style="width: 170px;">
                       <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                          <option value="Administrator"  >Administrator</option>
                          <option value="Staff"  >Staff</option> 
                          <!-- <option value="Customer">Customer</option> -->
                          <option value="Encoder" >Partnership</option>
                        </select> 
                      </div>
                    </div>
                  </div>


            
             <div class="form-group" style="margin-left: 290px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" style="font-size: 15px; border-radius: 20px;"><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>

               
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
       