<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"
/>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/nav-responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/nav-rsmenu-main.css">
<link rel="stylesheet" type="text/css" href="assets/css/nav-style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,581&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,581;1,581&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css" integrity="sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php

$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseurl = "https://" . $host . $path . "/";
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>


    <section class=" fixed-top">
        <div class="" id="topbar">
            <div class="container">
               <div class="row">
                   <div class="col-lg-7 col-md-8 col-12">
                      <div class="row">
                        <div class="col-lg-4 col-md-5 col-5 p-1">
                          <div class="top-nav-contact-detail">
                            <a href="tel:+91 9086 979790"><i class="fa-solid fa-phone mr-2"></i>+91 90869 79790</a>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-7 p-1">
                          <div class="top-nav-contact-detail">
                            <a href="mailto:esakivisyaashram@gmail.com"><i class="fa-solid fa-envelope pe-3 mr-2"></i>esakivisyaashram@gmail.com</a>
                          </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-lg-5 col-md-4 col-12 d-md-block d-none">
                        <div class="">
                            <ul class="top-nav-social-media-icon mb-0">
                                <li><a target="_blank" href="https://www.facebook.com/Esakividyaashram"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/esakividyaashramcbse2014/"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCCeu4N546AqNdjYLst8U-AQ"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                   </div>
               </div>
            </div>
        </div>

        <header id="rs-header" class="rs-header">
  <!-- Topbar Area End -->
  <!-- Menu Start -->
  <div class="menu-area menu-sticky">
    <div class="container">
      <div class="row ">
        <div class="col-lg-3 col-md-3 m-auto">
          <div class="logo-cat-wrap">
            <div class="logo-part">
              <a class="dark-logo" href="index.php">
                <img src="assets/img/logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 top-nav-menu">
          <div class="rs-menu-area">
            <div class="main-menu">
              <div class="mobile-menu">
                <a class="rs-menu-toggle">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
              <nav class="rs-menu">
                <ul class="nav-menu">
                  <li class="nav-item 
											<?= ($activePage == 'index') ? 'active':''; ?>">
                    <a href="index">Home </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">About us <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      <li>
                        <a href="faculty"> Faculty</a>
                      </li>
                      <li>
                        <a href="management"> Management</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item 
											<?= ($activePage == 'curriculum') ? 'active':''; ?>">
                    <a href="curriculum">Curriculum</a>
                  </li>
                  <li class="nav-item 
											<?= ($activePage == 'infrastructure') ? 'active':''; ?>">
                    <a href="infrastructure">Infrastructure</a>
                  </li>
                  <li class="nav-item 
											<?= ($activePage == 'news-and-events') ? 'active':''; ?>">
                    <a href="news-and-events">News and Events</a>
                  </li>
                  <li class="nav-item 
											<?= ($activePage == 'gallery') ? 'active':''; ?>">
                    <a href="gallery">Gallery</a>
                  </li>
                  <li class="nav-item 
											<?= ($activePage == 'contact-us') ? 'active':''; ?>">
                    <a href="contact-us">Contact Us</a>
                  </li>
                </ul>
                <!-- //.nav-menu -->
              </nav>
            </div>
            <!-- //.main-menu -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Menu End -->

</header>
        <!--Header End-->
    </section>