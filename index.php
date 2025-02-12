<?php include 'web_control/dbc.php';
    $sel_slider = mysqli_query($link,"select * from slider where status = 'Active' order by sort asc");
    while($fet_slider = mysqli_fetch_array($sel_slider)){
        $slider_arr[] = $fet_slider;
    }

?>
    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <style>
        </style>
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



           
                        
        <!--banner-->
        <section class="cbsehomepage">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 p-0">
                    <div class="">
                      <img src="assets/images/slider/banner_new.png" style="width: 100%;">
                      <div class="text-position">
                        <h2 class="text-white h2-font-style d-none d-md-none d-lg-block">Inspiring Young Minds, Shaping Bright Futures</h2>
                       </div>
                        <p class="text-white hero-content d-none d-md-none d-lg-block"> <span>At Esaki International Board, education meets excellence. Empowering students with knowledge, values, and global perspectives for a successful tomorrow</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        
        
            <!--end-->
              


                <section class="py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 m-auto">
                                <div class="e-commerce-brand">
                                    <!-- <h4 class="home-section-first-small-titles head-font-style">About us</h4> -->
                                    <h2 class="first-maintitle">Welcome to</h2>
                                    <span class="first-section-title head-font-style">Esaki Vidyaashram</span> </h2>
                                    <p class="content-last-section content-font-style">Esaki Vidyaashram is synonymous with standardized education. To meet the growing academic challenges globally, we are determined to run the institution to shape the individuals into truly global citizens with human
                                        values.
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="number-styles head-font-style">+2k</h4>
                                            </div>
                                            <div class="aboutsection">
                                                <h5 class="inner-title head-font-style">Student</h5>
                                                <p class="content-last-section content-font-style">The growing academic challenges globally, we are determined </p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="number-styles head-font-style">350</h4>
                                            </div>
                                            <div class="aboutsection">
                                                <h5 class="inner-title head-font-style">Winning</h5>
                                                <p class="content-last-section content-font-style">The growing academic challenges globally, we are determined </p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="number-styles head-font-style">95%</h4>
                                            </div>
                                            <div class="aboutsection">
                                                <h5 class="inner-title head-font-style">Instructor</h5>
                                                <p class="content-last-section content-font-style">The growing academic challenges globally, we are determined </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <img src="assets/images/image.png" alt="Build Perfect Future" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </section>
            <!--magazinesstart-->
            			                
                          <div id="rs-popular-courses" class="rs-popular-courses style4 orange-color pt-80 pb-80 md-pt-70 md-pb-80" >
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <h2 class="title black-color">E - MAGAZINE</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            
                        </div>
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
                                <div class="index-magazine">
                                    <a href="magazine/vol1_issue2/index.html">
                                        <h2 class="title black-color index-magazine-titles">E-Magazine Vol.1 Issue 2</h2>
                                    </a>
                                       <div class="btn-part">
                                        <a href="magazine/E-Magazine/index.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                
                    </div>
                </div>
            </div>
            <!--magazinesend-->
            
            
            <section class="pt-5 circle-1">

	<div class="container pb-5 position-relative">
		    <h4 class="home-section-second-small-titles  head-font-style">Facilities</h4>
                     <div class="second-section-maintitle mb-5">
                           <h2 class="first-maintitle  head-font-style">To complete a successful schooling at </h2>
                      <span class="second-section-title  head-font-style">Esaki Vidyaashram</span> </h2>
                     </div>
						<div id="demo" class="carousel slide position-relative" data-ride="carousel">

								<!-- Indicators -->
										<ul class="carousel-indicators">
											
												<li data-target="#demo" data-slide-to="1" class="active"></li>
											
											  </ul>

							  
                    								<!-- The slideshow -->
                    								<div class="carousel-inner">
                    								  <div class="carousel-item active carousel-item-left">
                    								<div class="d-flex">

                                                			   <div class="col-lg-4 col-md-6 col-12 last-box-content-section">
                                                    <img src="assets/images/kidsplay.webp" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Kids Play Area</p>
                                                        <p class="last-section-inner-tcontent content-font-style">There are different types of parks. Esaki Vidyaashram has a Kids’ Park as a Pocket Park.</p>
                                               
                                                    </div>
                                                </div>
                                                			   <div class="col-lg-4 col-md-6 col-12 last-box-content-section">
                                                    <img src="assets/images/trasnportfac.webp" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Transport</p>
                                                        <p class="last-section-inner-tcontent content-font-style"> The school buses are the most preferred and frequently used transportation system of  students.</p>
                                                     
                                                    </div>
                                                </div>
											</div>

									</div>	
									
									<div class="carousel-item carousel-item-next carousel-item-left">
									    	<div class="d-flex">
                    										      <div class="col-lg-4 col-md-6 col-12">
                                                    <img src="assets/images/ground.png" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Added Infrastructure</p>
                                                        <p class="last-section-inner-tcontent content-font-style">Fully furnished, Smart Board equipped, spacious classrooms.</p>
                                                 
                                                    </div>
                                                </div>     <div class="col-lg-4 col-md-6 col-12">
                                                    <img src="assets/images/sports.png" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Sports & Co-curricular</p>
                                                        <p class="last-section-inner-tcontent content-font-style">The school has a riding club with 30 riding horses with connected infrastructure like stables..</p>
                                                 
                    
                                                    </div>
                                                </div>
                    											   <div class="col-lg-4 col-md-6 col-12 last-box-content-section">
                                                    <img src="assets/images/food.png" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Food</p>
                                                        <p class="last-section-inner-tcontent content-font-style">A well-balanced, wholesome and nutritious food, both vegetarian and non-vegetarian, with South Indian.</p>
                                                
                                                    </div>
                                                </div>
                                                			   <div class="col-lg-4 col-md-6 col-12 last-box-content-section">
                                                    <img src="assets/images/kidsplay.webp" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Kids Play Area</p>
                                                        <p class="last-section-inner-tcontent content-font-style">There are different types of parks. Esaki Vidyaashram has a Kids’ Park as a Pocket Park.</p>
                                                  
                                                    </div>
                                                </div>
                                                			   <div class="col-lg-4 col-md-6 col-12 last-box-content-section">
                                                    <img src="assets/images/trasnportfac.webp" alt="Build Perfect Future" class="img-fluid">
                                                    <div class="lastsection-maincontent">
                                                        <p class="last-section-inner-title  head-font-style">Transport</p>
                                                        <p class="last-section-inner-tcontent content-font-style"> The school buses are the most preferred and frequently used transportation system of  students.</p>
                                                 
                                                    </div>
                                                </div>
                                                
										</div>

										
	
										</div>
									
								</div>
							  
								<!-- Left and right controls -->
				
				<a class="carousel-control-prev" href="#demo" data-slide="prev" style="opacity: 1; left: -10%;">
    <i class="fa fa-arrow-left" aria-hidden="true" ></i>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next" style="opacity: 1; right: -10%;">
    <i class="fa fa-arrow-right" aria-hidden="true" ></i>
