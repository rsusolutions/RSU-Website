<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""><meta charset="utf-8">
    <meta name='description' content="Computer Hardware and Software Mobile app developing & All Services are Available.">
    <meta name='keywords' content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSU IT Solutions</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/rsu.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Montserrat:100,100i,200,200i,300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
  
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1856378542620261",
          enable_page_level_ads: true
     });
</script>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $category=$_POST['category'];
        $message=$_POST['message'];

        require 'PHPMailerAutoload.php';
        require("newMail/class.phpmailer.php");
        require("newMail/class.smtp.php");

        $mail = new PHPMailer;

        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->Username = 'rsusolutionhelpdesk@gmail.com';          // SMTP username
        $mail->Password = 'rsu@1234'; // SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                          // TCP port to connect to

        $mail->setFrom('rsusolutionhelpdesk@gmail.com', 'Rsu Solutions');
        $mail->addReplyTo('rsusolution@gmail.com', 'Rsu Solutions');
        $mail->addAddress($email);   // Add a recipient
        //$mail->addCC('asukkoorj@example.com');
        // $mail->addBCC('bcc@example.com');

        $mail->isHTML(true);  // Set email format to HTML

        $bodyContent = '<p>Thankyou for choosing Rsu services.. Your Request has been Approved.. Get in touch Shortly!!</p>';
        $bodyContent .= '<a href="rsusolutions.com/index.php"><img src="http://rsusolutions.com/images/rsu-email.jpg" style="width:70%;height:450px;" alt="RSU Solutions" class="center"></a>';
        
        $adminmsg ='Name:' .$name .'<br>';
        $adminmsg .='Email:' .$email.'<br>';
        $adminmsg .='Mobile:' .$mobile.'<br>';
        $adminmsg .='Category:' .$category.'<br>';
        $adminmsg .='Message:' .$message.'<br>';



        $mail->Subject = 'RSU Services';
        $mail->Body    = $bodyContent;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo '<script language="javascript">';
            echo 'alert("Appointment Sent Sucessfully!!..Our Executive contact soon!!")';
            echo '</script>';
        }

        $mail->ClearAddresses();

        $mail->AddAddress('asukkoorj@gmail.com');
        $mail->addCC('abdulkafoor1996@gmail.com');
        $mail->Body = $adminmsg;
        $mail->Send();

    }

    ?>
    <!-- Nav-bar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="gradient"></div>
        <!-- Container -->
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fa fa-align-right" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Our Products</a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>

                    
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /. Container -->
    </nav>

    <!-- Banner-Section -->
    <section class="banner">
        <div class="gradient"></div>
        <!-- Container -->
        <div class="container h-100 d-flex">
            <div class="jumbotron my-auto ml-auto" data-aos="fade-right" data-aos-duration="600">
                <h1>Need Boost For Your Business?</h1>
                <h2 class="lead">Fill in the form to get a free quote for your business</h2>
                <!-- Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email id" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="mobile" class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 selectdiv">
                                   <select name="category">
                                       <option value="software Ins." > Software Installation</option>
                                       <option value="software App" selected>Software Development</option>
                                       <option value="mobile App">Mobile App Development</option>
                                       <option value="data Recovery">Data Recovery ( HardDisk / Mobile)</option>
                                       <option value="services">Computer hardware/software services</option>
                                       <option value="seo">SEO </option>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea type="text" name="message" class="form-control" placeholder="Extra Message" rows="4" required></textarea>
                                </div>
                            </div>
                            <span>Or Call <a href="#">88708 09744</a></span>
                            <button type="submit" name="submit" class="btn btn-primary">Alright, Get the Free Quote</button>
                        </form>
                    </div>
                </div>
                <!--/. Grid row-->
            </div>
        </div>
        <!-- /. Container -->
        <!-- Services-Section -->
        <div class="services">
            <div class="gradient"></div>
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-block block-1">
                                <p class="card-text">Mobile app development is a term used to denote the act or process. Mobile app is developed for mobile devices....</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-block block-2">
                                <p class="card-text">Web development is a broad term for the work involved in developing a web site for the Internet or an intranet...</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-block block-3">
                                <p class="card-text">Increase sales and customer satisfaction with smarter promotions, instant OTPs, notifications, surveys, and other award-winning bulk SMS services...</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/. Grid row-->
            </div>
            <!-- /. Container -->
        </div>
    </section>

    <!-- Theme-Section -->
    <section class="theme">
        <!-- Container -->
        <div class="container">
           <!-- Grid row-->
            <div class="row" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-3 col-md-12">
                    <div class="box-1">
                        <h2 class="heading">Hi, Welcome to RSU IT Solutions</h2>
                        <p>We offer high quality services that match the expectations of our customers Outstanding customer service is a challenge....</p>
                        <div class="cont">
                            <i class="fa fa-object-group" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row m-0">
                        <a href="services.html" class="col-md-4 col1">
                            <h5>SEO</h5>
                            <h6>Search engine optimization is the process of increasing the quality and quantity of website traffic, increasing visibility of a website or a web page to users of a web search engine....</h6>
                            <img src="images/border.png" alt="">
                        </a>
                        <a href="services.html" class="col-md-4 col3">
                            <h5>Mobile App</h5>
                            <h6>RSU is an expert in delivering high performance and scalable enterprise mobile apps in Android and iOS....</h6>
                        </a>
                        <a href="services.html" class="col-md-4 col2">
                            <h5>design</h5>
                            <h6>Software design is where all great applications start. You have ideas. You have goals. But before you can begin to build your application, you need to weave your ideas and goals together into a clear plan for how your app will work....</h6>
                            <img src="images/border.png" alt="">
                        </a>
                        
                    </div>
                    <hr/>
                    <div class="row m-0">
                        <a href="services.html" class="col-md-4 col4">
                            <h5>marketing</h5>
                            <h6>Look for businesses that reach your target market and consider ways you can work together. Whether you actively market each other's services...</h6>
                            <img src="images/border.png" alt="">
                        </a>
                        <a href="services.html" class="col-md-4 col5">
                            <h5>affilates</h5>
                            <h6>Affiliate marketing is a type of performance-based marketing in which a business rewards one or more affiliates for each visitor or customer brought by the affiliate's own marketing efforts....</h6>
                            <img src="images/border.png" alt="">
                        </a>
                        <a href="services.html" class="col-md-4 col6">
                            <h5>Social</h5>
                            <h6>Social marketing is a form of advertising, it has been a large industry for some time now. but now we have advanced to huge LCD screens and online advertisement on social medias and websites...</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!--/. Grid row-->
        </div>
        <!-- /. Container -->
    </section>

    <!-- Testimonial-Section -->
    <section class="about-home" id="about">
        <!-- Container -->
        <div class="container">
           <!-- Grid row-->
            <div class="row box-1" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-3 col-md-12">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h3>Who we are?</h3>
                    <p class="heading">An 'RSU' is a set of software programs and services that vendors, channel partners and value-added resellers deliver to customers....</p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-8 main-content">
                            <p>Our founders envisioned a company that would excel providing custom software solutions and project management support for businesses seeking an alternative to high-priced consulting firms. They would merge strong business expertise and technical proficiency with exceptional project management skills to ensure that clients received high quality solutions.</p>
                            <p>we are a game changer in the technology industry with an extensive focus on custom software development, mobile applications and staffing. We provide technology solutions that attract, convert, and connect you with prospects......</p>
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="images/image-1.jpg" alt="The Pulpit Rock">
                        </div>
                    </div>
                </div>
            </div>
            <!--/. Grid row-->
            <!-- Grid row-->
            <!-- <div class="row box-1" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-3 col-md-12">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h3>Who we are?</h3>
                    <p class="heading">Lorem Ipsum is simply dummy text of the printing typesetting of type and scrambled...</p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-8 main-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem m has been the industry's printer took a galley of and typesetting industry. Lorem Ipsum has been the industry's printer took a galley</p>
                            <p>Of type and Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled...crambled......</p>
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="images/image-2.jpg" alt="The Pulpit Rock">
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/. Grid row-->
            <!-- Grid row-->
            <!-- <div class="row box-1" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-3 col-md-12">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h3>Who we are?</h3>
                    <p class="heading">Lorem Ipsum is simply dummy text of the printing typesetting of type and scrambled...</p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-8 main-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem m has been the industry's printer took a galley of and typesetting industry. Lorem Ipsum has been the industry's printer took a galley</p>
                            <p>Of type and Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled...crambled......</p>
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="images/image-3.jpg" alt="The Pulpit Rock">
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/. Grid row-->
        </div>
        <!-- /. Container -->
    </section>

    
    <!-- Footer -->
    <footer class="page-footer">
        <div class="gradient"></div>
        <!-- Footer Links -->
        <!-- Container -->
        <div class="container">

            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center">

                <!-- Grid column -->
                <div class="col-md-12">
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li><a href="products.html">Our Products </a></li>
                        <li><a href="services.html">Services </a></li>
                        <li><a href="contact.html">Contact</a></li>
                        
                    </ul>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

            <!-- Footer Links -->
            <div class="row text-center">
                <!-- Copyright -->
                <div class="col-md-12 footer-copyright">
                    <p>© 2018, All Rights Reserved. </p>
                </div>
                <!-- Copyright -->
            </div>

            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center">

                <!-- Grid column -->
                <div class="col-md-8 col-12">
                    <a href="index.php"><img src="images/logo.png" alt="footer-logo"></a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
        </div>
        <!-- /. Container -->
    </footer>
    <!-- Footer -->


    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
