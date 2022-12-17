<?php
               include "sql.php";
   $sql="select * from `industry-info`";
   $result=mysqli_query($con,$sql);
   if($result){
         // echo "insite condtion";
      $row=mysqli_fetch_assoc($result);             
      $main_heading=$row['main_heading'];
      $heading1=$row['heading1'];
      $heading2=$row['heading2'];
      $heading3=$row['heading3'];
      $heading4=$row['heading4'];
      
      $second_section =$row['second-section'];

      $md_section_img_1=$row['middle-img1'];
      $md_section_img_2=$row['middle-img2'];
      $md_section_img_3=$row['middle-img3'];

      $md_section_lable1=$row['middle-heading1'];
      $md_section_lable2=$row['middle-heading2'];
      $md_section_lable3=$row['middle-heading3'];
      
      $middle_discription1=$row['middle-discription1'];
      $middle_discription2=$row['middle-discription2'];
      $middle_discription3=$row['middle-discription3'];
      
      $md_heading1 =$row['middle-discription1'];
      $md_heading2 =$row['middle-discription2'];
      $md_heading3 =$row['middle-discription3'];
      
      $history_year_heading1 =$row['history-year1'];
      $history_year_heading2 =$row['history-year2'];
      $history_year_heading3 =$row['history-year3'];
      $history_year_heading4 =$row['history-year4'];
      
      $history_disc1 =$row['history-disc1'];
      $history_disc2 =$row['history-disc2'];
      $history_disc3 =$row['history-disc3'];
      $history_disc4 =$row['history-disc4'];
      }
?>





<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>industrial</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                              <a class="nav-link" href="#contact">Contact us</a>
                             </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-6 col-lg-6 col-md-12 padding_lert2">
                  <div class="text-img">
                     <figure><img src="images/banner.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12">
                  <div class="text-bg">
                  <div class="text-bg">

                     </div>
                     <h1><?php echo $main_heading;?></h1>
                     <span><?php echo $heading1;?> <br> 
                     <?php echo $heading2;?><br>
                     <?php echo $heading3;?><br>
                     <?php echo $heading4;?>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- services -->
      <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>
                     <?php echo $second_section;?>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="bg_full">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 margin_bott">
                           <div id="color_chang" class="services_box">
                              <figure><img src="<?php echo $row['middle-img1']; ?>" alt="#"/></figure>
                              <h3><?php echo  $md_section_lable1;?> </h3>
                              <p><?php echo $md_heading1;?></p>
                              
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 margin_bott">
                           <div id="color_chang" class="services_box">
                              <figure><img src="<?php echo $row['middle-img2']; ?>" alt="#"/></figure>
                              <h3><?php echo  $md_section_lable2;?></h3>
                              <p><?php echo $md_heading2;?></p>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div id="color_chang" class="services_box">
                              <figure><img src="<?php echo $row['middle-img3']; ?>" alt="#"/></figure>
                              <h3><?php echo  $md_section_lable3;?></h3>
                              <p><?php echo $md_heading3;?></p>
                              
                           </div>
                        </div>
                     </div>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- end services -->
      </div>
      <!-- achieved  section -->
      <div class="achieved">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <span>Our History</span>
                     <h2>How We Achieved</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="achieved_box">
                     <span><?php echo $history_year_heading1;?></span>
                     <div class="start">
                        <h3>We started</h3>
                        <p><?php echo $history_disc1;?></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="achieved_box">
                     <span><?php echo $history_year_heading2;?></span>
                     <div class="start">
                        <h3>NEW Product</h3>
                        <p><?php echo $history_disc2;?></p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="achieved_box">
                     <span><?php echo $history_year_heading3;?></span>
                     <div class="start">
                        <h3>Best Industrial services</h3>
                        <p><?php echo $history_disc3;?></p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="achieved_box">
                     <span><?php echo $history_year_heading4;?></span>
                     <div class="start">
                        <h3> Awerd of the year won</h3>
                        <p><?php echo $history_disc4;?></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end achieved  section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                                       <div class="test_box1">
                                          <figure><img src="images/tests.png" alt="#"/></figure>
                                          <h4> be distracted </h4>
                                       </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/te1.png" alt="#"/></i>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                                          <i class="flot_right"><img src="images/te2.png" alt="#"/></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                                       <div class="test_box1">
                                          <figure><img src="images/tests.png" alt="#"/></figure>
                                          <h4> be distracted </h4>
                                       </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/te1.png" alt="#"/></i>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                                          <i class="flot_right"><img src="images/te2.png" alt="#"/></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                                       <div class="test_box1">
                                          <figure><img src="images/tests.png" alt="#"/></figure>
                                          <h4> be distracted </h4>
                                       </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/te1.png" alt="#"/></i>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                                          <i class="flot_right"><img src="images/te2.png" alt="#"/></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="business">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
                     </div>
                     <h3>Let’s talk for business</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  ere, content here', making itIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  ere, content here', making it</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer >
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="cont">
                        <h3>Free Multipurpose <br>
                           Responsive Landing Page 2019
                        </h3>
                        <p>Modern lighting fast & easily Customizable</p>
                        <a class="read_more" href="#">Get A Quote</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>