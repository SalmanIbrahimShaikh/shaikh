

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo"heloo connect";
$sql = "SELECT * FROM tbl_home";
$result = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_row($result);

//print_r ($row1); 

$title=$row1[1];
$subtitle=$row1[2];
$filename=$row1[3];
$imgname=$row1[4];

$sql1 = "SELECT * FROM tbl_about";
$result1 = mysqli_query($conn, $sql1);
$row2 = mysqli_fetch_row($result1);

//print_r($row2);
//exit;

$stitle=$row2[1];
$sdescrip=$row2[2];
$imgname1=$row2[3];


$sql2 = "SELECT * FROM tbl_education";
$result3 = mysqli_query($conn, $sql2);
//exit;

$sql5 = "SELECT * FROM tbl_experience";
$result5= mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_row($result5);

$year=$row5[1];
$qulification=$row5[2];
$institute=$row5[3];
$description=$row5[4];


$sql8 = "SELECT * FROM tbl_services";
$result8 = mysqli_query($conn, $sql8);


?>
<!DOCTYPE html>
<html lang="zxx">

    
<head>
        <!-- metas -->
        <meta charset="utf-8">
        <meta name="author" content="themepaa">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Dustin - Portfolio Template">
        <meta name="description" content="Dustin - Portfolio Template">
        <!-- title -->
        <title>Salman Shaikh - Portfolio</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- plugin CSS -->
        <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="static/plugin/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="static/plugin/et-line/style.css" rel="stylesheet">
        <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
        <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
        <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">
        <!-- theme css -->
        <link href="static/style/master.css" rel="stylesheet">
    </head>

    <!-- Body Start -->
    <body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="0">
       
        
        <!-- page loading -->
        <div id="loading">
            <div class="load-circle"><span class="one"></span></div>
        </div>
        <!-- end page loading -->

        <!-- Header -->
        <header class="header-nav-left">
            <div class="scroll-in d-flex flex-column">
                <!-- Header logo -->
                <div class="header-logo">
                    <div class="logo">
                        <a class="logo-text" href="#">
                            <img src="salman.jpg" title="" alt="">
                            <span class="label">Salman Shaikh</span>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle" aria-expanded="false">
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- End Header Logo -->
                
                <!-- End Header Menu -->
                <div class="navbar-collapse collapse" id="navbar-collapse-toggle">
                    <ul class="nav navbar-nav m-auto">
                        <li><a class="nav-link" href="#home"><i class="fas fa-home"></i> Home</a></li>
                        <li><a class="nav-link" href="#about"><i class="fas fa-user"></i> About</a></li>
                        <li><a class="nav-link" href="#resume"><i class="fas fa-address-book"></i> Resume</a></li>
                        <li><a class="nav-link" href="#services"><i class="fab fa-buffer"></i> Services</a></li>
                        <li><a class="nav-link" href="#contactus"><i class="fas fa-envelope"></i> Contact</a></li>
                    </ul>
                </div>
                <!-- End Header Menu -->

                <!-- End Header Social -->
                <div class="header-social">
                    <ul class="nav d-none si-t-white si-radisu social-icon d-md-flex">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <!-- End Header Social -->
            </div>
        </header>
        <!-- Header End -->

        <!-- wrapper -->
        <div class="wrapper-right">
            <!-- Main -->
            <main>
                <!-- Home Banner -->
                
                <section id="home" class="home-banner-01 bg-cover bg-center bg-no-repeat" style="background-image: url(../<?php echo $imgname; ?>);">
                    <div class="container">
                        <div class="row full-screen align-items-center">
                            <div class="col-lg-9">
                                <div class="ht-box">               
                                    <div class="ht-text p-25px-t">
                                        <h1 class="white-color m-10px-b"><?php echo $title;?> </h1>
                                        <h2 class="white-color m-0px"><?php echo $subtitle;?> <span id="type-it"></span></h2>
                                        <div class="p-30px-t">
                                            <a class="m-btn m-btn-radius m-btn-t-white" href="../<?php echo $filename;?>" target="_blank">Download My Cv</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    
                <!-- End Home Banner -->

                <!-- about us -->
                <section id="about" class="section white-bg">
                    <div class="container">
                        <div class="row justify-content-center sm-m-40px-b m-60px-b">
                            <div class="col-md-12 col-lg-8">
                                <div class="section-title text-center">
                                    <h2 class="dark-color"><?php echo $stitle;?></h2>
                                </div>        
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="dark-bg p-40px sm-p-20px rounded box-shadow-lg">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3 sm-m-15px-tb">
                                            <img src="static/img/<?php echo $imgname1;?>" title="" alt="">
                                        </div>
                                        <div class="col-md-8 col-lg-9 sm-m-15px-tb">
                                            <p class="white-color-light lead"><?php echo $sdescrip;?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end about us -->

                <!-- resume -->
                <section id="resume" class="section gray-bg">
                    <div class="container">
                        <div class="row justify-content-center sm-m-25px-b m-45px-b">
                            <div class="col-md-12 col-lg-8">
                                <div class="section-title text-center">
                                    <h2 class="dark-color">My Resume</h2>
                                   </div>        
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 m-15px-tb">
                                <div class="sub-title p-30px-b">
                                    <h4 class="dark-color">Education</h4>
                                </div>
                                <div class="resume-box box-shadow white-bg">

                                    <?php
                                        
                                        while($row3 = mysqli_fetch_assoc($result3)){
                                        ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-2 col-4">
                                            <div class="yr"><?php echo $row3["sYear"];?></div>
                                        </div>
                                        <div class="col">
                                            <div class="text">
                                                <h6><?php echo  $row3["sQualification"];?></h6>
                                                <small><?php echo $row3["sInstitute"];?></small>
                                                <p><?php echo $row3["sDescription"];?></p>
                                        
                                            </div>
                                        </div>
                                        </div>                                     
                                        <?php 
                                           
                                            }
                                        ?>


                                </div>
                            </div>
                            <div class="col-lg-6 m-15px-tb">
                                <div class="sub-title p-30px-b">
                                    <h4 class="dark-color">Experience</h4>
                                </div>
                                <div class="resume-box box-shadow white-bg">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-2 col-4">

                                       <div class="yr"><?php echo $year;?></div>
                                        </div>
                                        <div class="col">
                                            <div class="text">
                                                <h6><?php echo $qulification;?></h6>
                                                <small><?php echo $institute;?></small>
                                                <p><?php echo $description;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End resume -->

                <!-- Skill -->
                <section class="section white-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 md-p-15px-r p-40px-r">
                                <h2 class="dark-color font-w-700 m-0px p-20px-b sm-p-15px-b">Professional skills.</h2>
                                <!-- skill -->
                                <div class="skill-lt p-25px-t">
                                    <h6 class="dark-color">HTML5</h6>
                                    <div class="skill-bar">
                                      <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                        <span>75%</span>
                                      </div>
                                    </div>
                                </div>
                                <!-- end skill -->
                                <!-- skill -->
                                <div class="skill-lt">
                                    <h6 class="dark-color">PHP</h6>
                                    <div class="skill-bar">
                                      <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                        <span>80%</span>
                                      </div>
                                    </div>
                                </div>
                                <!-- end skill -->
                                <!-- skill -->
                                <div class="skill-lt">
                                    <h6 class="dark-color">DATABASE</h6>
                                    <div class="skill-bar">
                                      <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>80%</span>
                                      </div>
                                    </div>
                                </div><!-- /skill -->
                                <!-- end skill -->
                                <!-- skill -->
                                <div class="skill-lt">
                                    <h6 class="dark-color">Web Design/UI</h6>
                                    <div class="skill-bar">
                                      <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                        <span>88%</span>
                                      </div>
                                    </div>
                                </div>
                                <!-- end skill -->
                            </div>
                            <div class="col-lg-6 md-m-40px-t">
                                <img src="static/img/skill-box.png" title="" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Skill -->

                <!-- Feature Box -->
                <section id="services" class="section gray-bg">
                    <div class="container">
                        <div class="row justify-content-center sm-m-25px-b m-45px-b">
                            <div class="col-md-12 col-lg-8">
                                <div class="section-title text-center">
                                    <h2 class="dark-color">My Services</h2>
                                 </div>        
                            </div>
                        </div>

                        <div class="row">
                        <?php

                                while($row8 = mysqli_fetch_assoc($result8)){
                                        ?>
                     
                            <div class="col-sm-6 col-lg-4 m-15px-tb">
                                <div class="feature-box-1 text-center p-40px-tb p-20px-lr hover-top transition box-shadow-hover">
                                    <div class="f-icon theme-color m-10px-b">
                                        <i class="<?php echo $row8["sIcon"];?>"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="dark-color font-w-700 m-15px-b"><?php echo $row8["sTitle"];?></h6>
                                        <p class="m-0px"><?php echo $row8["sDescription"];?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                ?>
                            
                       </div>
                      
                 
                </section>
                <!-- Feature Box -->

              
                <!-- contact us -->
                <section id="contactus" class="section gray-bg">
                    <div class="container">
                        <div class="row justify-content-center sm-m-40px-b m-60px-b">
                            <div class="col-md-12 col-lg-8">
                                <div class="section-title text-center">
                                    <h2 class="dark-color">Get in touch</h2>
                                   </div>        
                            </div>
                        </div>
                        <!-- form -->
                        <div class="contact-form border box-shadow white-bg">
                            <div class="sm-title p-25px-b">
                                <h5 class="dark-color">Drop us a line</h5>
                                <p class="m-0px">We are here to answer any question you may have</p>
                                <i class="far fa-paper-plane"></i>
                            </div>


                            <form id="contactForm">
                            <div class="row" >
                                    <div class="col-sm-12">
                                        <div class="container">
                                        <h6  style="color:green" id="hSuccess">
                                        
                                        </h6>

                                   </div>
                                    </div>
                            </div>                                       
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control" required="">
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="email" type="email" placeholder="Email" name="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="message" placeholder="Your Comment" name="message" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-8 sm-m-15px-b">
                                        <small>We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your information</small>
                                    </div>
                                    <div class="col-md-4 text-left text-md-right">
                                        <div class="send">
                                            <input type="button"  class="m-btn m-btn-theme" value="get in touch" onclick="fnSubmit();">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- end form -->
                    </div>
                </section>
                <!-- end contact us -->
            </main>
            <!-- main end -->
            <!-- Footer-->
            <footer class="footer footer-dark">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 m-15px-tb mr-auto">
                                <div class="footer-about">
                                    <div class="fot-logo">
                                        Salman
                                    </div>
                                    <address>
                                        <p class="address"><i class="fas fa-map-marker-alt"></i> Room no 3 abduljaffar chwal NR Kanchwal masjid kurla(e)<br>Mumbai 400024</p>
                                        <p class="email"><i class="fas fa-envelope"></i> <a href="mailto:support@domain.com">salmanshaikh1693@gmail.com</a></p>
                                        <p class="call"><i class="fas fa-phone-alt"></i> <a href="tel:820-885-3321">8999122376</a></p>
                                    </address>                            
                                </div>
                            </div>
                            <!-- / col -->
                            <div class="col-lg-3 col-sm-6 m-15px-tb">
                                <div class="footer-link">
                                    <h5 class="fot-title">About Us</h5>
                                    <ul class="nav flex-column">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#"> PHP Development</a></li>
                                        <li><a href="#">Database</a></li>
                                       </ul>
                                </div>
                            </div>
                            <!-- / col -->
                            <div class="col-lg-3 col-sm-6 m-15px-tb">
                                <div class="footer-link">
                                    <h5 class="fot-title">Other links</h5>
                                    <ul class="nav flex-column">
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">About Us</a></li>
                                        </ul>
                                </div>
                            </div>
                            <!-- / col -->
                            <div class="col-lg-3 col-sm-6 m-15px-t">
                                <div class="footer-insta">
                                    <h5 class="fot-title">Instagram Feed</h5>
                                    <div class="row insta-row">
                                        <div class="col-4">
                                            <img src="static/img/portfolio-1.jpg" title="" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img src="static/img/portfolio-2.jpg" title="" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img src="static/img/portfolio-3.jpg" title="" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img src="static/img/portfolio-4.jpg" title="" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img src="static/img/portfolio-5.jpg" title="" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img src="static/img/portfolio-6.jpg" title="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / col -->
                        </div>
                        <!-- / row -->
                    </div>
                </div>
                <!-- footer top -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-left">
                                <p>© 2019 copyright all right reserved</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <ul class="nav justify-content-center justify-content-md-end">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /footer bottom -->
            </footer>
            <!-- footer End -->
        </div>
        <!-- End wrapper -->

        <!-- jquery -->
        <script src="static/js/jquery-3.2.1.min.js"></script>
        <script src="static/js/jquery-migrate-3.0.0.min.js"></script>
        <!-- end jquery -->
        <!-- appear -->
        <script src="static/plugin/appear/jquery.appear.js"></script>
        <!-- end appear -->
        <!--bootstrap-->
        <script src="static/plugin/bootstrap/js/popper.min.js"></script>
        <script src="static/plugin/bootstrap/js/bootstrap.js"></script>
        <!--end bootstrap-->
        <!-- End -->

        <!-- custom js -->
        <script src="static/js/custom.js"></script>
        <!-- end -->
        
        <script>



$(document).ready(function() {

    $.fn.myFunction = function() {
       alert('hi');
    }

  

});

  function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

        function fnSubmit()
        {
            
//alert("salman");
var nameReg = /^[A-Za-z]+$/;
var numberReg =  /^[0-9]+$/;
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

$("#name").val();
$(".error").text();


if($('#name').val() == "")
{
    $('#name').addClass("is-invalid");    
    $('#name').focus(); 
    //$('#message').hide();
    return;
}
else if(!validateEmail($('#email').val()))
{
    //alert(validateEmail($('#email').val()));
    $('#email').addClass("is-invalid");    
    $('#email').focus();
     return;
}
else if($('#message').val() == "" )
   {
        $('#message').addClass("is-invalid");  
        $('#massage').focus();
       
        return;         
    }

    $.ajax({
        url: "insert.php",
        type: "post",
        dataType: "json",
        data:$('#contactForm').serialize(),
        success: function(data) {
         //alert(data);
         if(data.status=="SUCCESS")
            $('#hSuccess').text("Data Saved Successfully!!");
         else
            $('#hSuccess').text("Data Saved Successfully!!");         
         
         setTimeout(() => 
         {
            $('#hSuccess').text("");
          }, 1000);

         $('#contactForm').trigger("reset");
         

        }
          

    });

   
    
    
        }
        </script>
        <!-- end body -->
    </body>

</html>