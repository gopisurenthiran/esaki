
<?php $sel_con = mysqli_query($link,"select * from contact_details");
$fet_con = mysqli_fetch_object($sel_con); ?>   

 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"rel="stylesheet"> 
 <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>

 <!--Full width header Start-->
        <div class="full-width-header header-style2">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-5">
                                <ul class="topbar-contact d-flex">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:<?php echo $fet_con->email; ?>"><?php echo $fet_con->email; ?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:<?php echo $fet_con->mobile; ?>"><?php echo $fet_con->mobile; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdV6Y9jAOAYunOT694f470o1_XQKN5VSZW_MOFpknXTEEZH1A/viewform">Online Admission</a>/<a href="http://easycollege.in/esakicbse/school/webpayindex.aspx">  Online Payment </a>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="#">CBSE Affiliation NO. - 1930680</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-4 col-md-4">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part">
                                        <a class="dark-logo" href="index.php">
                                            <img src="assets/images/logo.png" alt="">
                                        </a>
                                        <a class="light-logo" href="index.php">
                                            <img src="assets/images/logo.png" alt="">
                                        </a>
                                    </div>
                                    
                                </div>	
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                           <ul class="nav-menu">
                                            
                                             <li class="<?= ($current_page == 'index.php') ? 'active' : '' ?>"><a href="index.php">Home </a></li>
                                             
						   <li class="menu-item-has-children">
                            <a href="#">School</a>
                            <ul class="sub-menu">
                               <li><a href="about.php">About Us</a> </li>
                               <li><a href="school-system.php"> School System</a> </li>
                               <li><a href="messages.php"> Messages</a> </li>
                               <li><a href="vision-mission.php">Mission & Objectives </a> </li>
                               <li><a href="fees.php">Fees Structure </a> </li>
                            </ul>
                           </li>
                           <li class="menu-item-has-children">
                            <a href="#">Facilities</a>

                            
                            <ul class="sub-menu">
                              <li><a href="infrastructure_facilities.php"> INFRASTRUCTURE</a> </li>
                                <li><a href="sports_facilities.php"> SPORTS &amp; CO-CURRICULAR</a> </li>
                                 <li><a href="food.php"> FOOD</a> </li>
                                 <li><a href="kids-play-area.php"> Kids Play Area</a> </li>
                                  <li><a href="transport-details.php"> TRANSPORT</a> </li>
                                                          
                              </ul>


                        </li>
                            <li class="<?= ($current_page == 'gallery.php') ? 'active' : '' ?>"><a href="gallery.php">Gallery</a></li>
							
							<!-- <li><a href="#">Fees</a></li> -->
                      <li class="<?= ($current_page == 'career.php') ? 'active' : '' ?>"><a href="career.php">Career </a></li>
<li class="<?= ($current_page == 'news-events.php') ? 'active' : '' ?>"><a href="news-events.php">News & Events</a></li>
<li class="<?= ($current_page == 'faculty.php') ? 'active' : '' ?>"><a href="faculty.php">Our Faculty</a></li>
<li class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>"><a href="contact.php">Contact Us</a></li>
                                           </ul> <!-- //.nav-menu -->
                                        </nav> 
                                    </div> <!-- //.main-menu -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->


    <div class="sticky-icon">
    <a href="https://www.instagram.com/?hl=en" class="Instagram"><i class="fab fa-instagram"></i> Instagram </a>
    <a href="https://www.facebook.com/" class="Facebook"><i class="fab fa-facebook-f"> </i> Facebook </a>
    <a href="#" class="Google"><i class="fab fa-whatsapp"> </i> whatsapp </a>
    <a href="https://www.youtube.com/" class="Youtube"><i class="fab fa-youtube"></i> Youtube </a>
    </div>

                
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->