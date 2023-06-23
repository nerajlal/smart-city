<?php
include('ihead.php');
include('dbconnect.php');
?>

<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
          <div class="bg_overlay bg_image page_cover" style="background-image:url('image/smartcity.jpg')"></div>
            <div id="particles-js"></div>
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
                 <div class="home_text_block text-center">
                  <h3><span></span></h3>
                  

<center>
       <form action="" method="POST">
        <!-- <div class="card card-default"> -->
            <!-- <div class="card-header card-header-border-bottom"> -->
                <h2>Send Feedback</h2>
            <!-- </div> -->

         <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
<!--                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div> -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" name="msg" >Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>




               
            </div>
        </div>
    </div>
    <?php
include('dbconnect.php');

if(isset($_POST['msg']))
{
       $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      session_start();
      $lid=$_SESSION['lkey'];
      $uname=$_SESSION['email'];

      $q="INSERT INTO CONTACT(senderid,name, email, subject, message) VALUES('$lid','$name','$uname','$subject', '$message')";
      $m=mysql_query($q,$conn);
      if($m)
      {
        echo"<script>alert('Message successfully sent');
          location.href='ufeedback.php';
      </script>";
      }
      

}


?>

