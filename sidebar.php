  <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian" style="text-align: center;"><!--category-productsr-->
 
                 <?php 
                      $mydb->setQuery("SELECT * FROM `tblcategory`");
                      $cur = $mydb->loadResultList();
                     foreach ($cur as $result) {
                      echo ' <div class="categ panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title" ><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></h4>
                            </div>
                          </div>';
                      }
                  ?>
              
            </div><!--/category-products-->
            
            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/addtocart.gif" alt="" />
            </div><!--/shipping-->

            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/sidegif.gif" alt="" width="240px" height="240px" />
            </div>
            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/gif.gif" alt="" width="270px" height="329px" />
            </div>
           
           
         
          </div>

 