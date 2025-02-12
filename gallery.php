<?php include 'web_control/dbc.php'; ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>Gallery | Esaki Vidyaashram CBSE</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <?php include "comman/link.php"; ?>
     <style>
         .socialimgaes img
         {
                width:50px;
         }
.socialimgaes {padding:30px 0px;}
.pulse {
  animation: pulse 1s infinite ease-in-out alternate;
}
@keyframes pulse {
  from { transform: scale(0.8); }
  to { transform: scale(1.2); }
}
     </style>
    </head>
    <body class="defult-home">
         <?php include "comman/header.php"; ?>
    <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo1.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 
        <!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                    <div class="breadcrumbs-img">
                            <img src="assets/images/gallery-banner.png" alt="Breadcrumbs Image">
                    </div>
                    <div class="gallery breadcrumbs-text">
                            <h1 class="page-title4">GALLERY</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li> <i class="fa-solid fa-angle-right"></i> </li>
                                <li>GALLERY</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->
<div id="rs-popular-courses" class="rs-popular-courses style1 orange-color modify1 pt-25 pb-100 md-pt-70 md-pb-70">
                <div class="container">

                    <div class="gridFilter style2 text-center mb-30">
                        <button class="active" data-filter="*" fdprocessedid="55yj8g">All</button>
                        <?php $sel_gal = mysqli_query($link,"select type from gallery group by type"); $i=1;
                        while($fet_type = mysqli_fetch_object($sel_gal)){ ?>
                        <button data-filter=".<?php echo str_replace(" ","",$fet_type->type); ?>" fdprocessedid="gmyyvq" class=""><?php echo $fet_type->type; ?></button>
                      <?php $i++; } ?>
                        
                    </div>
                    <div class="row grid" style="position: relative; height: 847.674px;">
                      <?php
                      $sel_pic = mysqli_query($link,"select * from gallery where status='Active' order by sort asc");
                      while($fet_pic = mysqli_fetch_object($sel_pic)){ ?>

                        <div class="col-lg-3 mb-30 col-md-3 col-sm-6 col-xs-12 grid-item <?php echo str_replace(" ","",$fet_pic->type);; ?>" style="position: absolute; left: 0%; top: 0px;">
                            <div class="gallery-img">
                                <a class="image-popup" href="web_control/<?php echo $fet_pic->imgurl; ?>"><img src="web_control/<?php echo $fet_pic->imgurl; ?>" alt=""></a>
                            </div>
                        </div>
                      <?php } ?>
                        
                    </div>
                   
                </div>
            </div>
    
                              <div class="sec-title6 text-center mb-10">
                        <div class="img-part mb-10">
                            <img src="assets/images/line.png" alt="">
                        </div>
                      
        </div> 
        <!-- Main content End --> 

                <!-- Newsletter section start -->
               <!--  <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-lg-8 sm-mb-30">
                                    <div class="sec-title">
                                        
                                        <h2 class="title mb-0 white-color">Enquiry Us to join Our Community </h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                       <div class="btn-part text-right" >
                                    <a class="readon2 mod" style="background: #283d67;" href="#">Read More</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Newsletter section end -->
            </div>
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End --> 
     
        <?php include "comman/footer.php"; ?>
        <?php include "comman/script.php"; ?>

    </body>

</html>