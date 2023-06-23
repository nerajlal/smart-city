  <?php
include('shead.php');
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
                  
<br><br>

      <?php
       session_start();
              //$uname=$_GET['id'];
              $uname=$_SESSION['email']; 
                  $q="SELECT * fROM product where username='$uname'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
?>
              <div class="col-md-6">
                <div class="product-item">
                  <?php $key=$r['product']?>
                  <!-- <a href="car-details.php?id=<?php echo $key?>"> -->
                    <img style="width: 490px; height: 250px;" src="<?php echo $r['photo']?>" alt="" ></a>
                  <div class="down-content">
                    <!-- <a href="car-details.php"><h4><?php echo $r['quantity']?> -->
                      <?php echo $r['product']?></h4>
                    <!-- <h6><small><del> </del></small>  <?php echo $r['price']?></h6> -->

                    <br>
                    <small>
                      <strong title="Author"><i class="fa fa-balance-scale"></i>  <td><?php echo $r['quantity'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-money"></i>  <td><?php echo $r['price'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="supdate.php?id=<?php echo $r['id']?>"><h4 style="color:#50f55c">UPDATE</a>&nbsp;&nbsp;&nbsp;
                      <a href="sdelete.php?id=<?php echo $r['id']?>">DELETE</h4></a>

                    </small>
                  </div>
                </div>
              </div>
           <?php

             }
             ?>
              </div>
</section > 
