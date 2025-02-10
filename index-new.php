<?php include 'web_control/dbc.php';
    $sel_slider = mysqli_query($link,"select * from slider where status = 'Active' order by sort asc");
    while($fet_slider = mysqli_fetch_array($sel_slider)){
        $slider_arr[] = $fet_slider;
    }

?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>Home | Esaki Vidyaashram CBSE</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <?php include "comman/link.php"; ?>
       <style type="text/css">
        <?php $i=1; foreach ($slider_arr as $key => $value) { ?>
           .rs-slider.main-home .slider-content.slide<?php echo $i; ?> {
              background: url(web_control/<?php echo $value['imgurl']; ?>);
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
            }
            <?php $i++; } ?>
            <?php $sel_admission = mysqli_query($link,"select * from admission"); 
                $fet_admission = mysqli_fetch_object($sel_admission); ?>
            .rs-cta.style2 .partition-bg-wrap.inner-page:before {
              background: url(web_control/<?php echo $fet_admission->image1; ?>) !important;
              background-size: cover;
            }
            .rs-cta.style2 .partition-bg-wrap.inner-page:after {
              background: url(web_control/<?php echo $fet_admission->image2; ?>) !important;
              background-size: cover;
            }
            .rs-cta.style2 .partition-bg-wrap:before {
  background: url(web_control/<?php echo $fet_admission->image1; ?>);
  left: 0;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.rs-cta.style2 .partition-bg-wrap:after {
  background: url(web_control/<?php echo $fet_admission->image2; ?>);
  right: 0;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: left;
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
           

            <!-- Slider Section Start -->
            <div class="rs-slider main-home">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <?php $i=1; foreach ($slider_arr as $key => $value) { ?>
                    <div class="slider-content slide<?php echo $i; ?>">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"><?php echo $value['title1']; ?></div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"><?php echo $value['title2']; ?></h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <?php if(!empty( $value['btn_name'])){ ?>
                                    <a class="readon orange-btn main-home" href="<?php echo $value['btn_url']; ?>"><?php echo $value['btn_name']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; } ?>
                   
                </div>

         
            </div>
            <!-- Slider Section End -->      
            
                        
                        
    <!--           <div id="rs-popular-courses" class="rs-popular-courses style4 orange-color pt-110 pb-120 md-pt-70 md-pb-80"  style="-->
    <!--background-color: #cfd4dda1;">-->
    <!--            <div class="container">-->
    <!--                <div class="sec-title3 text-center mb-45">-->
                     
    <!--                    <h2 class="title black-color">E - MAGAZINE</h2>-->
    <!--                </div>-->
    <!--                <div class="row">-->
                         <!--Empty column for spacing -->
    <!--                    <div class="col-lg-2 col-md- mb-30"></div>-->
            
                        <!-- E-Magazine Vol.1 Issue 1 -->
    <!--                    <div class="col-lg-4 col-md-6 col-12 mb-30 polaroid-item1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"">-->
    <!--                        <div class="">-->
    <!--                            <div class="img-part">-->
    <!--                                 <a href="magazine/E-Magazine/index.html">  <img src="web_control/uploads/campus/6041662095.jpg" alt="E-Magazine Vol.1 Issue 1"></a>-->
    <!--                            </div>-->
    <!--                            <div class="index-magazine">-->
    <!--                                <a href="magazine/E-Magazine/index.html"> <h2 class="title black-color index-magazine-titles">E-Magazine Vol.1 Issue 1</h2></a>-->
                                    <!--<div class="btn-part">-->
                                    <!--    <a href="magazine/E-Magazine/index.html">Read More</a>-->
                                    <!--</div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
            
                 
    <!--                   <div class="col-lg-4 col-md-6 col-12 mb-30 polaroid-item1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"">-->
    <!--                        <div class="">-->
    <!--                            <div class="img-part">-->
    <!--                               <a href="magazine/vol1_issue2/index.html"> <img src="web_control/uploads/campus/emagazine2.webp" alt="E-Magazine Vol.1 Issue 2"></a>-->
    <!--                            </div>-->
    <!--                            <div class="">-->
    <!--                              <a href="magazine/vol1_issue2/index.html">   <h2 class="title black-color index-magazine-titles">E-Magazine Vol.1 Issue 2</h2></a>-->
                                    <!--<div class="btn-part">-->
                                    <!--    <a href="magazine/vol1_issue2/index.html">Read More</a>-->
                                    <!--</div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
                           <!--Empty column for spacing -->
                        
                        
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

                            
              <div id="rs-popular-courses" class="rs-popular-courses style4 orange-color pt-110 pb-120 md-pt-70 md-pb-80" style="background-color: #cfd4dda1;">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <h2 class="title black-color">E - MAGAZINE</h2>
        </div>
        <div class="row">
            <div class="col-lg-4  mb-30 polaroid-item1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <div class="">
                    <div class="img-part">
                        <a href="magazine/E-Magazine/index.html">
                            <img src="web_control/uploads/campus/6041662095.jpg" alt="E-Magazine Vol.1 Issue 1">
                        </a>
                    </div>
                    <div class="index-magazine">
                        <a href="magazine/E-Magazine/index.html">
                            <h2 class="title black-color index-magazine-titles">E-Magazine Vol.1 Issue 1</h2>
                        </a>
                        <div class="btn-part">
                            <a href="magazine/E-Magazine/index.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4  mb-30 polaroid-item1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <div class="">
                    <div class="img-part">
                        <a href="magazine/vol1_issue2/index.html">
                            <img src="web_control/uploads/campus/emagazine2.webp" alt="E-Magazine Vol.1 Issue 2">
                        </a>
                    </div>
                    <div class="">
                        <a href="magazine/vol1_issue2/index.html">
                            <h2 class="title black-color index-magazine-titles">E-Magazine Vol.1 Issue 2</h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30 polaroid-item1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <div class="">
                    <div class="img-part">
                        <a href="magazine/vol1_issue3/index.html">
                            <img src="web_control/uploads/campus/emagazine3.jpg" alt="E-Magazine Vol.1 Issue 3">
                        </a>
                    </div>
                    <div class="">
                        <a href="magazine/vol1_issue3/index.html">
                            <h2 class="title black-color index-magazine-titles">E-Magazine Vol.1 Issue 3</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                                            
                <section>
                    <div class="container">
                    <div class="row">
                <div class="col-lg-7">
                  <h5>Admission Open for 2023</h5> 
                  <p>Our institution is facilitated with Edu.Com, Smart Class, Math lab, Robotic Lab, Modern Science Lab and Language Lab to enhance the perfect study environment to children.</p>
                </div>
                <div class="col-lg-5">
                    <img src="assets/images/last-section.png>
                </div>
                    </div>
                    </div>
                </section>
            <!-- Categories Section Start -->
            <!--<div id="rs-categories" class="rs-categories main-home pt-90 pb-100 md-pt-60 md-pb-40">-->
            <!--    <div class="container">-->
            <!--        <div class="sec-title3 text-center mb-45">-->
                        
            <!--            <h2 class="title black-color">Top Objectives</h2>-->
            <!--        </div>-->
            <!--        <div class="row mb-35">-->
            <!--            <?php $sel_pop = mysqli_query($link,"select * from popular_facility where status ='Active' order by sort asc"); -->
            <!--            while($fet_pop = mysqli_fetch_object($sel_pop)){ ?>-->
            <!--            <div class="col-lg-4 col-md-6 mb-30">-->
            <!--                <div class="categories-items">-->
            <!--                    <div class="cate-images">-->
            <!--                        <a href="#"><img src="web_control/<?php echo $fet_pop->imgurl; ?>" alt=""></a>-->
            <!--                    </div>-->
            <!--                    <div class="contents">-->
            <!--                        <div class="img-part">-->
            <!--                            <img src="web_control/<?php echo $fet_pop->imgurl; ?>" alt="">-->
            <!--                        </div>-->
            <!--                        <div class="content-wrap">-->
            <!--                            <h2 class="title"><a href="gallery.php"><?php echo $fet_pop->name; ?></a></h2>-->
                                        
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>  -->
            <!--        <?php } ?>-->
                       
            <!--        </div>-->
            <!--        <div class="col-lg-12 text-center">-->
            <!--            <a class="readon orange-btn main-home" href="vision-mission.php">View All OBJECTIVES </a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- Categories Section End -->

            <!-- About Section Start -->
            <?php $sel_about = mysqli_query($link,"select * from home_about"); 
                $fet_about = mysqli_fetch_object($sel_about); ?>
            <div id="rs-about" class="gray-bg rs-about style2 pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 pr-65 md-pr-15 md-mb-50">
                            <div class="about-intro">
                                <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="sub-title primary">About Us</div>
                                    <h2 class="title mb-21 white-color"><?php echo $fet_about->title; ?></h2>
                                    <div class="desc big white-color"><?php echo $fet_about->description; ?> </div>
                                </div>
                                <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="readon2" href="about.php">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 lg-pl-0 ml--25 md-ml-0">
                            <div class="row rs-counter couter-area mb-40">
                                <div class="col-md-4">
                                    <div class="counter-item one">
                                        <h2 class="number rs-count kplus"><?php echo $fet_about->students; ?></h2>
                                        <h4 class="title mb-0">Students</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item two">
                                        <h2 class="number rs-count"><?php echo $fet_about->award; ?></h2>
                                        <h4 class="title mb-0">Winning Award</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item three">
                                        <h2 class="number rs-count percent"><?php echo $fet_about->instructor; ?></h2>
                                        <h4 class="title mb-0">Instructor</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-area">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="image-grid">
                                        <img src="web_control/<?php echo $fet_about->imgurl1; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-grid">
                                        <img src="web_control/<?php echo $fet_about->imgurl2; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Degree Section Start -->
            <div class="rs-degree style1 modify  pt-100 pb-70 md-pt-70 md-pb-40">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="sub-title primary">Facilities</div>
                                <h2 class="title mb-0">To complete a successful schooling at Esaki vidyaashram</h2>
                            </div>
                        </div>
                        <?php $sel_faci = mysqli_query($link,"select * from facility where status ='Active' order by sort asc"); 
                        while($fet_faci = mysqli_fetch_object($sel_faci)){ ?>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="web_control/<?php echo $fet_faci->home_image; ?>" alt="">
                                <div class="title-part">
                                    <h4 class="title"><a class="text-white" href="facility.php?id=<?php echo $fet_faci->autoid; ?>"> <?php echo $fet_faci->title; ?> </a></h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="facility.php?id=<?php echo $fet_faci->autoid; ?>"> <?php echo $fet_faci->title; ?> </a></h4>
                                    <p class="desc"><?php echo $fet_faci->short_desc; ?></p>
                                    <div class="btn-part">
                                        <a href="facility.php?id=<?php echo $fet_faci->autoid; ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                        
                    </div>
                </div>
            </div>
            <!-- Degree Section End -->

            <!-- CTA Section Start -->
            <div class="rs-cta style2">
                <div class="partition-bg-wrap home2">
                    <div class="container">
                        <div class="row y-bottom">
                            <div class="col-lg-6 pb-50 md-pt-100 md-pb-100">
                              
                            </div>
                            <div class="col-lg-6 pl-62 pt-134 pb-150 md-pl-15 md-pt-45 md-pb-50">
                                <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <h2 class="title mb-16"><?php echo $fet_admission->title; ?></h2>
                                    <div class="desc" style="color: #000; font-size: 16px;"><?php echo $fet_admission->description; ?></div>
                                </div>
                                <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="readon2" href="<?php echo $fet_admission->url; ?>"><?php echo $fet_admission->btn_name; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End -->
            
            
              <!-- Popular Course Section Start -->
            <div class="rs-popular-courses style2 white-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container-fluid">
                 <div class="sec-title3 text-center mb-45">
                        <div class="sub-title">charges</div>
                        <h2 class="title black-color">Our Fees Structure</h2>
                    </div>
                    <div class="row">
                        <?php $sel_fee = mysqli_query($link,"select * from fee_structure limit 4");
                        while($fet_fee = mysqli_fetch_object($sel_fee)){ ?>
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="course-wrap">
                                <div class="front-part">
                                    <div class="img-part">
                                        <img src="web_control/<?php echo $fet_fee->imgurl; ?>" alt="">
                                    </div>
                                    <div class="content-part">
                                        
                                        <h4 class="title"><a href="#" class="text-white"><?php echo $fet_fee->title; ?></a></h4>
                                    </div>
                                </div>
                                <div class="inner-part">
                                    <div class="content-part">
                                       
                                        <h4 class="title"><a href="#"><?php echo $fet_fee->title; ?></a></h4>
                                        <?php 
                                        $desc = str_replace("money","<i class='fa fa-money'></i>",$fet_fee->description);
                                        echo  str_replace("inr ","<i class='fa fa-inr'></i>",$desc);?>
                                    </div>
                                </div>
                                <div class="price-btn">
                                    <a href="fees.php">₹<?php echo $fet_fee->amount; ?><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>
                   
                </div>
            </div>
           
            <!-- Popular Course Section End -->

            <!-- Latest Events Section Start -->
    <?php $sel_events = mysqli_query($link,"select * from events where status = 'Active' and home='Active' order by sort asc limit 3");
    while($fet_events = mysqli_fetch_array($sel_events)){
        $events_arr[] = $fet_events;
    }

 ?>
            <div class="rs-latest-events gray-bg style1 bg-wrap pt-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 pr-65 pt-24 md-pt-0 md-pr-15 md-mb-30">
                            <div class="sec-title mb-42">
                                <div class="sub-title primary">Latest Events</div>
                                <h2 class="title mb-0">NEWS & EVENTS</h2>
                            </div>
                            <div class="single-img wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <img src="web_control/<?php echo $events_arr[0]['imgurl']; ?>" alt="Event Image">
                            </div>
                        </div>
                        <div class="col-lg-6 lg-pl-0">
                            <div class="event-wrap">
                                <?php foreach ($events_arr as $key => $event) {
                                    ?>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date-part bgc1">
                                        <span class="month"><?php echo date('F',strtotime($event['date'])); ?></span>
                                        <div class="date"><?php echo date('d',strtotime($event['date'])); ?></div>
                                    </div>
                                    <div class="content-part">
                                        <!-- <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div> -->
                                        <h4 class="title mb-0"><a href="news-events.php"><?php echo $event['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php } ?>
                                
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <!-- Latest Events Section End -->

            <?php $sel_msg = mysqli_query($link,"select * from messages"); 
                while($fet_msg = mysqli_fetch_array($sel_msg)){
                    $msg_arr[] = $fet_msg;
                } ?>
            <!-- Testimonial Section Start -->
            <div class="rs-testimonial  style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                 <div class="sec-title3 text-center mb-45">
                        <div class="sub-title"> Messages</div>
                        <h2 class="title black-color">Board of Directors</h2>
                    </div>
                    <div class="row">
                        <?php foreach ($msg_arr as $key => $value) {
                        if($value['title']=="Our Chairman"){ ?>
                        <div class="col-lg-5 pr-90 md-pr-15 md-mb-30">
                            <div class="donation-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <img src="web_control/<?php echo $value['imgurl']; ?>" alt="">
                               <?php echo $value['details']; ?>
                                <div class="btn-part">
                                    <a class="readon2 mod" href="messages.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php break; } } ?>
                        <div class="col-lg-7 lg-pl-0 ml--15 md-ml-0">
                            <?php foreach ($msg_arr as $key => $value) {
                        if($value['title']=="Managing Director"){ ?>
                            <div class="testi-wrap mb-50 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="web_control/<?php echo $value['imgurl']; ?>" alt="">
                                </div>
                                <div class="content-part pt-12">
                                    <?php echo $value['details']; ?>
                                </div>
                            </div>
                            <?php break; } } ?>
                            <?php foreach ($msg_arr as $key => $value) {
                        if($value['title']=="Principal"){ ?>
                            <div class="testi-wrap wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="web_control/<?php echo $value['imgurl']; ?>" alt="">
                                </div>
                                <div class="content-part pt-12">
                                    <?php echo $value['details']; ?>
                                </div>
                            </div>
                            <?php break; } } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Section Gray bg Wrap start -->
            <div class="gray-bg">
                <!-- Blog Section Start -->
                
                <!-- Blog Section End -->

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
                                    <a class="readon2 mod" style="background: #283d67;" href="contact.php">Read More</a>
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