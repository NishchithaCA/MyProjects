<?php
    require_once("php_mailer/class.phpmailer.php");
    $conn = new mysqli("localhost","nualgi2810","OiT4!urtI,}t","nualgi_website");

    // Check connection
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }

    $current_time = date('Y-m-d H:i:s');
    
    if(isset($_POST['contact_form'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $message = $_POST['message'];
        
        $mail_subject = "Contact From";
        
        $mailbody = '<table>';
        $mailbody .= '<tbody>';
        $mailbody .= '<tr>';
        $mailbody .= '<td><b>Name:</b></td>';
        $mailbody .= '<td>'.$name.'</td>';
        $mailbody .= '</tr>';
        $mailbody .= '<tr>';
        $mailbody .= '<td><b>Email:</b></td>';
        $mailbody .= '<td>'.$email.'</td>';
        $mailbody .= '</tr>';
        $mailbody .= '<tr>';
        $mailbody .= '<td><b>Phone:</b></td>';
        $mailbody .= '<td>'.$phone_no.'</td>';
        $mailbody .= '</tr>';
        $mailbody .= '<tr>';
        $mailbody .= '<td><b>Message:</b></td>';
        $mailbody .= '<td>'.$message.'</td>';
        $mailbody .= '</tr>';
        $mailbody .= '</tbody>';
        $mailbody .= '</table>';
        
        $to_email = "info@nualgigold.com";
        
        $insert = "INSERT INTO contact_us SET name = '$name', email = '$email', phone_no = '$phone_no', message = '$message', created_date = '$current_time' ";
        
        //var_dump($insert); die;
        if($conn->query($insert) === TRUE){
            
              $mail = new PHPMailer();
              $mail->SMTPDebug = 2;
              $mail->IsMail();                                     // set mailer to use SMTP
              $mail->Host = "ssl://mail.nualgigold.com:587";  // specify main and backup server
              $mail->SMTPAuth = false;     // turn on SMTP authentication
              $mail->Username = "info@nualgigold.com";  // SMTP username
              $mail->Password = "DrD3ETXd4zDd"; // SMTP password
              $mail->From = $email;
              $mail->FromName = $name;
              $mail->AddAddress($to_email);
              // $mail->AddCC($email);
              $mail->AddReplyTo($email, "reply");                              // set word wrap to 50 characters
              $mail->IsHTML(true);                                  // set email format to HTML
              $mail->Subject = $mail_subject;
              $mail->Body = $mailbody;

              if (!$mail->Send()) {
                echo "<script>alert('Something went wrong');</script>";
              }
              
              echo "<script>alert('We received your message! will get back to you shortly');</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/Images/favicon.ico">

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!------------------------------------------------------------------ css links -------------------------------------------------------------->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/contactus.css">

    <title>Contact Us</title>
</head>

<body>
    <!------------------------------------------------------------ header section------------------------------------------------------------->
   
    <!-- Header -->
    <header class="header">
        <section class="top_part-outer">
            <div class="top_part-inner">
                <div class="left_part">
                    <div class="phone">
                            <div class="image_container">
                                <img src="assets/images/header/header-phone-icon.svg" alt="icon">
                            </div>
                            <span class="for_right-border">
                                +91-9886620003
                            </span>
                            <!--<span>-->
                            <!--    +91-80-26591524-->
                            <!--</span>-->
                    </div>
                    <div class="mail">
                            <div class="image_container">
                                <img src="assets/images/header/header-mail-icon.svg" alt="icon">
                            </div>
                            <span>
                                info@nualgigold.com
                            </span>
                            <!--<span>-->
                            <!--    madhu@nualgi.com-->
                            <!--</span>-->
                     </div>
                </div>
                <div class="right_part">
                    <div class="language">
                        <span>Language</span>
                        <div class="language_dropdown"></div>
                        
                        <!-- language dropdown list -->
                        <div class="language_dropdown-list">
                            <ul>
                                <li>English</li>
                                <li>Hindi</li>
                                <li>Tamil</li>
                                <li>Telugu</li>
                                <li>Malayalam</li>
                                <li>Kannada</li>
                            </ul>
                        </div>
                        <!-- ends language dropdown list -->
                        
                        
                    </div>
                    <div class="social_links">
                        <a href="https://m.facebook.com/Nualgi-Gold-101633295683501/?ref=bookmarks"> <i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#"> <i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/nualgigold/"> <i class="fab fa-instagram"></i></a>
                    <a href="#"> <i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>
            <!-- header nav part -->
        <section class="nav_part-outer">
            <div class="nav_part-inner">
                <div class="logo_container">
                  <a href="home.html">  <img src="assets/images/header/Nualgi-updated-logo-opt-2.png" alt="logo"></a>
                </div>
                <nav class="links_container menu">
                    <ul>
                        <li>
                            <a href="home.html">
                                Home
                            </a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="about.html">-->
                        <!--        About-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li class="dropdown">
                            <div class="product_page-link">
                                Products
                            </div>
                                                       <ul class="dropdown_container">
                                <li>
                                    <a href="plant.html">
                                       Foliar Spray Gold - Plants and Crops
                                    </a>
                                </li>
                                <li>
                                    <a href="soil.html">
                                        Foliar Spray Gold - Soil
                                    </a>
                                </li>
                                <li>
                                    <a href="fish.html">
                                        Fisheries Gold
                                    </a>
                                </li>
                                <li>
                                    <a href="water.html">
                                        Multi Solutions Gold
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="gallery.html">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="certification.html">
                                Certifications
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                        <li class="login_button-container">
                            <a href="#" >
                                <button>
                                    Login
                                </button>     
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <!-- Responsive menu -->
              <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              </div>
            <!-- Ends responsive menu -->
            
            </div>
        </section>
    </header>

    <!-------------------------------------------- body content start here ----------------------------------------------------------------------->

    <section class="contact_section">
      
             <img src="../assets/Images/home/banner-8.jpg" alt="img">
            <!--<h1>Feel free to drop us<br>-->
            <!--    a message</h1>-->
            <!--<h3>Quality product is our priority</h3>-->

        

    </section>

    <section class="contact-us-content">

        <div class="row">
            <div class="col-md-4">
                <h2>Contact Us</h2>
                <div class="contact-us-content-inner ">
                    <img src="assets/Images/contact-us/location.svg">
                    <div class="contact-us-content-text">
                        <h3>Address</h3>
                        <h4>SD Trading<br>
                            No.5/4,  2nd Cross,  9th B Main, <br>
                            Hosahalli,  Vijayanagar,<br>  Bangalore-560 040
                        </h4>
                    </div>
                </div>
                <div class="contact-us-content-inner ">
                    <img src="assets/Images/contact-us/phone.svg">
                    <div class="contact-us-content-text">
                        <h3>Phone</h3>
                        <h4>+91-98866-20003<br>
                           
                        </h4>
                    </div>
                </div>
                <div class="contact-us-content-inner ">
                    <img src="assets/Images/contact-us/mail.svg">
                    <div class="contact-us-content-text">
                        <h3>Email</h3>
                        <h4>info@nualgigold.com
                           
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-7 drop-message ">
                <h2>Drop a Message</h2>
                 <form method="post">
                    <div class="form-group row">
                        <div class="col-md-10">

                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-5">
                           <input type="tel" class="form-control phone" id="phone_no" name="phone_no" placeholder="Phone no">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-10">
                            <textarea class="form-control" rows="12" id="message" name="message" placeholder="Meassage"></textarea>
                        </div>
                    </div>
                    
                    
                     <button class="send-message-btn" name="contact_form" >Send Message</button>
                   

                </form>
            </div>
        </div>



    </section>
    <section class="above-footer">
        <div class="image">
            <img src="assets/Images/contact-us/contact-bg-2.png">
        </div>
    </section>

    <!-- Footer -->

   <section class="footer">
        <div class="row footer-top">
            <div class="col-md-3 col1">
             <a href="home.html">  <img src="assets/images/contact-us/Nualgi-updated-logo-white.png"></a> 
                <p> Marketed by SD Trading<br> Bangalore
                <br><br>
                +91 98866 20003
                <br><br>
                info@nualgigold.com</p>
                <div class="social_links">
                   <a href="https://m.facebook.com/Nualgi-Gold-101633295683501/?ref=bookmarks"> <i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#"> <i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/nualgigold/"> <i class="fab fa-instagram"></i></a>
                    <a href="#"> <i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-2 col2">
                <h4>Company</h4>
                <div class="links">
                    <a href="home.html">About</a>
                    <a href="water.html">Products</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="certification.html">Certifications</a>
                    <a href="contact.html">Contact Us</a>
                </div>
            </div>
            <div class="col-md-2  col2">
                <h4>Services</h4>
                <a href="#">Login</a>
                <a href="#">My Accounts</a>
                <a href="#">My Orders</a>
                <a href="#">Terms & Conditions</a>
            </div>
            <div class="col-md-5 col4">
                <p>News Letter</p>
                <form class="example">
                    <input type="text" placeholder="Email" name="search2">
                    <button type="submit"><img src="assets/Images/contact-us/arrow-up.svg"></button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">

            <p> All Rights Reserved By nualgigold.com @2021 </p>

            <div class="right-content">
                <p class="for-space">Terms & Conditions</p>
                <p>Privacy Policy</p>
            </div>
        </div>

    </section>
    
    <script src="assets/js/home/toggle.js"></script>


</body>

</html>