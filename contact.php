<?php include 'web_control/dbc.php'; ?>
    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Contact | Esaki Vidyaashram CBSE</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include "comman/link.php"; ?>

    </head>

    <?php if(isset($_POST['submit'])){
    require_once "Mail.php";
     $email_host = "esakividyaashramcbse.in";
    $email_username = "info@esakividyaashramcbse.in";
    $email_password = "CT6ILlEM-O1N";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];
    
    $subject="Contact mail From Website";
    
    $body = "Name : $name <br> Mobile Number : $phone <br> Email : $email <br> Subject : $sub <br> Message : $message";
    

$to = "esakividyaashram.cbse.edu@gmail.com";
$from = $email;
$headers = array('MIME-Version' => '1.0rn',
    'Content-Type' => "text/html; charset=ISO-8859-1rn",
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://'.$email_host,
        'port' => '465',
        'auth' => true,
        'username' => $email_username, //your gmail account
        'password' => $email_password // your password
    ));

// Send the mail
$mail = $smtp->send($to, $headers, $body);

//check mail sent or not
if (PEAR::isError($mail)) {
    echo $mail->getMessage();
    echo '<script> alert('.$mail->getMessage().')</script>';
    echo ("<script>alert('Try Again Later!');</script>");
} else {
    echo ("<script> alert('Thank you for contact us and you will be shortly contacted by our representatives');</script>");
}
    

} ?>

        <body onload="createCaptcha()" class="defult-home">
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
                        <div class="rs-breadcrumbs-contact breadcrumbs-overlay">
                            <div class="breadcrumbs-img-color"></div>
                            <div class="breadcrumbs-text white-color">
                                <h1 class="page-title">CONTACT US</h1>
                                <ul>
                                    <li>
                                        <a class="active" href="index.php">HOME</a>
                                    </li>
                                    <li> <i class="fa-solid fa-angle-right"></i> </li>
                                    <li>CONTACT US</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Breadcrumbs End -->

                        <div class="contact-page-section contact-info-one pt-100 pb-100 md-pt-70 md-pb-70">
                            <div class="container">


                                <div class="row align-items-center mt-4">

                                    <div class="col-lg-6 pl-60 md-pl-15">
                                        <div class="contact-comment-box">
                                            <div class="inner-part">
                                                <h2 class="title mb-mb-15">Get In Touch</h2>
                                                <p>Have some suggestions or just want to say hi? Our support team are ready to help you 24/7.</p>
                                            </div>
                                            <div id="form-messages"></div>
                                            <form method="POST">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                                        </div>
                                                        <div class="col-lg-12 mb-20 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                                        </div>
                                                        <div class="col-lg-12 mb-20 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                                        </div>
                                                        <!--  <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                            </div> -->

                                                        <div class="col-lg-12 mb-20">
                                                            <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12  mb-20">
                                                        <div class="contact-form__input-box">

                                                            <div id="captcha-container" style="display: flex; align-items: center;">
                                                                <div id="captcha" width="200"></div>
                                                                <img id="refresh-captcha" src="refresh.png" alt="Refresh Captcha" style="cursor: pointer; margin-left: 10px;" />
                                                            </div>
                                                            <input type="text" class="from-control mt-3" name="captcha" required="required" placeholder="Enter Captcha" id="captchaInput" onkeyup="validateCaptcha()" />
                                                            <div id="captcha-error" style="color: red;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <input class="btn-send" type="submit" name="submit" value="Submit Now">
                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 md-mb-30">
                                        <!-- Map Section Start -->
                                        <div class="contact-map3">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.2629935335726!2d77.31786377501791!3d8.94789619111024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0429b872fee0d3%3A0x9e36aa5b9d604b77!2sEsaki%20Vidyaashram!5e0!3m2!1sen!2sin!4v1738660253163!5m2!1sen!2sin"
                                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>



                                </div>

                                <div class="contact-info-one__inner mt-50">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="contact-info-one__item" style="--accent-color: #2390FF;">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 pt-10 text-align-center "> <img src="assets/images/noun_Phone_17950751.svg" style="width:38px;height: 38px;">
                                                        <a style="color: #000;" href="tel:<?php echo $fet_con->mobile; ?>"><?php echo $fet_con->mobile; ?></a></div>

                                                </div>
                                            </div>

                                             </div>
                                            <!-- /.col-md-12 -->
                                            <div class="col-md-4 col-lg-4">
                                                <div class="contact-info-one__item" style="--accent-color: #2390FF;">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 pt-10 text-align-center "> <img src="assets/images/noun_Email_254038.svg" style="width:48px;height: 48px;">
                                                        <a style="color: #000;" href="mailto:<?php echo $fet_con->email; ?>"><?php echo $fet_con->email; ?></a></div>

                                                </div>
                                            </div>
                                            </div>
                                            <!-- /.col-md-12 -->
                                            <div class="col-md-4 col-lg-4">
                                               <div class="contact-info-one__item" style="--accent-color: #2390FF;">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 pt-10 text-align-center "> <img src="assets/images/noun_Location_19355641.svg" style="width:48px;height: 48px;">
                                                       
                                                 Tirunelveli, Tenkasi, Tamil Nadu 627814
                                                </div>

                                                </div>
                                            </div>
                                            </div>
                                            <!-- /.col-md-12 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.contact-info-one__inner -->

                                </div>
                            </div>

                        </div>
                        <!-- Main content End -->

                        <!-- Newsletter section start -->

                        <!-- Newsletter section end -->
                    </div>
                    <!-- Section bg Wrap 2 End -->
                </div>
                <!-- Main content End -->

                <?php include "comman/footer.php"; ?>
                    <!-- JS for Captcha -->
                    <script>
                        var code;
            
                        function createCaptcha() {
                            document.getElementById('captcha').innerHTML = "";
                            var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
                            var captcha = [];
                            for (var i = 0; i < 6; i++) {
                                var index = Math.floor(Math.random() * charsArray.length);
                                captcha.push(charsArray[index]);
                            }
            
                            var canvas = document.createElement("canvas");
                            canvas.id = "captcha";
                            canvas.width = 100;
                            canvas.height = 50;
                            var ctx = canvas.getContext("2d");
                            ctx.font = "25px Georgia";
                            ctx.strokeText(captcha.join(""), 0, 30);
            
                            code = captcha.join("");
                            document.getElementById("captcha").appendChild(canvas);
                        }
            
                        function validateCaptcha() {
                            if (document.getElementById("captchaInput").value == code) {
                                document.getElementById("captcha-error").innerHTML = 'Valid Captcha';
                                document.getElementById("submitButton").disabled = false;
                            } else {
                                document.getElementById("captcha-error").innerHTML = 'Invalid Captcha';
                                document.getElementById("submitButton").disabled = true;
                            }
                        }
            
                        // Refresh Captcha on Click
                        document.getElementById("refresh-captcha").onclick = function () {
                            createCaptcha();
                            document.getElementById("captchaInput").value = "";
                            document.getElementById("captcha-error").innerHTML = "";
                            document.getElementById("submitButton").disabled = true;
                        };
                    </script>

                    <?php include "comman/script.php"; ?>

        </body>

    </html>