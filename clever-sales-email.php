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
    <title>Clever Sales | GST Billing Software</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/rsu.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Montserrat:100,100i,200,200i,300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfp0cwUAAAAAGNMqhOZdjrGueU6BsoufN_HOekm"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1856378542620261",
          enable_page_level_ads: true
     });
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        // print_r($_POST);
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$data = [
			'secret' => "6Lfp0cwUAAAAAOytw1c_PfpgZTLVwPxKN8uFs4pQ",
			'response' => $_POST['token'],
			// 'remoteip' => $_SERVER['REMOTE_ADDR']
		];
		$options = array(
		    'http' => array(
		      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		      'method'  => 'POST',
		      'content' => http_build_query($data)
		    )
		  );
		$context  = stream_context_create($options);
  		$response = file_get_contents($url, false, $context);
		$res = json_decode($response, true);
		if($res['success'] == true) {
            // Perform you logic here for ex:- save you data to database
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

  			echo '<div class="alert alert-success">
			  		<strong>Success!</strong> Your inquiry successfully submitted.
		 		  </div>';
		} else {
			echo '<div class="alert alert-warning">
					  <strong>Error!</strong> You are not a human.
				  </div>';
		}

        
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
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /. Container -->
    </nav>

    <!-- Banner-Section -->
    <section class="banner" style="color:white; background-image:url(images/clever/home-bg.png)">
        <!-- Container -->
        <div class="container h-100 d-flex" style="text-align:'center'">
            <div class="jumbotron mx-auto" style="text-align:'center'">
                <h1 style="color:white; text-align:center;padding: 12px;">Smart GST Billing Software to Grow Business</h1>
                <h2 class="" style="text-align:center;"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#largeModal"><i class="fas fa-headset"></i> Live Demo</button>
                <button type="button" onclick="window.location.href = 'https://youtu.be/qskZRVVfx68';" class="btn btn-default"><i class="fas fa-video"></i> Demo Videos</button></h2>
                <!-- Grid row-->
                <div class="row">
                    <div class="col-md-12">
                    <img src="images/clever/home.png" style="width:100%" >
                    </div>
                </div>
                <!--/. Grid row-->
            </div>
        </div>
        <!-- large modal -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:black" id="myModalLabel">Live Demo Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                                <div class="col-sm-12">
                                    <textarea type="text" name="message" class="form-control" placeholder="Extra Message" rows="4" required></textarea>
                                </div>
                            </div>
                            <input type="hidden" value="clever-Sales" name="category">
                            <input type="hidden" id="token" name="token">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            </form>
        </div>
        </div>

        <!-- /. Container -->
        <!-- Services-Section -->
        <div class="services">
            <div class="gradient"></div>
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 col-xs-12" style="text-align:center; color:black">
                        <div class="card-block block-1" >
                            <i class="fas fa-receipt" style="color:blue;font-size:40px"></i>
                            <h5>Invoices/Retail Invoices</h5>
                            <p class="">Simple interface to customize & generate Invoice / Retail Invoice instantly. Chase Receipts & Dues easily.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12" style="text-align:center; color:black">
                        <div class="card-block block-1" >
                            <i class="fas fa-code-branch" style="color:blue;font-size:40px"></i>
                            <h5>Multiple Locations / Branches</h5>
                            <p class="card-text">Instantly manage all remote Branches (Stock / Sales / Accounts) from your Desktop/Mobile screen.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12" style="text-align:center; color:black">
                        <div class="card-block block-1" >
                            <i class="fas fa-wallet" style="color:blue;font-size:40px"></i>
                            <h5>Billing</h5>
                            <p class="">Customer Billed send Mail and sms. Multiple Bill save at the time.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12" style="text-align:center; color:black">
                        <div class="card-block block-1" >
                            <i class="fas fa-shopping-basket" style="color:blue;font-size:40px"></i>
                            <h5>Purchase Bill</h5>
                            <p class="card-text">Maintain Purchase Bills with Input Tax Credit options for Billing</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12" style="text-align:center; color:black">
                        <div class="card-block block-1" >
                            <i class="fas fa-store" style="color:blue;font-size:40px"></i>
                            <h5>Stock</h5>
                            <p class="">Simple Stock system to track & analyze your item stock. Avoid stock-outs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12" style="text-align:center; color:black">
                        <div class="card-block block-1" >
                            <i class="fas fa-columns" style="color:blue;font-size:40px"></i>
                            <h5>Reports</h5>
                            <p class="card-text">Simple yet powerful accounting with eports all standard reports in few clicks.</p>
                        </div>
                    </div>
                </div>
                <!--/. Grid row-->
            </div>
            <!-- /. Container -->
        </div>
    </section>

    <!-- Testimonial-Section -->
    <section class="about-home" id="about">
        <!-- Container -->
        <div class="container">
           <!-- Grid row-->
            <div class="row box-1" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-3 col-md-12">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h3>Why using?</h3>
                    <p class="heading">Smart GST Billing Software to Grow Business
Create professional Invoices, Track Dues & Manage your accounts easily.</p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-12 main-content">
                            <p>In Today’s Scenario, No doubt, there are different types of billing software users i.e. Stand-alone, Integrated System Users and Highly Unique Users. They all have their unique requirements regarding the software while deciding for a billing software purchase. Stand-alone users demands for a billing software which is highly customizable as well as flexible. Integrated system software users have to do large amount of accounting in which they want to spend lesser amount of manual work. Highly unique software Users are the users who need software which will meet their specific requirements regarding the business.</p>
                            <p>Clever Sales understood the demands of all different users, and decided to design billing software which is capable of fulfilling the requirements of every users. Clever Sales billing software can be customized as per the business you are doing without any hassle. In Clever Sales billing software you can convert your bill in any format you need as well as send bills through email, which saves plenty of your time. This will ensures that invoices are being distributed with higher degree of automation. Even there is provision of sending bills through SMS if one is out of reach of his mail. You can also switch over anywhere from bill to bill which saves lot of time. There is a provision of checking the back date stock position at the time of billing. There are many such provisions which help you in maintaining & managing larger amount of billing work in a much lesser time. The best part of the software is its reporting. There are 1000+ types of reports available which will help in comparing your sales and purchase, profit and loss through which you can think of the betterment of the sales. Get yourself a free trial of the gst billing software and access its efficient features.</p>
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
    <a href="javascript:" id="return-to-top"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6Lfp0cwUAAAAAGNMqhOZdjrGueU6BsoufN_HOekm', {action: 'homepage'}).then(function(token) {
         // console.log(token);
         document.getElementById("token").value = token;
      });
  });
  </script>
</body>

</html>
