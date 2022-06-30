<section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-6">
                  <h1><span>Luksong-Tinik</span>&nbsp(Jumping over Thorns)</h1>
                  <h2>Vicente Silva Manansala</h2>
                  <p>The dynamism and energy of this work rivals the romantic compositions of Manansala's Spanish-trained predecessors, however it displays none of their established devices in describing (and idealising) a recognisably Filipino scene. </p>
                 
                </div>
                <div class="col-sm-6">
                  <img src="images/home/art1.jpg" class="Art img-responsive" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>Dreamscapes </span>&nbsp(Celebrated in Book, Exhibit)</h1>
                  <h2>Perfecto Mercado </h2>
                  <p>Dreamscapes is also a testament to the struggles and triumphs of Mercado whose artistry was nurtured by a deep faith in God and devotion to family. </p>
                 
                </div>
                <div class="col-sm-6">
                  <img src="images/home/art2.jpg" class="Art img-responsive" alt="" />
            
                </div>
              </div>
              
              <div class="item">
                <div class="col-sm-6">
                   <h1><span>APO WHANG OD </span>&nbsp("The Last Kalinga Tattoo Artist in the Philippines")</h1>
                  <h2>Erwin Dayrit</h2>
                  <p>Pampanga artist shared photos of his latest work featuring famous tattoo artist Apo Whang-Od from Kalinga.The 37-year-old has been creating great works of art even if he was born with Osteogenesis Imperfecta (OI), which means his bones break easily. </p>
                 
                </div>
                <div class="col-sm-6">
                  <img src="images/home/art3.jpg" class="girl img-responsive" alt="" />
                
                </div>
              </div>
              
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/slider-->
  <section>
    <div class="container">
      <div class="row">

        <div class="col-sm-3">
            <?php include 'sidebar.php'; ?>
        </div>
        
        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>

            <?php

            $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 ";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();
           
            foreach ($cur as $result) { 

              ?>
               <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img height="330" width="300" src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                      <p style="margin-top: 20px"><?php  echo nl2br($result->PRODESC); ?></p>
                      <p class="artistname" style="color: black; margin: 0px 40px; padding: 5px; border: 1px solid black; text-transform: capitalize;">Artist Name: <?php echo $result->OWNERNAME; ?></p>
                      <h2>&#8369 <?php  echo $result->PROPRICE; ?></h2>
                      <button type="submit" name="btnorder" class="btn btn-default add-to-cart" style="border-radius: 20px; color: #313131;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    </div>
                    <div class="product-overlay">
                      <div class="overlay-content">
                        <h2>&#8369 <?php  echo $result->PRODISPRICE; ?></h2>
                        <p><?php  echo    $result->PRODESC; ?></p>
                       <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                      </div>
                    </div>
                </div>
                <!--  -->
              </div>
            </div>
          </form>
       <?php  } ?>
            
          </div><!--features_items--> 
          
          <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>
            
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active"> 
                         <?php 
                    $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                    WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 limit 3 ";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();
                   
                    foreach ($cur as $result) { 
                  ?>
                      <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img width="300" height="330" src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                          <p style="margin-top: 20px"><?php  echo nl2br($result->PRODESC); ?></p>
                          <p class="artistname" style="color: black; margin: 0px 40px; padding: 5px; border: 1px solid black; text-transform: capitalize;">Artist Name: <?php echo $result->OWNERNAME; ?></p>
                          <h2>&#8369 <?php  echo $result->PROPRICE; ?></h2>
                           <button type="submit" name="btnorder" class="btn btn-default add-to-cart" style="border-radius: 20px;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </form>
                  <?php } ?>
                </div>
                <div class="item">  
                  <?php 
                    $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                    WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 limit 3,6";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();
                   
                    foreach ($cur as $result) { 
                  ?>
                      <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img width="300" height="330" src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                          <p style="margin-top: 20px"><?php  echo nl2br($result->PRODESC); ?></p>
                          <p class="artistname" style="color: black; margin: 0px 40px; padding: 5px; border: 1px solid black; text-transform: capitalize;">Artist Name: <?php echo $result->OWNERNAME; ?></p>
                          <h2>&#8369 <?php  echo $result->PROPRICE; ?></h2>
                           <button type="submit" name="btnorder" class="btn btn-default add-to-cart" style="border-radius: 20px;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </form>
                  <?php } ?>
                </div>
              </div>    
            </div>
          </div><!--/recommended_items-->
          
        </div>
      </div>
    </div>
    </style>
  </section>
  <style type="text/css">
    .artistname:hover{
      background-color: #0ba3b8;
    }
  </style>