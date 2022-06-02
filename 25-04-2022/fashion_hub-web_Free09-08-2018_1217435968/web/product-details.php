<?php
error_reporting(0);
ob_start();
session_start();
$email= $_SESSION['email'];
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Men's :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/flexslider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
 	 <!-- header -->
      <header>
        <?php include('includepages/headerinclude.php'); ?>
        <!-- //header container -->
    </header>
    <!-- //header -->
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>
	<!-- //inner banner -->
    

    <!-- Single -->
    <div class="innerf-pages section py-5">
        <div class="container">
            <div class="row my-sm-5">

            <?php
            $id=$_REQUEST['id'];
            $name=$_REQUEST['name'];
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from $name where Pid=$id";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							$id=$row['Pid'];
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            $des = $row['Description'];
                            $price = $row['Price'];
                            $aprice = $row['Actual_price'];

						
							?>
                <div class="col-lg-4 single-right-left">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">
                            <ul class="slides">
                                <li data-thumb="images/shirts2.jpg">
                                    <div class="thumb-image">
                                        <?php echo "<img src=$img data-imagezoom=true  class=img-fluid>" ?> </div>
                                </li>
                                <li data-thumb="images/shirts2.jpg">
                                    <div class="thumb-image">
                                        <img src="images/ms2.jpg" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                                </li>
                                <li data-thumb="images/shirts2.jpg">
                                    <div class="thumb-image">
                                        <img src="images/ms3.jpg" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                    <?php echo "<h3> $brand $name  </h3>"; ?>
                    </h3>
                    <div class="caption">

                        
                        <?php echo "<h6 style=text-decoration:line-through;float:left;>Rs. $price</h6>" ?>  
                        <h6>&nbsp;&nbsp;&nbsp;Rs. <?php echo $aprice ?></h6>
                    </div>
                    <div class="desc_single">
                       <?php echo " <h5> $des</h5>" ?>
                        
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="occasional">
                            <h5 class="sp_title mb-3">Highlights</h5>
                            <ul class="single_specific">
                                <li>
                                    <span>Fabric: </span> Poly-Viscose</li>
                                <li>
                                    <span>Pattern :</span> Solid</li>
                                <li>
                                    <span>Type :</span> Single Breasted</li>
                                <li>
                                    <span>Fit :</span> Slim</li>
                            </ul>

                        </div>
                        <div class="color-quality mt-sm-0 mt-4">
                            <h5 class="sp_title mb-3">services</h5>
                            <ul class="single_serv">
                                <li>
                                    <a href="#">30 Day Return Policy</a>
                                </li>
                                <li class="mt-2">
                                    <a href="#">Cash on Delivery available</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="description">
                        <h5>Check delivery, payment options and charges at your location</h5>
                        <form action="#" method="post">
                            <input type="text" placeholder="Enter pincode" required />
                            <input type="submit" value="Check">
                        </form>
                    </div>
                    <div class="occasion-cart">
                        <div class="chr single-item single_page_b">
                            <form action="wishlist_insert.php" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value=" Formal Men's Blazer">
                                <input type="hidden" name="amount" value="15.99">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="wishlist_insert.php" data-toggle="modal" data-target="#myModal1"></a>
                                <?php echo "<a href=wishlist_insert.php?id=$id&name=$name type=submit ><i class='fa fa-heart-o hub-cart phub-cart btn'></i></a>";?>

                            </form>
                            
                        </div>
                        
                        
                    </div>
                </div>
                <?php
						}
						
					}
					catch(PDOException $e){
						die("error".$e->getMessage());
					}
						?>
            </div>
        </div>
    </div>
    <!-- /new_arrivals -->
    <div class="section singlep_btm pb-5">
        <div class="container">
            <div class="new_arrivals">
                <h4 class="rad-txt text-capitalize">Similar Products
                </h4>
                <!-- card group 2 -->
                <div class="card-group my-5">
                <?php
            $id=$_REQUEST['id'];
            $name=$_REQUEST['name'];
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from $name where Pid not in($id) limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							$id=$row['Pid'];
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            $des = $row['Description'];
                            $price = $row['Price'];
                            $aprice = $row['Actual_price'];

						
							?>
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=270px width=245px> 
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="product-details.php?id=<?php echo $id?>&name=<?php echo $name?>" class="link-product-add-cart">Quick View</a>
                                    </div> 
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize"><?php echo $brand. " " .$name  ?></h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">Rs. <?php echo $aprice ?></p>
                                    <p class="line-through">Rs. <?php echo $price ?></p>
                                </div>
                            </div>
                            <!-- card footer -->
                          
                        </div>
                    </div>
                    <!-- //card -->
                    <?php
						}
						
					}
					catch(PDOException $e){
						die("error".$e->getMessage());
					}
						?>
                  
                </div>
               
                <!-- //card group -->
                <!--//new_arrivals-->
            </div>
        </div>
    </div>
    <!--// Single -->
 <footer>
        <div class="footerv2-w3ls">
            <div class="footer-w3lagile-innerr">
                <!-- footer-top -->
                <div class="container-fluid">
                    <div class="row  footer-v2grids w3-agileits">
                        <!-- services -->
                        <div class="col-lg-2 col-sm-6 footer-v2grid">
                            <h4>Support</h4>
                            <ul>

                                <li>
                                    <a href="payment.html">Payment</a>
                                </li>
                                <li>
                                    <a href="#">Shipping</a>
                                </li>
                                <li>
                                    <a href="#">Cancellation & Returns</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //services -->
                        <!-- latest posts -->
                        <div class="col-lg-3 col-sm-6 footer-v2grid mt-sm-0 mt-5">
                            <h4>Latest Blog</h4>
                            <div class="footer-v2grid1 row">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">eveniie arcet ut moles morbi dapiti</a>
                                </div>
                            </div>
                            <div class="footer-v2grid1 row my-2">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">earum rerum tenmorbi dapiti et</a>
                                </div>
                            </div>
                            <div class="footer-v2grid1 row">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">morbi dapiti eveniet ut molesti</a>
                                </div>
                            </div>
                        </div>
                        <!-- //latest posts -->
                        <!-- locations -->
                        <div class="col-lg-2 col-sm-6 footer-v2grid my-lg-0 my-5">
                            <h4>office locations</h4>
                            <ul>
                                <li>
                                    <a href="#">new jersey</a>
                                </li>
                                <li>
                                    <a href="#">texas</a>
                                </li>
                                <li>
                                    <a href="#">michigan</a>
                                </li>
                                <li>
                                    <a href="#">cannada</a>
                                </li>
                                <li>
                                    <a href="#">brazil</a>
                                </li>
                                <li>
                                    <a href="#">california</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //locations -->
                        <!-- flickr posts -->
                        <div class="col-lg-3 col-sm-6 footer-v2grid my-lg-0 my-sm-5">
                            <h4 class="b-log">
                                flickr posts
                            </h4>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl4.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl6.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl5.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>

                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl6.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl4.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl5.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <!-- //flickr posts -->
                        <!-- popular tags -->
                        <div class="col-lg-2  footer-v2grid mt-sm-0 mt-5">
                            <h4>popular tags</h4>
                            <ul class="w3-tag2">
                                <li>
                                    <a href="shop.html">amet</a>
                                </li>
                                <li>
                                    <a href="men.html">placerat</a>
                                </li>
                                <li>
                                    <a href="shop.html">Proin </a>
                                </li>
                                <li>
                                    <a href="boys.html">vehicula</a>
                                </li>
                                <li>
                                    <a href="shop.html">diam</a>
                                </li>
                                <li>
                                    <a href="women.html">velit</a>
                                </li>
                                <li>
                                    <a href="shop.html">felis</a>
                                </li>
                                <li>
                                    <a href="shop.html">mauris</a>
                                </li>
                                <li>
                                    <a href="girls.html">amet</a>
                                </li>
                                <li>
                                    <a href="shop.html">placerat</a>
                                </li>
                                <li>
                                    <a href="shop.html">Proin </a>
                                </li>
                                <li>
                                    <a href="index.html">vehicula</a>
                                </li>
                                <li>
                                    <a href="shop.html">diam</a>
                                </li>
                                <li>
                                    <a href="men.html">velit</a>
                                </li>
                                <li>
                                    <a href="shop.html">felis</a>
                                </li>
                                <li>
                                    <a href="women.html">mauris</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //popular tags -->
                    </div>
                </div>
                <!-- //footer-top -->
                <div class="footer-bottomv2 py-5">
                    <div class="container">
                        <ul class="bottom-links-agile">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>
                        <h3 class="text-center follow">Follow Us</h3>
                        <ul class="social-iconsv2 agileinfo">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5 footer-copy_w3ls">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                        <h5>Payment Method</h5>
                        <ul class="mt-4">
                            <li class="list-inline-item">
                                <img src="images/pay2.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay5.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay3.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay7.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay8.png" alt="">
                            </li>
                            <li class="list-inline-item ">
                                <img src="images/pay9.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="cpy-right align-self-center">
                        <h2 class="agile_btxt">
                            <a href="index.html">
                                <span>f</span>ashion
                                <span>h</span>ub</a>
                        </h2>
                        <p>© 2018 Fashion Hub. All rights reserved | Design by
                            <a href="http://w3layouts.com" class="text-secondary"> W3layouts.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- sign up Modal -->
    <div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name1" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                                </div>
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Register">
                                </div>
                            </form>
                            <p class="text-center mt-3">Already a member?
                                <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                    Login Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //signup modal -->
    <!-- signin Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->

    <!-- FlexSlider -->
    <script src="js/jquery.flexslider.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- zoom -->
    <script src="js/imagezoom.js"></script>
    <!-- zoom-->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>