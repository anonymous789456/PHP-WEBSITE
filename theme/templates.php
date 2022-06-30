<!DOCTYPE html>
<link rel="icon" type="image/png" href="img/icon.ico">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kapampangan Artwork Exhibit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
 

<?php
if (isset($_SESSION['gcCart'])){
  if (@count($_SESSION['gcCart'])>0) {
    $cart = '<span class="carttxtactive">('.@count($_SESSION['gcCart']) .')</span>';
  } 
 
} 
 ?>
 
<script type="text/javascript">
   

</script>
</head>
<style type="text/css">
  .logopic:hover{
    transform: scale(1.2);
    transition-duration: 500ms;
  }
</style>
<body style="background-color:white;" onload="totalprice()" >

  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-md-4 clearfix">
            <div class="logo pull-left">
              <a href="<?php echo web_root?>index.php"><img src="images/home/logo.png" class="logopic" alt="" /></a>
            </div> 
          </div>
          <div class="col-md-8 clearfix">
            <div class="shop-menu clearfix pull-right">
              <ul class="nav navbar-nav">     
                <li><a href="<?php echo web_root;?>index.php?q=cart" style="font-size: 18px; font-weight: bold;"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <?php if (isset($_SESSION['CUSID'] )) { ?>  
                  <li><a href="<?php echo web_root?>index.php?q=profile"><i class="fa fa-user"></i> Account</a></li>     
                  <li><a   href="<?php echo web_root?>logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                <?php }else{ ?> 
                <li><a data-target="#smyModal" data-toggle="modal"  href="" style="font-size: 18px; font-weight: bold;"><i class="fa fa-lock"></i> Login</a></li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul id="menu" class="nav navbar-nav collapse navbar-collapse">
                <li><a href="<?php echo web_root;?>" class="active" style="border-bottom: 1px solid whitesmoke;font-weight: bold;font-variant: small-caps;font-family: arial black;">Home</a></li>
                <li class="dropdown"><a href="#" style="border-bottom: 1px solid whitesmoke;font-weight: bold;font-variant: small-caps;font-family: arial black;">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="text-align: center; background-color: #313131;">
                                       <?php 
                                            $mydb->setQuery("SELECT * FROM `tblcategory`");
                                            $cur = $mydb->loadResultList();
                                           foreach ($cur as $result) { 
                                       echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                                        } ?> 
                                    </ul>
                                </li> 

         
                <li><a href="<?php web_root?>index.php?q=product" style="border-bottom: 1px solid whitesmoke;font-weight: bold;font-variant: small-caps;font-family: arial black;">Products</a></li>
                <li><a href="<?php web_root?>index.php?q=contact" style="border-bottom: 1px solid whitesmoke;font-weight: bold;font-variant: small-caps;font-family: arial black;">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3" style="float: right;">
            <form action="<?php echo web_root?>index.php?q=product" method="POST" > 
              <div class="search_box pull-right">
                <input type="text" name="search" placeholder="Search" style="border-radius: 20px; height: 40px;"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->

 
   



          <?php 
            require_once $content; 
         ?> 





    <footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-3" style="margin-top: 20px;">
            <div class="companyinfo">
              <h2><span>Kapampangan</span>&nbspArtwork Exhibit</h2>
              <div style="background-color: ;">
                <p style="color: #313131; font-size: 15px; margin-top: 20px; padding: 10px 10px;">A web base online platform selling and exploring very own kapampangan Artworks </p>
                <p style="color: #313131; font-size: 15px; margin-top: 10px; padding: 10px 10px;">A web based online platform that highlights the artwork of local artist in Pampanga. This platform intends to promote, sell, and learn about an artist's paintings, drawings, sketches, portraits, and other works. An artwork that will serve as an inspiration to pursue their passion.</p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-2" style="text-align: center; float: right; width: 70%; padding-bottom: 10px;">
            <div class="companyinfo">
              <h2 style="margin-top: -30px;"><span>-Developers Team-</span></h2>
              <div class="col-sm-4" style="border: 1px solid #b9b6af; padding-top: 20px; border-radius: 15px; height: 200px;">
                <a href="https://www.facebook.com/angelo.manansala.773"><img src="images/home/angelo.png" width="100px" height="100px" class="logopic" alt="" /></a>
                <p class="dev-names" style="font-family: abel; font-size: 15px; color: #313131; font-weight: 600; margin-top: 13px; color: #0ba3b8;">Angelo M. Manansala</p>
                <p class="dev-names" style="font-size: 15px; color: #313131; font-weight: 400; margin-top: 13px; ">System Analyst</p>
              </div>
              <div class="col-sm-4" style="border: 1px solid #b9b6af; padding-top: 20px; border-radius: 15px; height: 200px;">
                <a href="https://www.facebook.com/christian.c.perez.988"><img src="images/home/cahn.png" width="100px" height="100px" class="logopic" alt="" /></a>
                <p class="dev-names" style="font-family: abel; font-size: 15px; color: #313131; font-weight: 600; margin-top: 13px; color: #0ba3b8;">Christian C. Perez</p>
                <p class="dev-names" style="font-size: 15px; color: #313131; font-weight: 400; margin-top: 13px; ">Scrum Master/Programmer</p>
              </div>
              <div class="col-sm-4" style="border: 1px solid #b9b6af; padding-top: 20px; border-radius: 15px; height: 200px;">
                <a href="https://www.facebook.com/shan.kc.96"><img src="images/home/shanti.png" width="100px" height="100px" class="logopic" alt="" /></a>
                <p class="dev-names" style="font-family: abel; font-size: 15px; color: #313131; font-weight: 600; margin-top: 13px; color: #0ba3b8;">Shan Kc David</p>
                <p class="dev-names" style="font-size: 15px; color: #313131; font-weight: 400; margin-top: 13px; ">Web Designer</p>
              </div>
              <div class="col-sm-4" style="border: 1px solid #b9b6af; padding-top: 20px; border-radius: 15px; height: 200px;">
                <a href="https://www.facebook.com/paulinemanalangquiroz"><img src="images/home/pau.png" width="100px" height="100px" class="logopic" alt="" /></a>
                <p class="dev-names" style="font-family: abel; font-size: 15px; color: #313131; font-weight: 600; margin-top: 13px; color: #0ba3b8;">Pauline M. Quiroz</p>
                <p class="dev-names" style="font-size: 15px; color: #313131; font-weight: 400; margin-top: 13px; ">Documentation Manager</p>
              </div>
              <div class="col-sm-4" style="border: 1px solid #b9b6af; padding-top: 20px; border-radius: 15px; height: 200px;">
                <a href="https://www.facebook.com/KyrieLurz"><img src="images/home/Melvs.png" width="100px" height="100px" class="logopic" alt="" /></a>
                <p class="dev-names" style="font-family: abel; font-size: 15px; color: #313131; font-weight: 600; margin-top: 13px; color: #0ba3b8;">Melvin M. Reyes</p>
                <p class="dev-names" style="font-size: 15px; color: #313131; font-weight: 400; margin-top: 13px; ">System Administrator</p>
              </div>
              <div class="col-sm-4" style="border: 1px solid #b9b6af; padding-top: 20px; border-radius: 15px; height: 200px;">
                <a href="https://www.facebook.com/itsmekek21"><img src="images/home/kikiikiki.png" width="100px" height="100px" class="logopic" alt="" /></a>
                <p class="dev-names" style="font-family: abel; font-size: 15px; color: #313131; font-weight: 600; margin-top: 13px; color: #0ba3b8;">Jessica Ann Quiroz</p>
                <p class="dev-names" style="font-size: 15px; color: #313131; font-weight: 400; margin-top: 13px; ">Quality Assurance Manager</p>
              </div>

              
              </div>
              <p></p>
            </div>
          </div>

        </div>
      </div>
    </div>
    

    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-4" style="padding-bottom: 10px;">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li style="margin-top: 3px;"><a href="#"><i class="fa fa-phone"></i> 09192252269</a></li>
                <li style="margin-top: 3px;"><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSPFdGxwDZFsFcqgmvDQXQswdLstSBhTBgvLWxBvLlfbrCfTjwJDhNFwqvmQDJKMMxHGkFdF"><i class="fa fa-envelope"></i> kapampanganartworkph@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="contactinfo">
              <div class="nav nav-pills">
            <p style="margin-top: 10px; text-align: center; font-family: arial;">© Kapampangan Artwork Exhibit, 2022. All rights reserved.</p>
            </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav" style="margin-left: -150px;">
                <li style="margin-top: 3px;"><a href="https://www.facebook.com/Kapampangans-Artwork-Exhibit-106967298649838/"><i class="fa fa-facebook"></i></a></li>
                <li style="margin-top: 3px;"><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSPFdGxwDZFsFcqgmvDQXQswdLstSBhTBgvLWxBvLlfbrCfTjwJDhNFwqvmQDJKMMxHGkFdF"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
    
  </footer><!--/Footer-->

 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>


 <?php include "LogSignModal.php"; ?> 
<!-- end -->
 
    <!-- jQuery -->
    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript --> 
    <!-- DataTables JavaScript -->
    <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

   
<script src="<?php echo web_root; ?>js/jquery.scrollUp.min.js"></script>
<script src="<?php echo web_root; ?>js/price-range.js"></script>
<script src="<?php echo web_root; ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo web_root; ?>js/main.js"></script> 

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
  <script src="js/contact.js"></script>

    <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
 <script type="text/javascript">
  $(document).on("click", ".proid", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

      });

</script>
 <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var BRGY = document.getElementById('BRGY').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&BRGY="+BRGY+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     

</body>
</html>