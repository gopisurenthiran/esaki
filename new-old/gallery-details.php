<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery Detail</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
 


    <?php include "common/header.php"; ?>


    <section class="gallery-detail-banner">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div class="gallery-detail-content">
                    <h1>Gallery-Details</h1>                  
                  </div>
              </div>
            </div>
        </div>
      </section>

    <!-- Breadcrumb Section -->
    <section class="pb-0 d-md-block d-none">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a>Gallery-details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Image Gallery Section -->
    <section class="container pb-0">
        <h1 class="image-gallery-head">Image Gallery</h1>
        <div class="row gallery">
            <!-- Image 1 -->
            <div class="col-lg-4 col-md-4 col-6">
                <a href="assets/img/gallery/foodcourt.webp">
                    <img class="img-fluid" src="assets/img/gallery/foodcourt.webp" alt="Foodcourt">
                </a>
            </div>
            <!-- Image 2 -->
            <div class="col-lg-4 col-md-4 col-6">
                <a href="assets/img/gallery/transport.webp">
                    <img class="img-fluid" src="assets/img/gallery/transport.webp" alt="Transport">
                </a>
            </div>
            <!-- Image 3 -->
            <div class="col-lg-4 col-md-4 col-6">
                <a href="assets/img/gallery/foodcourt.webp">
                    <img class="img-fluid" src="assets/img/gallery/foodcourt.webp" alt="Foodcourt">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="assets/img/gallery/transport.webp">
                    <img class="img-fluid" src="assets/img/gallery/transport.webp" alt="Transport">
                </a>
            </div>
             <!-- Image 5 -->
             <div class="col-lg-4 col-md-4 col-6">
                <a href="assets/img/gallery/foodcourt.webp">
                    <img class="img-fluid" src="assets/img/gallery/foodcourt.webp" alt="Foodcourt">
                </a>
            </div>
            <!-- Image 3 -->
            <div class="col-lg-4 col-md-4 col-6">
                <a href="assets/img/gallery/sportsday.webp">
                    <img class="img-fluid" src="assets/img/gallery/sportsday.webp" alt="Sports Day">
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "common/footer.php"; ?>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Magnific Popup Initialization -->
    <script>
        $(document).ready(function () {
            $(".gallery").magnificPopup({
                delegate: "a", // Child elements triggering the popup
                type: "image",
                gallery: {
                    enabled: true, // Enable gallery mode
                    navigateByImgClick: true,
                    preload: [0, 1] // Preload previous and next images
                }
            });
        });
    </script>




