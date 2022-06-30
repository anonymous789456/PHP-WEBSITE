 <!-- sign up modal -->
 <div class="modal fade" id="smyModal" tabindex="-1">
 
 <div class="modal-dialog" >
  <div class="modal-content">
    <div class="modal-header">
     
      <div class="modal-body">
         
              <!-- Nav tabs -->
              <div>
              <ul class="nav nav-pills" style="margin-left: 25%;">
                  <li class="active"><a class="btn btn-default check_out" href="#home" data-toggle="tab" style="border-radius: 20px; width: 80px;">Login</a>
                  </li>
                  <li><a class="btn btn-default check_out" href="#profile" data-toggle="tab" style="border-radius: 20px; width: 100px;">Sign Up</a>
                  </li>
                  
              </ul>
              <!-- Tab panes  login panel-->
              <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                      <!-- <h4>Login Tab</h4>  -->
                       <div class="panel panel-pup">
                        <div class="panel-heading" style="font-weight: bold; text-align: center; padding-top: 30px; font-size: 20px; border-bottom: 1px solid #313131; color: #313131;">
                            Login your account
                        </div>
                        <div class="panel-body">

                           <form class="form-horizontal span6" name=""  action="login.php" method="POST" style="margin-left: 25px; margin-top: 20px;">
                              <input class="proid" type="hidden" name="proid" id="proid" value="">
                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_USERNAME" style="font-size: 20px;">Username:</label>
                                    
                                    <div class="col-md-8">
                                       <input   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input-sm" > 
                             
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_PASS" style="font-size: 20px;">Password:</label>
                                    
                                    <div class="col-md-8">
                                     <input name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input-sm">
                            
                                    </div>
                                  </div>
                                </div>

                                  <div class="form-group" style="text-align: center;">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "FIRSTNAME"> </label>
                                    
                                    <div class="col-md-8">
                                    <button type="submit" id="modalLogin" name="modalLogin" class="btn btn-pup" style="color: #0ba3b8; border-color: #0ba3b8; border-radius: 15px;"><span class="glyphicon glyphicon-log-in "></span>   Login</button> 
                                     <button class="btn btn-default" data-dismiss="modal" type="button" style="color: #d10000; border-color: #d10000; border-radius: 15px;">Close</button> 
                                    </div>
                                  </div>
                                </div>

 
                            </form>

                       </div>
                        
                    </div> 
                  </div>
                  <!-- end login panel -->

                  <!-- sign in panel -->
                  <div class="tab-pane fade" id="profile">
                      <!-- <h4>Customer Details</h4>  --> 

                           <form  class="form-horizontal span6" action="customer/controller.php?action=add" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data">
                                <div class="panel panel-pup">
                                    <div class="panel-heading" style="font-weight: bold; text-align: center; padding-top: 30px; font-size: 20px; border-bottom: 1px solid #313131; color: #313131;">
                                       Customer Details
                                    </div>
                                     <div class="panel-body" style="margin-left: 25px; margin-top: 20px;">
                                      <input class="proid" type="hidden" name="proid" id="proid" value="">
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "FNAME" style="font-size: 15px; font-weight: bold;">First Name:</label>
                                          <!-- <input  id="CUSTOMERID" name="CUSTOMERID"  type="HIDDEN" value="<?php echo $res->AUTO; ?>">  -->
                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                                                "First Name" type="text" value="">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "LNAME" style="font-size: 15px; font-weight: bold;">Last Name:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                                                "Last Name" type="text" value="">
                                          </div>
                                        </div>
                                      </div>

                                       <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "GENDER" style="font-size: 15px; font-weight: bold;">Gender:</label>

                                          <div class="col-md-8">
                                            <input  id="GENDER" name="GENDER" placeholder=
                                                "Gender" type="radio" checked="true" value="Male"><b> Male </b>
                                                <input   id="GENDER" name="GENDER" placeholder=
                                                "Gender" type="radio" value="Female"> <b> Female </b>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                            <div class="col-md-10">
                                              <label class="col-md-4 control-label" for=
                                              "PROVINCE" style="font-size: 15px; font-weight: bold;">Province:</label>

                                              <div class="col-md-8">
                                                 <input class="form-control input-sm" id="PROVINCE" name="PROVINCE" placeholder=
                                                    "Province Address" type="text" value="">
                                              </div>
                                            </div>
                                          </div>

                                       <div class="form-group">
                                            <div class="col-md-10">
                                              <label class="col-md-4 control-label" for=
                                              "CITYADD" style="font-size: 15px; font-weight: bold;">Municipality/City:</label>

                                              <div class="col-md-8">
                                                 <input class="form-control input-sm" id="CITYADD" name="CITYADD" placeholder=
                                                    "Municipality/City Address" type="text" value="">
                                              </div>
                                            </div>
                                          </div>

                                      <div class="form-group">
                                            <div class="col-md-10">
                                              <label class="col-md-4 control-label" for=
                                              "BRGYADD" style="font-size: 15px; font-weight: bold;">Barangay:</label>

                                              <div class="col-md-8">
                                                 <input class="form-control input-sm" id="BRGYADD" name="BRGYADD" placeholder=
                                                    "Barangay Address" type="text" value="">
                                              </div>
                                            </div>
                                          </div>

                                      <div class="form-group">
                                            <div class="col-md-10">
                                              <label class="col-md-4 control-label" for=
                                              "STREETADD" style="font-size: 15px; font-weight: bold;">Street/Purok:</label>

                                              <div class="col-md-8">
                                                 <input class="form-control input-sm" id="STREETADD" name="STREETADD" placeholder=
                                                    "Street/Purok Address" type="text" value="">
                                              </div>
                                            </div>
                                          </div>
 
                                  
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "CUSUNAME" style="font-size: 15px; font-weight: bold;">Username:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="CUSUNAME" name="CUSUNAME" placeholder=
                                                "Username" type="text" value="">
                                          </div>
                                        </div>
                                      </div> 
                                      
                                       <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "CUSPASS" style="font-size: 15px; font-weight: bold;">Password:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="CUSPASS" name="CUSPASS" placeholder=
                                                "Password" type="password" value=""><span></span>
                                          </div>
                                        </div>
                                      </div>
 
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "PHONE" style="font-size: 15px; font-weight: bold;">Contact Number:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                                                "+63 0000000000" type="number" value="">
                                          </div>
                                        </div>
                                      </div>

                          
                                      
                                       <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8">
                                        <p>  I <input type="checkbox" id="conditionterms" name="conditionterms" value="checkbox" />
                                           <small>Agree with the <a class="toggle-modal"  onclick=" OpenPopupCenter('terms.php','Terms And Codition','600','600')"  ><b style="cursor: pointer;">TERMS AND CONDITION</b></a> of Kapampangan Artwork Exhibit.</small>
                                           
                                          </div>
                                        </div>
                                      </div> 

                                      <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8" style="text-align: center;">
                                            <input type="submit"  name="submit"  value="Sign Up"  class="submit btn btn-pup" style="color: #0ba3b8;border-color: #0ba3b8;border-radius: 15px;"/>
                                             <button class="btn btn-default" data-dismiss="modal" type=
                                                "button" style="color: #d10000; border-color: #d10000; border-radius: 15px;">Close</button> 
                                          </div>
                                        </div>
                                      </div> 

                                        

                                     </div>
                                    
                            </div> 
                            <!-- end panel sign up -->
                        </form>  
                   </div> 
              </div>
         
              
          </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
  </div>
<!-- end sign up modal -->





<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>