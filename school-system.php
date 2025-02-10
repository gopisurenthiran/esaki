<?php include 'web_control/dbc.php'; ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>School System | Esaki Vidyaashram CBSE</title>
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
                            <h1 class="page-title">School System</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li>School System</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- About Section Start -->
            <?php $sel_sys = mysqli_query($link,"select * from school_system where status='Active' order by sort asc"); $i=1;
            while($fet_sys = mysqli_fetch_object($sel_sys)){ ?>
            <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70 <?php if($i%2==0){ echo "gray-bg"; } ?>">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 <?php if($i%2!=0){ echo 'order-last padding-0 md-pl-15 md-pr-15 md-mb-30'; } ?>">
                            <div class="img-part">
                                <img class="" src="web_control/<?php echo $fet_sys->imgurl; ?>" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-70 md-pr-15">
                            <div class="sec-title">
                                <?php if($i==1){ ?>
                                <div class="sub-title orange">SCHOOL SYSTEM</div>

                                <?php } echo $fet_sys->description; ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        <?php $i++; } ?>
            <!-- About Section End -->
        
          
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