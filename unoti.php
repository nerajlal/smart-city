<?php
include('uhead.php');
 include('dbconnect.php');
?>
<html>
<head>
  <style>
/* CSS styles */
.search-container {
  position: relative;
  display: inline-block;
}

input[type="text"] {
  padding: 10px 20px;
  border-radius: 30px;
  border: 2px solid #ccc;
  font-family: 'FontAwesome';
}

input[type="text"]::placeholder {
  font-family: 'FontAwesome';
}

button[type="submit"] {
  position: absolute;
  right: 0;
  top: 0;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 30px;
  cursor: pointer;
}
button[type="submit"]::before {
  content: "\f002";
  font-family: 'FontAwesome';
}
  </style>
</head>
<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
        <div class="bg_overlay bg_image page_cover" style="background-image:url('image/smartcity.jpg')"></div>
            <div id="particles-js"></div>
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
   
             <div class="main">
    <h1>....NOTIFICATIONS....</h1>


    <section id="main-content">
      <section class="wrapper">
        <!-- <h3><i class="fa fa-angle-right"></i></h3> -->
        <!-- <div class="row mb"> -->
          <!-- page start-->
          <div>.</div>
           <div>.</div>
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>


    <!--  <div class="row">
     <div class="col-lg-6"> -->
     
       <form action="" method="POST">
          <div class="card card-default">
              

           <?php

              include 'dbconnect.php';
              $p=1;
                 //$uname=$_GET['id'];
                 //$uname=$_SESSION['username']; 
             session_start();
        $uname=$_SESSION['email'];
              $result = "SELECT * FROM reply where senderid='$uname'";
              $m=mysql_query($result,$conn);
              while($row = mysql_fetch_assoc($m))
              {
              ?>
             
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Author</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $row['author'];?>" 
                         disabled="disabled">
                    <!-- </div> -->
               </div>
                    
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Subject</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['subject'];?>" 
                         disabled="disabled">
                    </div>
               <!-- </div> -->
               
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Message</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $row['message'];?>" 
                         disabled="disabled">
                    <!-- </div> -->
               </div>

               
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for=""></label>
                    <div class="input-group mb-2">
          <!-- <a href=".php"
               <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">REPLY</button> -->
          </a>
          </div>
     </div>
     <div>
          .
     </div>
     <div>
          .
     </div>
     

              

               
               <?php
                 }
?>
          </div>
     </div></form>







            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

