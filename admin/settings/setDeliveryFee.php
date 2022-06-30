<?php  

    if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }

 if (isset($_GET['id'])){
  @$ID = $_GET['id'];
  $setting = New Setting();
  $set = $setting->single_setting($ID);

 ?>
 

<form class="form-horizontal span6" action="controller.php?action=edit" method="POST" enctype="multipart/form-data" style="background-color: #313131; text-align: center;">
 <div class="row">
         <div class="col-lg-12">
            <h1 class="" style="padding-bottom: 9px;text-align: center;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;color: whitesmoke;"><i class="fa fa-truck" aria-hidden="true"></i> Set Delivery</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

 
            
                 <div class="form-group" style="margin-left: 90px; margin-top: 20px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PLACE">Location:</label>

                      <div class="col-md-8">
                      <input  type="hidden" name="SETTINGID"  value="<?php echo $set->SETTINGID ?>">
                             <input class="form-control input-sm" id="PLACE" name="PLACE" placeholder=
                            "Location" type="text" value="<?php echo $set->PLACE ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 90px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "BRGY">Brgy:</label>

                      <div class="col-md-8">
                      <input  type="hidden" name="SETTINGID"  value="<?php echo $set->SETTINGID ?>">
                             <input class="form-control input-sm" id="BRGY" name="BRGY" placeholder=
                            "Location" type="text" value="<?php echo $set->BRGY ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 90px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DELPRICE">Price:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="DELPRICE" name="DELPRICE" placeholder=
                            "Delivery Price" type="text" value="<?php echo $set->DELPRICE ?>">
                      </div>
                    </div>
                  </div>

                
            
             <div class="form-group" style="margin-left: 90px; padding-bottom: 20px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn  btn-primary btn-sm" name="save" type="submit" style="font-size: 15px; border-radius: 20px;"><span class="fa fa-save fw-fa"></span> Save</button>
                      </div>
                    </div>
                  </div>

               
    
          
        </form>
      

       


 <?php }else{ ?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data" style="background-color: #313131; text-align: center;">
 <div class="row">
         <div class="col-lg-12">
            <h1 class=""style="padding-bottom: 9px;text-align: center;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;color: whitesmoke;"><i class="fa fa-truck" aria-hidden="true"></i> Set Delivery</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

 
            
                 <div class="form-group" style="margin-left: 90px; margin-top: 20px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PLACE">Location:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="PLACE" name="PLACE" placeholder=
                            "Location" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group" style="margin-left: 90px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "BRGY">Brgy:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="BRGY" name="BRGY" placeholder=
                            "Location" type="text" value="">
                      </div>
                    </div>
                  </div>

                      <div class="form-group" style="margin-left: 90px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DELPRICE">Price:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="DELPRICE" name="DELPRICE" placeholder=
                            "Delivery Price" type="text" value="">
                      </div>
                    </div>
                  </div>

                
            
             <div class="form-group" style="margin-left: 90px; padding-bottom: 20px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn  btn-primary btn-sm" name="save" type="submit" style="font-size: 15px; border-radius: 20px;"><span class="fa fa-save fw-fa"></span> Save</button>
                      </div>
                    </div>
                  </div>

               
    
          
        </form>
      

       
<?php   }

?>





