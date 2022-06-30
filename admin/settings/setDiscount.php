<?php  
require_once("../../include/initialize.php");
    if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }

 
 $PROID =   $_GET['id']; 
$query = "SELECT * FROM `tblproduct` p  ,`tblcategory` c ,`tblpromopro` pr
            WHERE   p.`CATEGID`=c.`CATEGID` AND p.`PROID`=pr.`PROID` AND p.`PROID`=" . $PROID;
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();


  foreach ($cur as $result) { 
   
?>
     
   <form   method="POST" action="controller.php?action=discount">
        
        <div class="row">

            <div class="col-md-6">
            <div class="row">
                <div class="col-m-12">
                    <div class="col-md-8 responsive">
                          <img width="250" class="img-portfolio " height="300"  src="<?php echo web_root . 'admin/products/'.  $result->IMAGES;?>" alt="">
               
                    </div>
                    </div>
                
            </div>
            
      
            </div>

     
            <div class="col-md-6" style="color: whitesmoke; margin-left: -13px; margin-top: 30px; font-size: 15px; background-color: grey; border-radius: 20px; padding: 20px 20px; border: 1px solid whitesmoke;">
              <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
              <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

              <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                <!-- <h3><?php echo $result->PRONAME ; ?></h3> -->
                <p style="text-align: center; border-bottom: 1px solid whitesmoke; padding-bottom: 5px; font-family: arial black; font-size: 25px; "><?php echo   $result->CATEGORIES;?></p>
                <!-- <h3>Project Details</h3> -->
                <ul>
                    <!-- <li>Model - <?php echo $result->PROMODEL; ?></li> -->
                    <li style="font-size: 18px; text-transform: capitalize;">Type - <?php echo $result->PRODESC; ?></li>
                    <li style="font-size: 18px; text-transform: capitalize;">Price - &#8369 <?php echo $result->PROPRICE; ?></li>
                    <li style="font-size: 18px; text-transform: capitalize;">Discount - <?php echo $result->PRODISCOUNT; ?>% </li> 
                    <li style="font-size: 18px; text-transform: capitalize;">Discounted Price - &#8369 <?php echo $result->PRODISPRICE; ?> </li> 
                </ul>

                

                 <!-- <button  type="submit"  class="btn btn-primary btn-sm"  name="btnorder">Order Now!</button> -->
            </div>
</div>
<div class="row" style="border: 1px solid black; margin-top: 20px; background-color: grey; border-radius: 20px; color: whitesmoke; border: 1px solid whitesmoke;">
        <div class="col-md-12">
        <h3 class="" style="padding-bottom: 9px;text-align: center;border-bottom: 1px solid whitesmoke;font-size: 30px;font-weight: bold;font-variant: small-caps;font-family: arial black;color: whitesmoke;"><i class="fa fa-money" aria-hidden="true"></i> Set Discount</h3>
        <div class="col-md-6">
 
             <div class="form-group">
                <label>Discount:</label>

                
                <div class="input-group">

                <input type="hidden" class="form-control " name="PROPRICE" id="PROPRICE" value=" <?php echo $result->PROPRICE; ?>">
                <input type="hidden" class="form-control " name="PROID" id="PROID" value=" <?php echo $result->PROID; ?>">

              
                  <input type="input" class="form-control disper" name="PRODISCOUNT" id="PRODISCOUNT" placeHolder="0">

                  <div class="input-group-addon">
                    <i>%</i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>

             
        </div>
          <div class="col-md-6">
             <div class="form-group">
                <label>Discounted Price:</label>

               
                <div class="input-group">
                  <div class="input-group-addon">
                    <i> &#8369 </i>
                  </div>
                  <input type="text"  class="form-control" name="PRODISPRICE" id="PRODISPRICE" placeHolder="0.0" readonly="true">
                </div>
                <!-- /.input group -->
              </div>
               
          </div>
         <div class="col-md-10">
             <div class="form-group" style="text-align:center; margin-left:90px;">  
                  <input type="submit"  class="btn btn-sm btn-primary " name="submit"  value="Submit" > 
              </div>
               
          </div>
              
        </div>
         </div>
<?php } ?>       
       
        <!-- /.row -->
</form>

 