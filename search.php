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
                <div class="col-lg-12">
                 <div class="home_text_block text-center">
                  <h3><span></span></h3>
<form method="get" action="">
    <div class="search-container">
    <input type="text" name="place" id="search" placeholder=" Place">
    <input type="text" name="search" id="search" placeholder=" Search...">
    <button type="submit">
      <span class="visually-hidden"></span>
    </button>
  </div>
<?php
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $place = $_GET['place'];
  $sql="select * from institution where institution_type='$search' and city='$place'";
                  $m=mysql_query($sql,$conn);
                           
                  while($r=mysql_fetch_array($m))
                    {
                  $type=$r['institution_type'];
                  $name=$r['institution_name'];
                  $phone=$r['phone'];
                  $photo=$r['pic'];
                  $username=$r['username'];
                  ?>
                  <br>
<div class="col-md-6">
                <div class="product-item">
                  <?php $key=$r['institution_type']?>
                  <!-- <a href="car-details.php?id=<?php echo $key?>"> -->
                    <img style="width: 490px; height: 250px;" src="<?php echo $r['pic']?>" alt="" ></a>
                  <div class="down-content">
                    <!-- <a href="car-details.php"><h4><?php echo $r['quantity']?> -->
                     <h4> <?php echo $r['institution_name']?>
                      <?php echo $r['institution_type']?> <?php echo $r['city']?> <?php echo $r['phone']?></h4>
                      <h4>
                      <a href="details.php?id=<?php echo $username ?>"> <?php echo 'More Photos'?></a></h4>
                    <!-- <h6><small><del> </del></small>  <?php echo $r['price']?></h6> -->

                    <br>
                    <small>
                      <!-- <strong title="Author"><i class="fa fa-balance-scale"></i>  <td><?php echo $r['quantity'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-money"></i>  <td><?php echo $r['price'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp; 
                      <input type="submit" value="Delete" name="submit">
                      <input type="submit" value="Update" name="submit">-->

                    </small>
                   



                  <?php
                } 
}
?>


