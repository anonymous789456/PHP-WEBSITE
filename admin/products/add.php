<?php
   if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }

      // $autonum = New Autonumber();
      // $result = $autonum->single_autonumber(4);

?> 
<style type="text/css">

</style>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data" style="background: black;opacity: 0.8; border-radius: 20px;">
 <div class="row">
  <img src="">
         <div class="col-lg-12">
            <h1 class="" style="padding-bottom: 9px;text-align: center;margin: 20px 6px 20px;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;color: whitesmoke;"><i class="fa fa-paint-brush" aria-hidden="true"></i> Add New Artwork</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

              <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME" style="color: whitesmoke; font-size: 17px;">Artist Name:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="OWNERNAME" placeholder=
                            "Artist Name" type="text" value="">
                      </div>
                    </div>
                  </div>  

                   <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERPHONE"style="color: whitesmoke; font-size: 17px;">Phone:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="OWNERPHONE" name="OWNERPHONE" placeholder=
                            "+63 0000000000" type="number" value="">
                      </div>
                    </div>
                  </div> 

                 <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRODESC"style="color: whitesmoke;">Description:</label>

                      <div class="col-md-8"> 
                      <textarea class="form-control input-sm" id="PRODESC" wrap="off" name="PRODESC" cols="1" rows="3">
Title: 
Height:  | Width: 
Material used: 
                  </textarea>
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY"style="color: whitesmoke; font-size: 17px;">Category:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CATEGORY" id="CATEGORY">
                          <option value="None">Select Category</option>
                          <?php
                            //Statement
                          $mydb->setQuery("SELECT * FROM `tblcategory`");
                          $cur = $mydb->loadResultList();

                        foreach ($cur as $result) {
                          echo  '<option value='.$result->CATEGID.' >'.$result->CATEGORIES.'</option>';
                          }
                          ?>
          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                       <label class="col-md-4 control-label" for=
                      "PROPRICE"style="color: whitesmoke; font-size: 17px;">Price:</label>

                      <div class="col-md-3">
                         <input class="form-control input-sm" id="PROPRICE"  step="any" name="PROPRICE" placeholder=
                            "&#8369 Price " type="number" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PROQTY"style="color: whitesmoke; font-size: 17px;">Quantity:</label>

                      <div class="col-md-3">
                         <input class="form-control input-sm" id="PROQTY" name="PROQTY" placeholder=
                            "Quantity" type="number" value="">
                      </div>
                       
                    </div>
                  </div>

  
                  <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image"style="color: whitesmoke; font-size: 17px;">Upload Image:</label>

                      <div class="col-md-8">
                      <input type="file" name="image" value="" id="image"/>
                      </div>
                    </div>
                  </div>
            
             <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn  btn-primary btn-sm" name="save" type="submit" style="height: 50px; width: 90px;" ><span class="fa fa-save fw-fa"></span> Save</button>
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
      

       