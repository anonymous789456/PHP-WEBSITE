<section id="cart_items">
    <div class="container">
      <div class="table-responsive cart_info" style="text-align: center;"> 
        <?php  

  // if (!isset($_SESSION['USERID'])){
  //     redirect("index.php"); 
check_message();  
 
?>
            
                         <table  class="table table-condensed" id="table" >
                         <thead> 
                          <tr class="cart_menu" style="text-align: center;"> 
                             <td  >Product</td>
                             <td >Description</td>
                             <td  width="15%" >Price</td>
                             <td  width="15%" >Quantity</td> 
                             <td  width="15%" >Total</td>  
                          </tr>
                         </thead>  
                          
                             <?php



                              if (!empty($_SESSION['gcCart'])){ 

                                echo '<script>totalprice()</script>';

                                  $count_cart = count($_SESSION['gcCart']);

                                for ($i=0; $i < $count_cart  ; $i++) { 
 
                                       $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                                                 WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  and p.`PROID` = '".@$_SESSION['gcCart'][$i]['productid']."'";
                                       $mydb->setQuery($query);
                                      $cur = $mydb->loadResultList();
                                
                                
                                 foreach ($cur as $result) {

                                ?>
                                <tr>
                                  <td>  
                                    <img width="100" height="100" src="<?php echo web_root. 'admin/products/'.$result->IMAGES; ?>"  onload="  totalprice() " width="50px" height="50px"> 
                                  <br/> 
                                        



                                 </td>
                                  <td>  
                                    <?php echo  $result->PRODESC ; ?>
                                  </td>
                                  <td>
                                    <input type="hidden"    id ="PROPRICE<?php echo $result->PROID;  ?>" name="PROPRICE<?php echo $result->PROID; ?>" value="<?php echo  $result->PRODISPRICE ; ?>" >
                                     
                                  &#8369  <?php echo  $result->PROPRICE ; ?>
                                  </td>
                                  <td class="input-group custom-search-form" style="margin-top: 28px;">
                                       <input type="hidden" maxlength="3" class="form-control input-sm"  autocomplete="off"  id ="ORIGQTY<?php echo $result->PROID;  ?>" name="ORIGQTY<?php echo $result->PROID; ?>" value="<?php echo $result->PROQTY; ?>"   placeholder="Search for...">
                                        
                                        <input type="number" maxlength="3" data-id="<?php echo $result->PROID;  ?>" class="QTY form-control input-sm"  autocomplete="off"  id ="QTY<?php echo $result->PROID;  ?>" name="QTY<?php echo $result->PROID; ?>" value="<?php echo $_SESSION['gcCart'][$i]['qty']; ?>"   placeholder="Search for...">
                                        <span class="input-group-btn">
                                                <a title="Remove Item"  class="btn btn-danger btn-sm" id="btnsearch" name="btnsearch" href="cart/controller.php?action=delete&id=<?php echo $result->PROID; ?>">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </span>
                                        </td>
                                      
                                        <input type="hidden"    id ="TOT<?php echo $result->PROID;  ?>" name="TOT<?php echo $result->PROID; ?>" value="<?php echo  $result->PRODISPRICE ; ?>" >
                                   
                                     <td> &#8369 <?php echo  $result->PROPRICE ; ?></td>
                                </tr>
                            <?php  
                                 }
                               }
                               }else{ 
                                  echo "<h1>Cart is empty..</h1>";
                               } 
                            ?>  
                      </table> 

     
                      
    </div>
  </div>  
 
</section>
<section id="do_action">
    <div class="container">
      <div class="heading">
        <h3 style="text-align: center; border-bottom: 1px solid #313131; margin: 0px 300px; padding-bottom: 10px;">What would you like to do next?</h3>
      </div>
      <div class="row">
     <form action="index.php?q=orderdetails" method="post">
   <a href="index.php?q=product" class="btn btn-default check_out pull-left">
   <i class="fa fa-arrow-left fa-fw"></i>
   Back
   </a>

     <?php    
  
                     $countcart =isset($_SESSION['gcCart'])? count($_SESSION['gcCart']) : "0";
                   if ($countcart > 0){
  
                  if (isset($_SESSION['CUSID'])){  
               
                    echo '<button type="submit"  name="proceed" id="proceed" class="btn btn-default check_out btn-pup pull-right">
                            Checkout
                            <i class="fa  fa-arrow-right fa-fw"></i>
                            </button>';
                 
                   }else{
                     echo   '<a data-target="#smyModal" data-toggle="modal" class="btn btn-default check_out signup pull-right" href="">
                              Checkout
                              <i class="fa  fa-arrow-right fa-fw"></i>
                              </a>';
                  } 
                }



                ?>
 </form>
      </div>
    </div>
    <style type="text/css">
      img:hover{
        transform: scale(1.1);
        transition-duration: 500ms;
      }
    </style>
  </section><!--/#do_action-->