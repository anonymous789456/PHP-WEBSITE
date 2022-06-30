<?php 

if (!isset($_SESSION['CUSID'])){
redirect(web_root."index.php");
}
 

     

$customerid =$_SESSION['CUSID'];
$customer = New Customer();
$singlecustomer = $customer->single_customer($customerid);

  ?>
 
<?php 
  $autonumber = New Autonumber();
  $res = $autonumber->set_autonumber('ordernumber'); 
?>


<form onsubmit="return orderfilter()" action="customer/controller.php?action=processorder" method="post" >   
<section id="cart_items">
    <div class="container">
      <div class="breadcrumbs" style="font-size: 20px; font-family: Arial;">
        <ol class="breadcrumb">
          <li class="dthome"><a href="index.php" style="color: #313131;">Home</a></li>
          <li class="active">Order Details</li>
        </ol>
      </div>
      <div class="row" style="background-color: #313131; margin: 0px 0px; padding: 10px 0px;">
    <div class="col-md-6 pull-left">
      <div class="col-md-2 col-lg-2 col-sm-2" style="float:left; font-size: 18px; font-weight: bold; color: whitesmoke;">
        Name:
      </div>
      <div class="col-md-8 col-lg-10 col-sm-3" style="color: whitesmoke; float:left; font-size: 18px; text-transform: capitalize;">
        <?php echo $singlecustomer->FNAME .' '.$singlecustomer->LNAME; ?>
      </div>
       <div class="col-md-2 col-lg-2 col-sm-2" style="color: whitesmoke; float:left; font-size: 18px; font-weight: bold;">
        Address:
      </div>
      <div class="col-md-8 col-lg-10 col-sm-3" style="color: whitesmoke; float:left; font-size: 18px; text-transform: capitalize;">
        <?php echo $singlecustomer->PROVINCE . ', ' . $singlecustomer->CITYADD . ', ' .$singlecustomer->BRGYADD . ', ' . $singlecustomer->STREETADD;?>

      </div>
    </div>

    <div class="col-md-6 pull-right">
    <div class="col-md-10 col-lg-12 col-sm-8" style="color: whitesmoke; font-size: 18px;">
    <input type="hidden" value="<?php echo $res->AUTO; ?>" id="ORDEREDNUM" name="ORDEREDNUM">
      Order Number : <?php echo $res->AUTO; ?>
    </div>
    </div>
 </div>
      <div class="table-responsive cart_info"> 
 
              <table class="table table-condensed" id="table" >
                <thead >
                <tr class="cart_menu"> 
                  <th style="width:12%; align:center; ">Product</th>
                  <th >Description</th>
                  <th style="width:15%; align:center; ">Quantity</th>
                  <th style="width:15%; align:center; ">Price</th>
                  <th style="width:15%; align:center; ">Total</th>
                  </tr>
                </thead>
                <tbody>    
                       
              <?php

              $tot = 0;
                if (!empty($_SESSION['gcCart'])){ 
                      $count_cart = @count($_SESSION['gcCart']);
                      for ($i=0; $i < $count_cart  ; $i++) { 

                      $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                           WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  and p.PROID='".$_SESSION['gcCart'][$i]['productid']."'";
                        $mydb->setQuery($query);
                        $cur = $mydb->loadResultList();
                        foreach ($cur as $result){ 
              ?>

                         <tr>
                         <!-- <td></td> -->
                          <td><img src="admin/products/<?php echo $result->IMAGES ?>"  width="100" height="100"></td>
                          <td><?php echo $result->PRODESC ; ?></td>
                          <td align="center"><?php echo $_SESSION['gcCart'][$i]['qty']; ?></td>
                          <td>&#8369 <?php echo  $result->PROPRICE ?></td>
                          <td>&#8369 <output><?php echo $_SESSION['gcCart'][$i]['price']?></output></td>
                        </tr>
              <?php
              $tot +=$_SESSION['gcCart'][$i]['price'];
                        }

                      }
                }
              ?>
            

                </tbody>
                
              </table>  
                <div class="pull-right" style="font-size: 15px; border-radius: 10px; background-color: #313131; border: 1px solid black; padding: 5px 5px;">
                  <p align="right" >
                  <div style="color: whitesmoke;"> Total Price :   &#8369 <span id="sum">0.00</span></div>
                   <div style="color: whitesmoke; border-bottom: 1px solid whitesmoke;"> Delivery Fee : &#8369 <span id="fee">65.00</span></div>
                   <div style="color: whitesmoke; margin-top: 5px;"> Overall Price : &#8369 <span id="overall"><?php echo $tot+65 ;?></span></div>
                   <input type="hidden" name="alltot" id="alltot" value="<?php echo $tot ;?>"/>
                  </p>  
                </div>
 
      </div>
    </div>
  </section>
 
 <section id="do_action" style="margin-top: -90px; margin-left: 35px;">
    <div class="container">
      <div class="heading">
      </div>
      <div class="row">
         <div class="row">
                   <div class="col-md-7">
              <div class="form-group">
                  <label style="font-size: 20px;"> Payment Method : </label> 
                  <div class="radio" style="font-size: 15px;">
                      <label >
                          <input type="radio"  class="paymethod" name="paymethod" id="deliveryfee" value="Cash on Delivery" checked="true" data-toggle="collapse"  data-parent="#accordion" data-target="#collapseOne" >Cash on Delivery
                      </label>
                  </div> 
              </div> 
                        <!-- <div class="panel"> 
                                <div class="panel-body">
                                    <div class="form-group ">
                                    
                                        <div class="col-md-12">
                                          <label class="col-md-4 control-label" for=
                                          "PLACE" style="margin-top: 10px;">Place(Street/Brgy/City):</label>

                                          <div class="col-md-8">
                                           <select class="form-control paymethod" name="PLACE" id="PLACE" onchange="validatedate()" style="height: 37px; font-size: 15px; border-radius: 15px;"> 
                                           <option value="0" >Select</option>
                                              <?php 
                                            $query = "SELECT * FROM `tblsetting` ";
                                            $mydb->setQuery($query);
                                            $cur = $mydb->loadResultList();

                                            foreach ($cur as $result) {  
                                              echo '<option value='.$result->DELPRICE.'>'.$result->BRGY.' '.$result->PLACE.' </option>';
                                            }
                                            ?>
                                          </select>
                                          </div>
                                        </div>  
                                      
                                    </div>
    
                                </div>
                            </div>  -->
      
                        <input type="hidden"  placeholder="HH-MM-AM/PM"  id="CLAIMEDDATE" name="CLAIMEDDATE" value="<?php echo date('y-m-d h:i:s') ?>"  class="form-control"/>

                   </div>  
    
             
         
              </div>
<br/>
              <div class="row">
                <div class="col-md-6">
                    <a href="index.php?q=cart" class="btn btn-default pull-left" style="background-color: #0ba3b8; border-radius: 20px; color: #FFFFFF;border: none;font-size: 17px;"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>View Cart</strong></a>
                   </div>
                  <div class="col-md-6">
                      <button style="background-color: #0ba3b8; border-radius: 20px; color: #FFFFFF;border: none;font-size: 17px; margin-right: 30px" type="submit" class="btn btn-pup  pull-right " name="btn" id="btn" onclick="return validatedate();"   /> Submit Order <span class="glyphicon glyphicon-chevron-right"></span></button> 
                </div>  
              </div>
             
      </div>
    </div>
  </section><!--/#do_action-->
  <style type="text/css">
    img:hover{
        transform: scale(1.1);
        transition-duration: 500ms;
      }
  </style>
</form>