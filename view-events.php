<?php include 'web_control/dbc.php';
$id = $_GET['id'];
$sel = mysqli_query($link,"select * from events where autoid='$id'");
$fet = mysqli_fetch_object($sel);
 ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title><?php echo $fet->title; ?> | Esaki Vidyaashram CBSE</title>
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
                            <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                    </div>
                    <div class="breadcrumbs-text white-color">
                            <h1 class="page-title"> VIEW EVENTS</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li><a href="news-events.php">Events</a></li>
                                <li><?php echo $fet->title; ?></li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

      <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                    <?php $sel = mysqli_query($link,"select * from event_gallery where event_id='$id'");
                    while($fet = mysqli_fetch_object($sel)){ ?>
                       <div class="col-lg-3 mb-30 col-md-4 col-sm-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="web_control/<?php echo $fet->imgurl; ?>"><img src="web_control/<?php echo $fet->imgurl; ?>" alt=""></a>
                            </div>
                       </div>
                   <?php } ?>
                       
                   </div>
                </div> 
            </div>
          
        </div> 
        <!-- Main content End --> 

                <!-- Newsletter section start -->
                <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
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
                </div>
                <!-- Newsletter section end -->
            </div>
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End --> 
     
        <?php include "comman/footer.php"; ?>
        <?php include "comman/script.php"; ?>

    </body>

</html>