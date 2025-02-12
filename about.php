<?php include 'web_control/dbc.php'; ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>About Us | Esaki Vidyaashram CBSE</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <?php include "comman/link.php"; ?>
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

                            <img src="assets/images/about/about-us.png" alt="Breadcrumbs Image">
                    </div>
                    <div class="inner-page breadcrumbs-text white-color">
                            <h1 class="page-title1">About Us</h1>
                            <ul class="d-none d-md-block d-lg-block">
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li> <i class="fa-solid fa-angle-right"></i> </li>
                                <li>About Us</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- About Section Start -->
            <?php $sel_about = mysqli_query($link,"select * from about"); 
                $fet_about = mysqli_fetch_object($sel_about); ?>
            <div id="rs-about" class="rs-about style1 pt-20 md-pt-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                            <div class="img-part">
                                <img class="" src="assets/images/infra.png" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-7 mx-auto pr-70 md-pr-15">
                            <div class="sec-title">
                                <div class="sub-title orange">Esaki Vidyaashram </div>
                                <?php echo $fet_about->description; ?>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->          
        </div> 

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                       <div class="download  text-center text-white">
                           <a href="web_control/uploads/pdf/3838360779Esaki_mainbuilding.pdf" attributes-list="" download="optional-value">
                            <i class="fa fa-download" aria-hidden="true">
                            </i>
                           </a>
                           <h4> Download </h4>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4"></div>

                </div>

            </div>
        </section>
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