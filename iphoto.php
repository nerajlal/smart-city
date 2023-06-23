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
                  
<center><br><br><br><br><br><br>
	<b><u><h1 style="color: white">MY PHOTOS</h1></u></b><br><br>


      <?php
       session_start();
              //$uname=$_GET['id'];
              $uname=$_SESSION['email']; 
                  $q="SELECT * fROM picture where username='$uname'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
?>
              <div class="col-md-6">
                <div class="product-item">
                  
                    <img style="width: 490px; height: 250px;" src="<?php echo $r['file']?>" alt="" ></a>
                 
                      <a href="idelete.php?id=<?php echo $r['id'] ?>" style="color:red">DELETE</a>
                      <!-- <input type="submit" value="Update" name="submit"> -->

                    </small>
                   
                  </div>
                </div>
              
            

           <?php

             }
             ?>
             </div>
             </div>
</section > 
