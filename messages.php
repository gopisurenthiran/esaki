<?php include 'web_control/dbc.php'; ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>Messages | Esaki Vidyaashram CBSE</title>
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
                            <h1 class="page-title">Messages</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li>Messages</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

        <div id="rs-popular-courses" class="rs-popular-courses style6 gray-bg4 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mb-50">
                            <div class="sec-title6">
                              
                               <h2 class="title title2"> Our Messages</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="gridFilter style2 modify1 mb-10">

                                <?php $sel_msg = mysqli_query($link,"select title from messages where status ='Active' order by sort asc"); $i=1;
                                while($fet_msg = mysqli_fetch_object($sel_msg)){ ?>
                               
                                <button <?php if($i==1){ ?> class="active" <?php } ?> <?php if($i==2){ ?> onclick="myFunction()" <?php } ?> 
                                <?php if($i==4){ ?> onclick="removeClass2()" <?php } ?>
                                <?php if($i==3){ ?> onclick="removeClass()" <?php } ?> data-filter=".filter<?php echo $i; ?>" fdprocessedid="38ehid" ><?php echo $fet_msg->title; ?></button>
                            <?php $i++; } ?>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row grid" style="position: relative; height: 651.974px;">
                        <?php $sel_msg = mysqli_query($link,"select * from messages where status ='Active' order by sort asc"); $i=1;
                                while($fet_msg = mysqli_fetch_object($sel_msg)){ ?>
                        <div class="col-lg-12 col-md-12 grid-item filter<?php echo $i; ?> <?php if($i!=1){ echo "hide"; } ?>" style="position: absolute; left: 0%; top: 0px;" id="filter<?php echo $i; ?>">
                            <div class="courses-item mb-30">
                              <div class="row p-5">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <?php if(!empty($fet_msg->imgurl)){ ?>
                                 <img class="mx-auto d-block" src="web_control/<?php echo $fet_msg->imgurl; ?>">
                             <?php } ?>
                             </div>

                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"> 
                                    <?php echo $fet_msg->details; ?>
                                </div>
                               
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                     <div class="eleven"><h1> </h1></div>
                                    <?php 
                    echo str_replace("graduation-cap","<i class='fa fa-graduation-cap'></i>",$fet_msg->description); ?>
                                </div>
                              </div>
                            </div>
                        </div>
                    <?php $i++; } ?>
                          
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
<script type="text/javascript">
    function myFunction() {
  var element = document.getElementById("filter2");
  element.classList.remove("hide");
}
function removeClass()
{
    
 var e = document.getElementById("filter3");
 e.classList.remove("hide");
}
function removeClass2()
{
    
 var e = document.getElementById("filter4");
 e.classList.remove("hide");
}
</script>
    </body>

</html>