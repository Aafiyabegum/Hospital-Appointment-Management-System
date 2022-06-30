<?php include('inc/header_top.php');?>


<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- adding font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- adding style css -->
  <link rel="stylesheet" href="css/pro.css">
  <link rel="stylesheet" href="css/scrollup.css">
 
 <style type="text/css">
   


 </style>
}
 
<body>
  <div >
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31651.797000631836!2d81.80403100740749!3d7.412604957708809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae53efb548597d5%3A0x6be184346c6743fe!2sKalmunai!5e0!3m2!1sen!2slk!4v1601790692169!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>



<?php


if (isset($_GET['name'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $message = $_GET['message'];
    $email = $_GET['email'];
    $to = "arshospitalkalmunai@gmail.com";
    $from = $name;
    $subject = 'Contact form ARS Hospital';
    $message = '<strong>Name: </strong>'.$name.'<br /><strong>Phone:</strong>'.$phone.'<br/> <strong>E-mail:</strong>'.$email.'<br/> <strong>message:</strong>'.$message.'<br/>';
    $header .= 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
    $header .= "from: $from\n";
    $header .= "MIME-Version: 1.1\n";
    $header .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

    if ( mail($to, $subject, $message, $header)){
        echo "Submitted Successfully";
    }else{
        echo"There is a problem";
    }

}




?>


  
  <section id="fancy-form" style="margin-bottom: 25px;">
   <div class="container">
    <div class="form-sections">
      <!-- Form left -->
      <div class="Form-left">
        <h2 style="color:blue; font-family:georgia,garamond;">Keep In Touch</h2>
        <div class="line"></div> <!--border-bottom line-->
        <h2 style="color:#1560bd; font-family: georgia,garamond;">Contact with ARS hospital anytime for your <b style="font-family: georgia,garamond; color:blue;">HEALTHY</b> life</h2><br>

        <!--first Heading -->
        <h4 style="font-family: georgia,garamond; color: #0c0c0c; font-weight: bold;">ADDRESS</h4>
         <span style="font-family: georgia,garamond; color:black;">No 139 Seilan Road, Kalmunai, SriLanka</span>
         <hr><br><br>

         <!--second Heading -->
        <h4 style="font-family: georgia,garamond; color: #0c0c0c; font-weight: bold;">PHONE</h4>
         <span style="font-family: georgia,garamond; color:black;">(+)94672229034</span>
         <hr><br><br>

       <!--third Heading -->
        <h4 style="font-family: georgia,garamond; color: #0c0c0c; font-weight: bold;">EMAIL</h4>
         <span style="font-family: georgia,garamond; color:black;">arshospitalkalmunai@gmail.com</span>
         <hr> <br>

         <!-- social media icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
      </div>

      <!-- form right -->
      <div class="Form-right">
        <h2 style="color:blue; font-family:georgia,garamond;">Contact Us</h2>
        <div class="line"></div>
        <!-- form -->
        <form action="">
          <h3 style="font-family:Trebuchet MS; color: #0c0c0c;">NAME</h3>
          <input type="text" name="name" placeholder="Type your Name" autocomplete="off" style="display: block; border: 2px solid blue; border-radius: 10px; color: black;" required><br><br>
          
		  <h3  style="font-family:Trebuchet MS; color: #0c0c0c;">EMAIL</h3>
          <input type="email" name="email" placeholder="Type your Email address" style="display: block; border: 2px solid blue; border-radius: 10px;color: black;" required><br><br>
          
		  <h3  style="font-family:Trebuchet MS; color: #0c0c0c;">PHONE</h3>
          <input type="number" name="phone" placeholder="Type your Phone Number" style="display: block; border: 2px solid blue; border-radius: 10px;color: black;" required><br><br>
          
		  <h3  style="font-family:Trebuchet MS; color: #0c0c0c; ">YOUR MESSAGE</h3>
          <textarea name="message" id="" cols="50" rows="7" placeholder="Type your Message" style="border: 2px solid blue; border-radius: 10px;color: black;" required></textarea><br>
          
		  <button style="font-family:Trebuchet MS;" type="submit" class="rbutton">SEND</button>
        </form>
      </div>
    </div>
    </div>
  </section>

  <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

</body>




<?php include('inc/footer_top.php');?>