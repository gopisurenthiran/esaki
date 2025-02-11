<?php include 'web_control/dbc.php'; ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>News & Events | Esaki Vidyaashram CBSE</title>
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
                            <img src="assets/images/news-banner.png" alt="Breadcrumbs Image">
                    </div>
                    <div class="event breadcrumbs-text white-color">
                            <h1 class="page-title3">NEWS & EVENTS</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                  <li> <i class="fa-solid fa-angle-right"></i> </li>
                                <li>NEWS & EVENTS</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

   <div id="rs-popular-courses" class="rs-popular-courses style4 orange-color pt-110 pb-120 md-pt-70 md-pb-80">
              <div class="container">
                 <!-- <h2 class="title mb-17 text-center">EVENTS</h2> -->
                  <div class="row">
                     <?php $sel_events = mysqli_query($link,"select * from events where status = 'Active' order by sort asc");
    while($fet_events = mysqli_fetch_array($sel_events)){
        $events_arr[] = $fet_events;
    }
   foreach ($events_arr as $key => $event) {
                                    ?> 
                      <div class="col-lg-4 col-md-4 mb-30">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="web_control/<?php echo $event['imgurl'] ?>" alt="">
                              </div>
                              <div class="content-part">
                               
                                  <h3 class="title"><a href="view-events.php?id=<?php echo $event['autoid']; ?>"><?php echo $event['title']; ?></a></h3>

                                  <div class="bottom-part mt-25">
                                      <span class="user"></span>
                                     
                                      <div class="btn-part">
                                          <a class="custom-btn" href="view-events.php?id=<?php echo $event['autoid']; ?>">Read More<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                                  
                              </div>


                          </div>
                      </div>
                    <?php } ?>
                      
                  </div>
              </div>
          </div>
          
        </div> 
        <!-- Main content End --> 

                <!-- Newsletter section start -->
              <!--   <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
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