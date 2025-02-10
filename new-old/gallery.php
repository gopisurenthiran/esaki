<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <?php include "common/header.php" ?>






        <!----desktop-->
        <section class="hero-section-desktop d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="home-hero-banner">
                            <img src="assets/img/gallerybanner.png">
                            <div class="gallery-title">
                                <!-- <h1>Gallery</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----mobile-->
        <section class="hero-section-mobile d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="homebannermobile">
                        <img src="assets/img/gallerybanner.png">
                            <div class="gallery-title">
                                <!-- <h1>Gallery</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
        </section>

<div class="container my-5">
  <div class="row">
    <!-- Vertical Tabs -->
    <div class="col-md-3">
      <ul class="nav nav-tabs row gallery-page-border" id="myTab" role="tablist">
        <li class="nav-item  col-lg-12 col-md-12 col-6 p-2">
          <a class=" gallerytab nav-link  active text-center" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="true">Events 2024-2025</a>
        </li>
        <li class="nav-item  col-lg-12 col-md-12 col-6 p-2">
          <a class="nav-link text-center" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Events 2025-2026</a>
        </li>
      
      </ul>
    </div>

    <!-- Tab Content -->
    <div class="col-md-9">
      <div class="tab-content" id="myTabContent">
        <!-- Gallery Tab -->
        <div class="tab-pane fade show active" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
          <div class="row">
            <!-- Gallery Items -->
            <div class="col-lg-4 col-md-6 col-6 mb-4 p-0">
                                <div class="content polaroid-item">
                                    <a href="gallery-details.php">
                                        <div class="content-overlay"></div>
                                        <img class="content-image img-fluid" src="assets/img/gallery/safety.webp" alt="Safety Features" />
                                        <div class="content-details fadeIn-bottom">
                                            <h6 class="content-title">Safety Features</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        
                            <div class="col-lg-4 col-6 p-0">
                                    <div class="content polaroid-item mt-3">
                                        <a href="gallery-details.php">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/img/gallery/sportsday.webp" />
                                            <div class="content-details fadeIn-bottom">
                                                <h6 class="content-title">Infrastructure</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>
          </div>
        </div>

        <!-- Other Tab -->
        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
        <div class="row">
            <!-- Gallery Items -->
            <div class="col-lg-4 col-6 p-0">
                                    <div class="content polaroid-item mt-3">
                                        <a href="gallery-details.php" >
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/img/gallery/sportsday.webp" />
                                            <div class="content-details fadeIn-bottom">
                                                <h6 class="content-title">Infrastructure</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                   
                        
                                <div class="col-lg-4 col-6 p-0">
                                    <div class="content polaroid-item mt-3">
                                        <a href="gallery-details.php" ">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/img/gallery/foodcourt.webp" />
                                            <div class="content-details fadeIn-bottom">
                                                <h6 class="content-title">Food Court</h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<!-- Slick Slider -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

<script>
  $(document).ready(function() {
    // Initialize slick slider for responsive view
    function toggleSlider() {
      if ($(window).width() < 768) {
        if (!$('.tab-pane.active .row').hasClass('slick-initialized')) {
          $('.tab-pane.active .row').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false
          });
        }
      } else {
        if ($('.tab-pane.active .row').hasClass('slick-initialized')) {
          $('.tab-pane.active .row').slick('unslick');
        }
      }
    }

    toggleSlider();
    $(window).resize(toggleSlider);

    // Reinitialize slider when tabs are switched
    $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
      toggleSlider();
    });
  });
</script>





        <?php include "common/footer.php" ?>