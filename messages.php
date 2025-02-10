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
                            <img src="assets/images/about/messages-banner.png" alt="Breadcrumbs Image">
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

        <!-- <div id="rs-popular-courses" class="rs-popular-courses style6 gray-bg4 pt-100 pb-100 md-pt-70 md-pb-70">
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
        </div>  -->


        <section class id="school-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto col-12 pt-30 pb-30">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#chairman" role="tab" aria-controls="pills-chairman" aria-selected="true">Our Chairman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#managing" role="tab" aria-controls="pills-managing" aria-selected="false">Managing Director</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#principal" role="tab" aria-controls="pills-principal" aria-selected="false">Principal</a>
          </li>
        </ul>
        <div class="tab-content mt-3">
          <div class="tab-pane fade show active" id="chairman" role="tabpanel" aria-labelledby="chairman-tab">
            <div class="row align-items-center">
              <!-- <div class="col-lg-12 order-last padding-0 md-pl-15 md-pr-15 md-mb-30"><div class="img-part"><img class="" src="web_control/uploads/about/1214270804img-1.jpg" alt="About Image"></div></div> -->
              <div class="col-lg-12 pr-70 md-pr-15">
                <div class="courses-item mb-30">
                  <div class="row p-5">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <img class="mx-auto d-block" src="web_control/uploads/about/11985211721.jpg">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                      <h2>Dr. Esakki Subaya, M.A., ML., Ph.D.,</h2>
                      <h5>The Chairman,</h5>
                      <h5>Esaki Vidyaashram.</h5>
                      <h5 class="text-danger">Dear Prospective Parents,</h5>
                      <h5 class="text-danger">Greetings to all.</h5>
                      <p class="text-color">“The great end of education is to discipline rather than to furnish the mind; to train it to the use of its own powers, rather than fill it with the accumulation of others’.”</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="eleven">
                        <!-- <h1></h1> -->
                      </div>
                      <table class="table table-borderless table-responsive text-justify tabl-cont-padd">
                        <tbody>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>I am very glad to present our school Prospectus to the prospective parents and aspiring students. I hope that you will agree with us that the range and quality we offer is just beyond what any parents or students seeking admission in our school will dream of.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>It is the feeling which triggered the “doer” in me and I charted a course in my mind to start a school for young ones of Tenkasi &amp; nearby areas.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>So I have started the school of “ESAKI VIDYAASHRAM” with the aim of quality education in the rural environment. It is aimed to uplift the students in all aspects.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>We are delighted that you are considering Esaki School for your child’s future. This institution has honed and fine tuned a learning and life-skilling system that has been envied and benchmarked across our district for nearly seven years.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Education is not mere accumulation of facts; it is preparation of life itself. Education is knowledge imbued with wisdom and ethics. It develops the personality of the students, moulds their character and develops mental skills to help them cope with problems and challenges of the complex world of today. One of the most significant character traits that need to be instilled in our youth during their education is a finely ingrained attitude of service- before-self. The aim is to make them successful not only in life, but also conscious of their duties and responsibilities towards their fellow citizens. The dynamism of the young talent blooming in our garden is being tapped; the skills and the potentialities of its students are being mined out and chiseled. When Tenkasians leave the portals of their venerable mother- institution, they are ready to take on the world. As technology increasingly takes over knowledge based work, education must keep abreast with the ever changing world. Curriculum must be constantly redesigned to be consistent with its purpose of supporting its students’ personal and professional development.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>I hope our efforts can bring your child’s future bright.</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>
                              <h3 class="">Best Wishes</h3>
                              <h3 class="text-danger">Dr. Esakki Subaya,</h3>
                              <h5>Chairman</h5>
                              <h5>Esaki Vidyaashram</h5>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="managing" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row align-items-center">
              <!-- <div class="col-lg-6 "><div class="img-part"><img class="" src="web_control/uploads/about/825306533img-2.jpg" alt="About Image"></div></div> -->
              <div class="col-lg-12 pr-70 md-pr-15">
                <div class="courses-item mb-30">
                  <div class="row p-5">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <img class="mx-auto d-block" src="web_control/uploads/about/6135449700WhatsApp Image 2023-08-02 at 11.48.37 AM.jpeg">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                      <h2>Mr. Essaki Durai, BE.,</h2>
                      <h5>Managing Director,</h5>
                      <h5>Esaki Vidyaashram.</h5>
                      <p class="text-color">"Schooling doesn't merely mean educating the child; the broader objective is the holistic growth of its pupils."</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="eleven">
                        <!-- <h1></h1> -->
                      </div>
                      <table class="table table-borderless table-responsive text-justify tabl-cont-padd">
                        <tbody>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Education is a fundamental asset that triggers young minds to explore infinite possibilities in the world of excellence. It is the primary factor that helps an individual fight all challenges. The behavioral responses of individuals reflect the overall growth and development of the society.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td class="text-danger">“Serving to humanity is&nbsp;equal to serving to God”</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>At Esaki School, our intent is to promote a progressive society by imparting education that becomes the first step towards empowering students to make this world a better place. Our efforts are to change an individual’s perspective and enable them contribute productively.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>The School has been designed keeping the future in mind. With an unparalleled infrastructure and a great all-round learning environment, the students find the school truly close to their heart. The School focuses on essential life-skills, along with the subjects of literacy, numeracy and sciences. With a belief in offering the best pedagogical practices followed around the world the School helps build strong foundations for future leaders.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>The main purpose of education is to create curiosity and awareness in young minds. Human brain is more complicated than any sophisticated computer system. Children need to be told and trained that every day they have not only to update but add to the information already available in their brains. God has given ears to hear, eyes to observe and voice to enquire about any new things. Through use of these facilities we can constantly add on to our existing knowledge. So much new Research and Developments are taking place in the world that total amount of knowledge gets doubled within a span of seven years. One who is not adding on or learning new things is getting out of date and decreasing his utility to society and rest of the world.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Awareness about Wild Life, Environments and Warming of Earth are all very important and I am glad that these subjects are receiving due attention.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Medical fitness, Personal Hygiene and awareness about nutrition are necessary for every student. I am glad that our institute arranges for an annual medical check-up for all students. Such things will not only improve percentage of attendance but also lead to better performance in academics and an all round improvement in performance of students which is the ultimate aim of all our educational institution.</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Role of parents in their child’s education has long been recognised as a significant factor and usually the children of more active parents who participate in the school activities, perform much better than those who ignore school visits. I am glad that the parents of our children at Esaki School support us in all initiatives.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Our dedicated teachers and staff reinforce the same values that the parents hold dear to help students reach their full potential. We are delighted to continuing to provide a safe, welcoming school environment in which each child will flourish.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>The management and staff are striving hard to make Esaki School a landmark in the field of quality education.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>I hope and expect the benign co-operation from the parents to achieve our task.</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>
                              <h3 class=" ">Best Wishes</h3>
                              <h3 class="text-danger">Mr. Essaki Durai, BE.,</h3>
                              <h5>Managing Director,</h5>
                              <h5>Esaki Vidyaashram</h5>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="principal" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row align-items-center">
              <!-- <div class="col-lg-6 "><div class="img-part"><img class="" src="web_control/uploads/about/825306533img-2.jpg" alt="About Image"></div></div> -->
              <div class="col-lg-12 pr-70 md-pr-15">
                <div class="courses-item mb-30">
                  <div class="row p-5">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <img class="mx-auto d-block" src="web_control/uploads/about/882710929PRINCIPAL.jpg">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                      <h2>Dr. Monica D'Souza, M.Sc., M.Ed., Ph.D</h2>
                      <h5>Principal,</h5>
                      <h5>Esaki Vidyaashram.</h5>
                      <p class="text-color">" I am delighted to welcome you all to Esaki Vidyaashram. This is a victorious and high achieving school..."</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="eleven">
                        <!-- <h1></h1> -->
                      </div>
                      <table class="table table-borderless table-responsive text-justify tabl-cont-padd">
                        <tbody>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td class="text-danger">Dear Parents and Guardians,</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>I am delighted to welcome you all to Esaki Vidyaashram. This is a victorious and high achieving school that caters very proficiently and warmly for the educational desires of the students of this area.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td class="text-danger">“Children must be taught how to think, not what to think. – Margaret Mead”</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Education is not learning rote and then repeating it in the examination. Our approach is student centred and goes beyond text books and classrooms. Students develop practical skills enabling them to apply their learning to unknown situations and think critically about different issues. These prepare them for a lifelong success.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Each one is precious and special in Esaki Vidyaashram. For this we improve their confidence level, develop their capacity to learn new things, and teach them to be independent. Here we believe that, it is the duty of the teacher to enhance these qualities in the students. Our thrust is not on academic activities, it goes ahead of that. We motivate each one of them to participate in all activities, which develop their confidence level.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>The driving force of every successful school is the teachers. At Esaki Vidyaashram, our teachers are truly dedicated to help children to discover and shape their dreams.</td>
                          </tr>
                          <tr>
                            <td>
                            <i class="fa-solid fa-pencil"></i>
                            </td>
                            <td>Thank you for entrusting us with the opportunity to educate your child. It is going to be a great year.</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>
                              <h3 class="">Best Wishes</h3>
                              <h3 class="text-danger">Dr. Monica D'Souza, M.Sc., M.Ed., P hD</h3>
                              <h5>Principal,</h5>
                              <h5>Esaki Vidyaashram.</h5>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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