</a>

	
							  
							  </div>



				</div>
			

	</section>
                    
                <!---desktopstart-->

                <!--<section class="py-4 d-lg-block d-md-block d-none">-->
                <!--    <div class="container">-->
                <!--        <h4 class="home-section-second-small-titles  head-font-style">Facilities</h4>-->
                <!--        <div class="second-section-maintitle">-->
                <!--            <h2 class="first-maintitle  head-font-style">To complete a successful schooling at </h2>-->
                <!--            <span class="second-section-title  head-font-style">Esaki Vidyaashram</span> </h2>-->
                <!--        </div>-->
                <!--        <div class="row d-flex pt-60 pb-60">-->
                <!--            <div class="col-lg-4 col-md-6 col-12">-->
                <!--                <img src="assets/images/ground.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                <div class="lastsection-maincontent">-->
                <!--                    <p class="last-section-inner-title  head-font-style">Added Infrastructure</p>-->
                <!--                    <p class="last-section-inner-tcontent content-font-style">Fully furnished, Smart Board equipped, spacious classrooms.</p>-->
                <!--                    <div>-->
                <!--                        <a href="#" class="lastsectionbutton"> -->
                <!--                 View More    <img src="assets/images/arow.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                 </a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-4 col-md-6 col-12">-->
                <!--                <img src="../assets/images/sports.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                <div class="lastsection-maincontent">-->
                <!--                    <p class="last-section-inner-title  head-font-style">Sports & Co-curricular</p>-->
                <!--                    <p class="last-section-inner-tcontent content-font-style">The school has a riding club with 30 riding horses with connected infrastructure like stables..</p>-->
                <!--                    <div>-->
                <!--                        <a  href="#"class="lastsectionbutton"> -->
                <!--                 View More    <img src="assets/images/arow.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                 </a>-->
                <!--                    </div>-->

                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-4 col-md-6 col-12 last-box-content-section">-->
                <!--                <img src="../assets/images/food.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                <div class="lastsection-maincontent">-->
                <!--                    <p class="last-section-inner-title  head-font-style">Food</p>-->
                <!--                    <p class="last-section-inner-tcontent content-font-style">A well-balanced, wholesome and nutritious food, both vegetarian and non-vegetarian, with South Indian.</p>-->
                <!--                    <div>-->
                <!--                        <a href="#" class="lastsectionbutton"> -->
                <!--                 View More    <img src="assets/images/arow.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                 </a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</section>-->

                <!---desktopend-->




                <!--mobilestart-->
                <!--<section class="py-4 loaded d-lg-none d-md-none d-block">-->
                <!--    <div class="container">-->
                <!--        <h4 class="home-section-second-small-titles">Facilities</h4>-->
                <!--        <div class="second-section-maintitle">-->
                <!--            <h2 class="first-maintitle">To complete a successful schooling at </h2>-->
                <!--            <span class="second-section-title">Esaki Vidyaashram</span>-->
                <!--        </div>-->
                <!--        <div class="row d-flex pt-60 pb-60">-->
                <!--            <div class="col-lg-4 col-md-6 col-12 last-section-mobile">-->
                <!--                <img src="assets/images/ground.png" alt="Build Perfect Future" class="">-->
                <!--                <div class="lastsection-maincontent mb-5">-->
                <!--                    <p class="last-section-inner-title ">Added Infrastructure</p>-->
                <!--                    <p class="last-section-inner-tcontent content-font-style">Fully furnished, Smart Board equipped, spacious classrooms.</p>-->
                <!--                    <div>-->
                <!--                        <a href="#" class="lastsectionbutton  content-font-style"> -->
                <!--                 View More    <img src="assets/images/arow.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                 </a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-4 col-md-6 col-12  last-section-mobile">-->
                <!--                <img src="../assets/images/sports.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                <div class="lastsection-maincontent mb-5">-->
                <!--                    <p class="last-section-inner-title">Sports &amp; Co-curricular</p>-->
                <!--                    <p class="last-section-inner-tcontent content-font-style">The school has a riding club with 30 riding horses with connected infrastructure like stables..</p>-->
                <!--                    <div>-->
                <!--                        <a href="#" class="lastsectionbutton  content-font-style"> -->
                <!--                 View More    <img src="assets/images/arow.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                 </a>-->
                <!--                    </div>-->

                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-4 col-md-6 col-12 last-section-mobile">-->
                <!--                <img src="../assets/images/food.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                <div class="lastsection-maincontent mb-5">-->
                <!--                    <p class="last-section-inner-title ">Food</p>-->
                <!--                    <p class="last-section-inner-tcontent content-font-style">A well-balanced, wholesome and nutritious food, both vegetarian and non-vegetarian, with South Indian.</p>-->
                <!--                    <div>-->
                <!--                        <a href="#" class="lastsectionbutton  content-font-style"> -->
                <!--                 View More    <img src="assets/images/arow.png" alt="Build Perfect Future" class="img-fluid">-->
                <!--                 </a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</section>-->


                <!--mobileend-->



  <section class="pt-60 pb-60 md-pt-70 md-pb-80 last-section-background" style="background-color: #fff;">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Text Content Column -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <h5 class="section-title">Admission Open for 2025</h5>
                                <p class="content-last-section content-font-style">
                                    Our institution is facilitated with Edu.Com, Smart Class, Math Lab, Robotic Lab, Modern Science Lab, and Language Lab to enhance the perfect study environment for children.
                                </p>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Value Education</li>
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Home Away From Home</li>
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Academic Excellence</li>
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Teaching Strategy</li>
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Community Service</li>
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Individual Attention</li>
                                        <li class="content-font-style"><i class="fa fa-check-circle text-success"></i> Academic Excellence</li>
                                        
                                    </ul>
                                    <div class="text-center mt-3 apply-btnlast-sec">
                                        <a href="#" class="homepagebtn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Image Column -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="image-container" style="position: relative;">
                                    <img src="assets/images/last-section.png" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                    <!--<section class="pt-60 pb-60 md-pt-70 md-pb-80" style="background-color: #f9f9f9;">-->
                    <!--<div class="container">-->
                    <!--      <h4 class="achievementsection">Achievements</h4>-->
                    <!--    <div class="row align-items-center">-->
                    <!--        <div class="col-lg-6">-->
                    <!--        <img src="../assets/images/neet.webp" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;">-->
                    <!--        </div>-->
                    <!--        <div class="col-lg-6">-->
                    <!--        <img src="../assets/images/tenthresult.webp" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;"> -->
                    <!--        </div>-->
                            
                    <!--        </div>-->
                    <!--        </div>-->
                    <!--        </section>-->
                            
                            
                            
        <section class="pt-60 pb-60 md-pt-70 md-pb-80 " style="background-color: #f9f9f9;">
                    <div class="container">
                        <div>    
                        <h4 class="directorsection head-font-style">Director's Message</h4>
                        </div>
                     
                        <div class="row  d-flex align-items-center">
                            
                            <div class="col-lg-12  mt-30">
                                <div class="row">
                                    <div class="col-lg-4">
                            <img src="assets/images/esakki.webp" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;">
                            </div>
                             <div class="col-lg-8">
                            <h2 class="head-font-style">Dr. Esakki Subaya, M.A., ML., Ph.D.,</h2>
                            <h2 class="director-title head-font-style">The Chairman,
                        Esaki Vidyaashram.</h2>
                     
                        <p class="director-para content-font-style"> Dear Prospective Parents,
                        Greetings to all.“The great end of education is to discipline rather than to furnish the mind; to train it to the use of its own powers, rather than fill it with the accumulation of others’.”</p>
                        </div>
                            </div>
                            </div>
                            
                                 <div class="col-lg-12 mt-30">
                                <div class="row">
                            <div class="col-lg-4 d-lg-none d--md-none d-block">
                            <img src="assets/images/esakidurai.webp" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;">
                            </div>
                             <div class="col-lg-8">
                                 <h2 class="head-font-style">Mr. Essaki Durai, BE.,</h2>
                            <h2 class="director-title head-font-style">Managing Director,Esaki Vidyaashram.</h2>
                        
                        <p class="director-para content-font-style" >Greetings to all.
                        "Schooling doesn't merely mean educating the child; the broader objective is the holistic growth of its pupils."</p>
                        </div>
                                <div class="col-lg-4  d-lg-block d--md-block d-none">
                            <img src="assets/images/esakidurai.webp" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;">
                            </div>
                            </div>
                            </div>
                            
                                 <div class="col-lg-12 mt-30">
                                <div class="row">
                                    <div class="col-lg-4">
                            <img src="assets/images/monica.webp" alt="Build Perfect Future" class="img-fluid" style="border-radius: 8px;">
                            </div>
                             <div class="col-lg-8">
                            <h2 class="head-font-style">Dr. Monica D'Souza, M.Sc., M.Ed., Ph.D</h2>
                       <h2 class="director-title head-font-style">Principal,Esaki Vidyaashram.</h2>
                         <p class="director-para content-font-style" >" I am delighted to welcome you all to Esaki Vidyaashram. This is a victorious and high achieving school..."</p>
                        </div>
                            </div>
                            </div>
                            </div>
                            
                            
                            </div>
                            </section>
                                     
                             <!--newandevents-->
                           <section class="newsandeventsspacing">
    <div class="container">
        <div>
            <h4 class="directorsection head-font-style">Latest News & Events</h4>
        </div>
        <div class="row">


            <div class="col-lg-4">
                <div class="img-part">
                    <a href="magazine/vol1_issue2/index.html">
                        <img src="assets/images/events1.png" alt="E-Magazine Vol.1 Issue 2">
                    </a>
                </div>
                <div class="newseventpara ">
                    <a href="https://esakividyaashramcbse.in/view-events.php?id=E-13">
                        <h2 class="title black-color index-magazine-titles "> Sardar Vallabhai Patel's Birthday</h2>
                    </a>

                    <div class="d-flex">
                        <div class="col-lg-6 text-center lasticontitle">
                            <span class="user"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; December 15</span>
                        </div>
                        <div class="col-lg-6 text-center lasticonbutton">
                            <div class="btn-part">
                                <a href="view-events.php?id=E-13">View More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">


                <div class="">
                    <div class="img-part">
                        <a href="magazine/vol1_issue2/index.html">
                            <img src="assets/images/ballonday.jpg" alt="E-Magazine Vol.1 Issue 2">
                        </a>
                    </div>
                    <div class="newseventpara">
                        <a href="https://esakividyaashramcbse.in/view-events.php?id=E-1">
                            <h2 class="title black-color index-magazine-titles">Ballon Day</h2>
                        </a>

                        <div class="d-flex">
                            <div class="col-lg-6 text-center lasticontitle">
                                <span class="user"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;October 5</span>
                            </div>
                            <div class="col-lg-6 text-center lasticonbutton">
                                <div class="btn-part">
                                    <a href="view-events.php?id=E-13">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <div class="col-lg-4 col-md-6 col-12">


                <div class="">
                    <div class="img-part">
                        <a href="magazine/vol1_issue2/index.html">
                            <img src="web_control/uploads/events/9169642272.jpg" alt="E-Magazine Vol.1 Issue 2">
                        </a>
                    </div>
                    <div class="newseventpara">
                        <a href="https://esakividyaashramcbse.in/view-events.php?id=E-2">
                            <h2 class="title black-color index-magazine-titles">KG Coloring Activity</h2>
                        </a>

                        <div class="d-flex">
                            <div class="col-lg-6 text-center lasticontitle">
                                <span class="user"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;June 8 </span>
                            </div>
                            <div class="col-lg-6 text-center lasticonbutton btn-2">
                                <div class="btn-part">
                                    <a href="view-events.php?id=E-13">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
                                     
        <!-- Section Gray bg Wrap start -->
                            <div class="gray-bg">
                                <!-- Blog Section Start -->

                                <!-- Blog Section End -->

                                <!-- Newsletter section start -->
                             <!--    <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                                    <div class="container">
                                        <div class="newsletter-wrap">
                                            <div class="row y-middle">
                                                <div class="col-lg-8 sm-mb-30">
                                                    <div class="sec-title">

                                                        <h2 class="title mb-0 white-color">Enquiry Us to join Our Community </h2>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="btn-part text-right">
                                                        <a class="readon2 mod" style="background: #283d67;" href="contact.php">Read More</a>
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