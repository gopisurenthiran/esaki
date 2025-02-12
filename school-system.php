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
                            <img src="assets/images/about/school-system-banner.png" alt="Breadcrumbs Image">
                    </div>
                    <div class="inner-page breadcrumbs-text white-color">
                            <h1 class="page-title1">School System</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li> <i class="fa-solid fa-angle-right"></i> </li>
                                <li>School System</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->


<section class id="school-content">
  <div class="container">
    <div class="row">
       
      <div class="col-lg-12 col-md-12 mx-auto col-12 pt-30 pb-30">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#house" role="tab" aria-controls="pills-house" aria-selected="true">House</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#prefectorial" role="tab" aria-controls="pills-prefectorial" aria-selected="false">PREFECTORIAL</a>
          </li>
        </ul>
        <div class="tab-content mt-3">
          <div class="tab-pane fade show active" id="house" role="tabpanel" aria-labelledby="house-tab">
            <div class="row align-items-center">
              <!-- <div class="col-lg-12 order-last padding-0 md-pl-15 md-pr-15 md-mb-30"><div class="img-part"><img class="" src="web_control/uploads/about/1214270804img-1.jpg" alt="About Image"></div></div> -->
              <div class="col-lg-12 pr-70 md-pr-15">
                <div class="sec-title">
                  <h2 class="title mb-17">HOUSE SYSTEM</h2>
                  <div class="desc text-justify">Every student of the school is a member of one of the four Houses, i.e., Citrine, Emerald, Ruby and Sapphire. The House system is an integral part of public school and helps in co-ordinating various activities in the corporate life, and leads to the building up of Like French team and camaraderie of a lasting nature among students. Each House is placed under a House Master and a House Mistress who are directly responsible for the discipline and general well-being of members of the House.</div>
                  <div class="desc text-justify">They are assisted in their tasks by a team of tutors and Dorm Parents, the latter attending to the material administration of the dormitory. Dormitory Nurses, with special aptitude for looking after even very young children have been employed, so that the personal needs of these children are carefully attended to. Regular Inter-House competitions are held throughout the year in various co-curricular and extra-curricular activities which foster healthy competitive spirit. The House wise with one another to keep the house flag aloft and win the coveted Cock-House trophy.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="prefectorial" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row align-items-center">
              <!-- <div class="col-lg-6 "><div class="img-part"><img class="" src="web_control/uploads/about/825306533img-2.jpg" alt="About Image"></div></div> -->
              <div class="col-lg-12 pr-70 md-pr-15">
                <div class="sec-title">
                  <h2 class="title mb-17">THE PREFECTORIAL SYSTEM</h2>
                  <div class="desc text-justify">The prefectorial system forms the backbone of life in this public school. The initiative and capabilities of individual students are continuously watched and those with inherent or cultivated leadership qualities are selected to the Prefects’ Council. The students’ affairs are managed by this Council, headed by the School Captain and the Head Girl. At the house level, the House Master /Mistress and tutors assisted by senior students who are selected as House Captains and Prefects, manage the activities of the Houses.</div>
                  <div class="desc text-justify">The Prefects’ Council is encouraged to manage their affairs independently, under the guidance of the staff members. While the School Captain and Head Girl serve as the link between the school authorities and the students’ community, the House Captains serve as the link between the House Masters/Mistress and the members of the house.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

            <!-- About Section Start -->
            <!-- <?php $sel_sys = mysqli_query($link,"select * from school_system where status='Active' order by sort asc"); $i=1;
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
        <?php $i++; } ?> -->
            <!-- About Section End -->
        
          
        </div> 
        <!-- Main content End --> 

                <!-- Newsletter section start -->
                <!-- <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
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
            <!-- </div> -->
            <!-- Section bg Wrap 2 End -->
        <!-- </div>  -->
        <!-- Main content End --> 
     
        <?php include "comman/footer.php"; ?>
        <?php include "comman/script.php"; ?>

    </body>

</html>