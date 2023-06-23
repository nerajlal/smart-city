<?php
include('uhead.php');
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
                   <h1 class="cd-headline clip"><div style="font-size: 60px"><br> <span> <b class="is-visible"><br>YOUR</b><br>SMART CITY<br>IS HERE</b> <b><center>SMART CITY</center></b> <b>SMART CITY</b> </span></div></h1>
                    
                    <ul class="expart_list">
                     <li>SMART</li>
                     <li>CITY</li>
                     <?php


session_start();
    $email=$_SESSION['email']; 
    //echo "$email";


                     ?>
                   </ul> 


                   <!-- <ul class="header_social_share"> 
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>  
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>  
                  </ul>  -->
                </div>
              </div>
            </div>
          </div>
        </div>


       <!-- <div class="scroll_indicator_wrapper"> 
          <a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a> 
      </div> -->
</section > 

     <section class="contact_area section_scroll bg_gray ptb-110" data-scroll-index="6" id="contact"> <div class="container"> <div class="row"> <div class="col-lg-12"> <div class="section_title text-center"> <h3><span>contact</span></h3> <h2 class="title">Get In <span>Touch.</span></h2> </div></div></div><div class="row"> <div class="col-lg-12" style="margin-left: 35%"> <div class="single_contact_info"> <span class="fa fa-phone"></span> <div class="info"> <h4>Phone : </h4> <p>+20 010 2517 8918</p></div></div><div class="single_contact_info"> <span class="fa fa-map-marker"></span> <div class="info"> <h4>Address : </h4> <p>Upper East Side, San Francisco</p></div></div><div class="single_contact_info"> <span class="fa fa-envelope"></span> <div class="info"> <h4>Email : </h4> <p>Support@website.com</p></div></div></div><!-- <div class="col-lg-6">  

 end contact form -->

      </div><div id="section_scroller_button"> <span class="fa fa-angle-down"></span> </div>
