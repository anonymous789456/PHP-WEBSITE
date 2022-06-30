<?php  
 
     if (!isset($_SESSION['USERID'])){
      redirect("index.php");
     }
 
  ?>
    

 <?php
  $customer = New customer;
  $res = $customer->single_customer($_GET['customerid']); 
  ?>  


<style type="text/css"> 
.Cus-info {
  max-width: 100%;
  /*float: left;*/
  margin-bottom: 20px;
  background-color: #313131;
  border: 1px solid black;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
 }
.Cus-info .header {
  padding-bottom: 9px;
  text-align: center;
  margin: 20px 6px 20px;
  border-bottom: 1px solid whitesmoke;
  font-size: 30px; 
  font-weight: bold; 
  font-variant: small-caps;
  font-family: arial black;
  color: whitesmoke;
  /*background-color: lightblue;*/
  }
 
.Cus-info p {
    font-size: 20px;
    border-bottom: solid 1px whitesmoke;
    font-style: bold 1px;
    color: whitesmoke;
    background-color: grey;
    padding-left: 50%;
    padding: 10px 10px;
    border-radius: 15px;
    /*line-height: 10px;*/

}

.Cus-info p label {
 /* background-color: gray;
  width: 100%;*/
  font-size: 20px;
  font-family: arial pink;
  text-transform: capitalize;
  text-align: center;
} 
.Cus-info p label:hover {
  outline-color: blue;

  /*color:white;*/
  }

  .Cus-info .pic > img {
    height: 100px;
  }

  .Cus-info .Stretch > img {
    width: 100px;
    height: 100px; 

  }

@media (min-width: 768px) {
  .Cus-info {
    position: inherit;
    padding: 0;
    margin: 0;
    vertical-align: center;
  }
}
</style>


 
<div class="col-md-12 Cus-info">
<div class="header"><i class="fa fa-user fa-fw"></i> Customer Information</div> 
  <div class="row">
    

    <div class="col-md-12">
        <div class="col-md-6">
            <p style="color: whitesmoke;">First Name: <label style="color: white; text-transform: capitalize; margin-left: 10px;"><?php echo $res->FNAME; ?></label></p>
              <!--  <p>::</p> -->
             <!-- <p>::</p> -->
        </div>
        <div class="col-md-6">
                <!--  <p>::</p> -->
              <p>Last Name: <label style="color: white; text-transform: capitalize; margin-left: 10px;"><?php echo $res->LNAME; ?> </label></p> 
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-6">
            <!-- <p >::</p> -->
            <p>Gender: <label style="color: white; text-transform: capitalize; margin-left: 10px;"><?php echo $res->GENDER; ?></label></p>    
        </div>
        <div class="col-md-6">
           <!--  <p>::</p> -->
           <p>Phone #: <label style="color: white; text-transform: capitalize; margin-left: 10px;"><?php echo $res->PHONE; ?></label></p>
        </div>
    </div>

     <div class="col-md-12" style=""> 
        <div class="col-md-6" style="margin-bottom: 17px;"> 
               <p>Complete Address: <label style="color: white; text-transform: capitalize; margin-left: 10px;"><?php echo $res->PROVINCE . ', ' . $res->CITYADD . ', ' .$res->BRGYADD . ', ' . $res->STREETADD; ?></label></p>  
        </div>
    </div>

<!--      <div class="col-md-12">
        <div class="col-md-6">
           <label><?php echo $res->PROVINCE; ?></label> 
               <p>Province::</p> 
        </div>
        <div class="col-md-6">
           <label><?php echo $res->COUNTRY; ?></label> 
               <p>Country::</p>  
        </div>
    </div>
 -->
    <!--  <div class="col-md-12">
        <div class="col-md-6">
          <label><?php echo $res->ZIPCODE; ?></label> 
               <p>Zip Code::</p>
        </div>
        <div class="col-md-6">
          
        </div>
    </div> -->

  


  </div>
</div>
  
