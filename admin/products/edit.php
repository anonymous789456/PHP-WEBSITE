<?php  

    if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }


  $PROID = $_GET['id'];
  $product = New Product();
  $singleproduct = $product->single_product($PROID);

?>
  
        <div style="background: black;opacity: 0.8; border-radius: 20px;">
        <div class="row">
         <div class="col-lg-12">
            <h1 class="" style="padding-bottom: 9px;text-align: center;margin: 20px 6px 20px;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;color: whitesmoke;"><i class="fa fa-edit fa-fw"></i> Update Product</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST" >
 
                <div class="row"> 

        <div class="form-group"style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERNAME" style="color: whitesmoke; font-size: 17px;">Owner:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="OWNERNAME" name="OWNERNAME" placeholder=
                            "Owner Name" type="text" value="<?php echo $singleproduct->OWNERNAME; ?>">
                      </div>
                    </div>
                  </div>  

                   <div class="form-group"style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OWNERPHONE" style="color: whitesmoke; font-size: 17px;">Phone:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="OWNERPHONE" name="OWNERPHONE" placeholder=
                            "+63 0000000000" type="number" value="<?php echo $singleproduct->OWNERPHONE; ?>">
                      </div>
                    </div>
                  </div> 
                     <div class="form-group"style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRODESC" style="color: whitesmoke; font-size: 17px;">Description:</label>

                      <div class="col-md-8"> 
                        <input  id="PROID" name="PROID"   type="hidden" value="<?php echo $singleproduct->PROID; ?>">
                      <textarea class="form-control input-sm" id="PRODESC" name="PRODESC" cols="1" rows="3" ><?php echo $singleproduct->PRODESC; ?>
                      </textarea>
                        
                      </div>
                    </div>
                  </div>
                 

                  <div class="form-group"style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY" style="color: whitesmoke; font-size: 17px;">Category:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CATEGORY" id="CATEGORY">
                          <option value="None">Select Category</option>
                          <?php
                            //Statement

                         $category = New Category();
                          $singlecategory = $category->single_category($singleproduct->CATEGID);
                          echo  '<option SELECTED  value='.$singlecategory->CATEGID.' >'.$singlecategory->CATEGORIES.'</option>';


                          $mydb->setQuery("SELECT * FROM `tblcategory` where CATEGID <> '".$singlecategory->CATEGID."'");
                          $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          echo  '<option  value='.$result->CATEGID.' >'.$result->CATEGORIES.'</option>';
                          }
                          ?>
          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 130px;">
                    <div class="col-md-8">
                       <label class="col-md-4 control-label" for=
                      "PROPRICE" style="color: whitesmoke; font-size: 17px;">Price:</label>

                      <div class="col-md-3">
                         <input class="form-control input-sm" id="PROPRICE" name="PROPRICE" placeholder=
                            "Price" type="number" step="any" value="<?php echo $singleproduct->PROPRICE; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="form-group"style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PROQTY" style="color: whitesmoke; font-size: 17px;">Quantity:</label>

                      <div class="col-md-3">
                         <input class="form-control input-sm" id="PROQTY" name="PROQTY" placeholder=
                            "Quantity" type="number" value="<?php echo $singleproduct->PROQTY; ?>">
                      </div>
                       
                    </div>
                  </div>

                   
                  
             <div class="form-group"style="margin-left: 130px;">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                               <button class="btn  btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                  </div>
                    </div>
                  </div> 
            
 
            </div>
 
  
      
<!--/.fluid-container--> 
 </form>
</div>