<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name='description' content="computer hardware and software mobile app developing take services">
    <meta name='keywords' content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSU Solutions</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
  </head>
  <body class="homepage"> 
    <? php include 'footer.php';
    ?>
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
        $bodyContent .= '<a href="rsusolutions.com/register.php"><img src="http://rsusolutions.com/images/rsu-email.jpg" style="width:70%;height:450px;" alt="RSU Solutions" class="center"></a>';
        
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

        $mail->AddAddress('abdulkafoor1996@gmail.com');
        $mail->addCC('asukkoorj@example.com');
        $mail->Body = $adminmsg;
        $mail->Send();

    }

    ?>

	<header data-include="header" id="header">
		
    </header><!--/header-->
		
	
	<section id="register-page">
        <div class="container">
            <div class="center">        
                <h2>Registration</h2>
                <p class="lead">Thank you for choosing rsu solutions. Please provide the following information to help us serve you better</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Category *</label>
                            <select name="category" class="form-control" id="category" required="">
                                <option value="software">Software</option>
                                <option value="mobile services">Mobile App</option>
                                <option value="hardware">Hardware</option>
                                <option value="others">Others</option>
                            </select>
                        </div>                     
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="" class="form-control" rows="12"></textarea>
                        </div>                        
                        <div class="form-group">
                        <button id="book" type="submit" name="submit" class="btn btn-primary btn-lg pull-right" required="required">Book</button>
                        <button id="reset1" class="btn btn-danger btn-lg " type="reset" value="Reset">Clear</button>
                        </div>
                    </div>
                </form>
                <div id="loading">
                    <img src="/images/loading.gif" alt="loading">
                </div> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    


    <div id="divLoading"> 
    </div>



    <section id="bottom" data-include="bottom">
          
    </section><!--/#bottom-->
	
	<div class="top-bar" data-include="bottom-1">
		 
	</div><!--/.top-bar-->
	
	<footer id="footer" class="midnight-blue" data-include="footer">
         
    </footer><!--/#footer-->
     <script>
     
     
function btnEmailSend() {
        
        var email="";
        var Cus_Data="";
        var category="";
        var mobile="";
        var x = $("form").serializeArray();
    $.each(x, function(i, field){
       //$("#serializearray").append(field.name + ":" + field.value + " ");
       if(field.name=="email"){
          email= field.value;
        }
        if(field.name=="category"){
          category= field.value;
        }
        if(field.name=="mobile"){
          mobile= field.value;
        }
        Cus_Data+=field.name + ":" + field.value + "<![CDATA[<br/>]]> ";
    });


        if( email!="" && Cus_Data!="" && category!="" && mobile!="")
        {
            $("div#divLoading").addClass('show');
            var Reqdata="<Root> <ToID>rsusolution@gmail.com</ToID><Subject>"+category+"</Subject><Message> "+Cus_Data+"</Message> <Remarks>  Request mail  </Remarks></Root>"
            EmailSend(Reqdata);
            //width='100%' border='0' cellspacing='0' cellpadding='20'
            var html="<a href='http://rsusolutions.tk'><img src='http://rsusolutions.tk/images/rsu-email.jpg'></a>";
                //html+="<tr><td><p>RSU Solutions.</p></td></tr></table>";
            
            var cus_Reqdata="<Root> <ToID>"+email+"</ToID><Subject> Thank you for Register!!</Subject><Message>Thanks for contacting us! We will get in touch with you shortly. <![CDATA[<br/>]]> <![CDATA[<br/>]]> <![CDATA[<br/>]]> <![CDATA["+html+" ]]> <![CDATA[<br/>]]> Regards,<![CDATA[<br/>]]> <![CDATA[<br/>]]> RSU Solutions<![CDATA[<br/>]]> 8870809744<![CDATA[<br/>]]> rsusolutionhelpdesk@gmail.com <![CDATA[<br/>]]> http://rsusolutions.tk     </Message> <Remarks> service customer mail  </Remarks></Root>"
            EmailSend(cus_Reqdata);
            alert("Appointment Sent Sucessfully!!..Our Executive contact soon!!");
            $("div#divLoading").removeClass('show');
            $('#reset').click();
        }
      
        
    
}


</script>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
      <script src="js/email.js"></script>
      <script src="js/Script.js"></script>

   
  </body>
</html>