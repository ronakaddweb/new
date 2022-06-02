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
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Home :: w3layouts</title>
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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
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
    <!-- banner -->
    <div class="banner-text">
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>f</span>ashion
                            <span>h</span>ub
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>w</span>omen's
                                <span>f</span>ashion</h4>
                            <div class="bnr_clip position-relative">
                                <h4>get up to
                                    <span class="px-2">45% </span>
                                </h4>
                                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                    <div class="bg-flex-item">
                                        <span>O</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                    </div>
                                </div>
                                <p class="text-uppercase py-2">on special sale</p>
                                <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>f</span>ashion
                            <span>h</span>ub
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>m</span>en's
                                <span>f</span>ashion</h4>
                            <div class="bnr_clip position-relative">
                                <h4>get up to
                                    <span class="px-2">35% </span>
                                </h4>
                                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                    <div class="bg-flex-item">
                                        <span>O</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                    </div>
                                </div>
                                <p class="text-uppercase py-2">on special sale</p>
                                <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner3">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>f</span>ashion
                            <span>h</span>ub
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>k</span>id's
                                <span>f</span>ashion</h4>
                            <div class="bnr_clip position-relative">
                                <h4>get up to
                                    <span class="px-2">45% </span>
                                </h4>
                                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                    <div class="bg-flex-item">
                                        <span>O</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                    </div>
                                </div>
                                <p class="text-uppercase py-2">on special sale</p>
                                <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->
    <!--services-->
    <div class="agileits-services" id="services">
        <div class="no-gutters agileits-services-row row">
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-sync-alt p-4"></span>
                <h4 class="mt-2 mb-3">30 days replacement</h4>
            </div>
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-gift p-4"></span>
                <h4 class="mt-2 mb-3">Gift Card</h4>
            </div>

            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-lock p-4"></span>
                <h4 class="mt-2 mb-3">secure payments</h4>
            </div>
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-shipping-fast p-4"></span>
                <h4 class="mt-2 mb-3">free shipping</h4>
            </div>
        </div>
    </div>
    <!-- //services-->
    <!-- about -->
    <div class="row no-gutters pb-5">
        <div class="col-sm-3">
            <div class="hovereffect">
                <img class="img-fluid" src="admin-panel/images/shirts_index.jpg" alt="" >
                <div class="overlay">
                    <h5>Shirts</h5>
                    <a class="info" href="products.php?name=Shirts">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hovereffect">
                <img class="img-fluid" src="admin-panel/images/shoes_index.jpg" alt="">
                <div class="overlay">
                    <h5>Shoes</h5>
                    <a class="info" href="products.php?name=Shoes">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hovereffect">
                <img class="img-fluid" src="admin-panel/images/laptop_index.jpg" alt="">
                <div class="overlay">
                    <h5>Laptop</h5>
                    <a class="info" href="products.php?name=Laptop">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hovereffect">
                <img class="img-fluid" src="admin-panel/images/mobile_index.jpg" alt="">
                <div class="overlay">
                    <h5>Mobile</h5>
                    <a class="info" href="products.php?name=Mobile">Shop Now</a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row no-gutters pb-5">
        <div class="col-sm-3">
            <div class="hovereffect">
                <img class="img-fluid" src="admin-panel/images/tablet_index.jpg" alt="" >
                <div class="overlay">
                    <h5>Tablet</h5>
                    <a class="info" href="products.php?name=Tablet">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hovereffect">
                <img class="img-fluid" src="admin-panel/images/watches_index.jpg" alt="">
                <div class="overlay">
                    <h5>Watches</h5>
                    <a class="info" href="products.php?name=Watches">Shop Now</a>
                </div>
            </div>
        </div>
        
        
    </div>
    <!-- //about -->
    <!-- product tabs -->
    <section class="tabs_pro  pt-sm-3">
        <h5 class="head_agileinfo text-center text-capitalize">
            <span>Shirts</span></h5>
        <div class="tabs tabs-style-line">
            
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                    
                    <div id="owl-demo" class="owl-carousel text-center">
                    <?php
            
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from Shirts limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            
							?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=290px width=310px>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="products.php?name=Shirts" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $brand." ".$name ?></h5>
                                    
                                </div>
                                <!-- card footer -->
                             
                            </div>
                            <!-- //card -->
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
    </section>
    <section class="tabs_pro pt-sm-3">
        <h5 class="head_agileinfo text-center text-capitalize">
            <span>Laptop</span></h5>
        <div class="tabs tabs-style-line">
            
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                    
                    <div id="owl-demo" class="owl-carousel text-center">
                    <?php
            
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from Laptop limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            
							?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=290px width=310px>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="products.php?name=Laptop" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $brand." ".$name ?></h5>
                                    
                                </div>
                                <!-- card footer -->
                             
                            </div>
                            <!-- //card -->
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
    </section>
    <section class="tabs_pro pt-sm-3">
        <h5 class="head_agileinfo text-center text-capitalize">
            <span>Mobile</span></h5>
        <div class="tabs tabs-style-line">
            
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                    
                    <div id="owl-demo" class="owl-carousel text-center">
                    <?php
            
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from Mobile limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            
							?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=290px width=310px>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="products.php?name=Mobile" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $brand." ".$name ?></h5>
                                    
                                </div>
                                <!-- card footer -->
                             
                            </div>
                            <!-- //card -->
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
    </section>
    <section class="tabs_pro  pt-sm-3">
        <h5 class="head_agileinfo text-center text-capitalize">
            <span>Tablet</span></h5>
        <div class="tabs tabs-style-line">
            
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                    
                    <div id="owl-demo" class="owl-carousel text-center">
                    <?php
            
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from Tablet limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            
							?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=290px width=310px>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="products.php?name=Tablet" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $brand." ".$name ?></h5>
                                    
                                </div>
                                <!-- card footer -->
                             
                            </div>
                            <!-- //card -->
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
    </section>
    <section class="tabs_pro  pt-sm-3">
        <h5 class="head_agileinfo text-center text-capitalize">
            <span>Shoes</span></h5>
        <div class="tabs tabs-style-line">
            
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                    
                    <div id="owl-demo" class="owl-carousel text-center">
                    <?php
            
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from Shoes limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            
							?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=290px width=310px>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="products.php?name=Shoes" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $brand." ".$name ?></h5>
                                    
                                </div>
                                <!-- card footer -->
                             
                            </div>
                            <!-- //card -->
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
    </section>
    <section class="tabs_pro  pt-sm-3">
        <h5 class="head_agileinfo text-center text-capitalize">
            <span>Watches</span></h5>
        <div class="tabs tabs-style-line">
            
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                    
                    <div id="owl-demo" class="owl-carousel text-center">
                    <?php
            
					
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from Watches limit 0,4";   
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
                            
							?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $img ?>" alt="img" class="card-img-top" height=290px width=310px>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="products.php?name=Watches" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $brand." ".$name ?></h5>
                                    
                                </div>
                                <!-- card footer -->
                             
                            </div>
                            <!-- //card -->
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
    </section>
    <!-- //product tabs -->
 
    <!-- footer -->
    <footer>
        <div class="footerv2-w3ls">
            <?php include('includepages/footerinclude.php') ?>
            
        </div>
    </footer>
    <!-- //footer -->
    <!-- sign up Modal -->
   

    <!-- //signup modal -->
    <!-- signin Modal -->
    
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for show signin and signup modal -->
    <script>
        $(document).ready(function () {
            $("#myModal_btn").modal();
        });
    </script>
    <!-- //script for show signin and signup modal -->
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
    <!-- Banner Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- Product slider Owl-Carousel-JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: false,
            margin: 10,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                320: {
                    items: 1,
                },
                568: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1050: {
                    items: 4
                }
            }
        });
    </script>
    <!-- //Product slider Owl-Carousel-JavaScript -->
    <!-- cart-js -->
    <script src="js/minicart.js">
    </script>
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