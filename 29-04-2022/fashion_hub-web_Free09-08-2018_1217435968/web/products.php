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
	<title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Men :: w3layouts</title>
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
	<!-- Range-slider-css -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">

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
	
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<!-- grid left -->
				<div class="side-bar col-lg-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							Categories</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="cat1" id="cat1">
								<label for="cat1">Fashion</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat2" id="cat2">
								<label for="cat2">Popular</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat3" id="cat3">
								<label for="cat3">Trending</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat4" id="cat4">
								<label for="cat4">Sort by popularity</label>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<div class="search-hotel">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Brand</span> in focus</h3>
						<form action="#" method="post">
							<input type="search" placeholder="search here" name="search" required="">
							<input type="submit" value="Search">
						</form>
					</div>
					<!-- price range -->
					<div class="range">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Price</span> range</h3>
						<ul class="dropdown-menu6">
							<li>

								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
							</li>
						</ul>
					</div>
					<!-- //price range -->
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							<span>latest</span> arrivals</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="arr1" id="arr1">
								<label for="arr1">last 30 days</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr2" id="arr2">
								<label for="arr2">last 90 days</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr3" id="arr3">
								<label for="arr3">last 150 days</label>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Sizes</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="size1" id="size1">
								<label for="size1">XS</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size2" id="size2">
								<label for="size2">S</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size3" id="size3">
								<label for="size3">M</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size4" id="size4">
								<label for="size4">L</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size5" id="size5">
								<label for="size5">XL</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size6" id="size6">
								<label for="size6">XXL</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size7" id="size7">
								<label for="size7">XXXL</label>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- Binding -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Color</h3>
						<div class="d-flex">
							<ul>
								<li>
									<input type="checkbox" class="checked" name="color1" id="color1">
									<label for="color1">Black</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color2" id="color2">
									<label for="color2">Blue</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color3" id="color3">
									<label for="color3">Red</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color4" id="color4">
									<label for="color4">Yellow</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color5" id="color5">
									<label for="color5">White</label>
								</li>
							</ul>
							<ul>
								<li>
									<input type="checkbox" class="checked" name="color6" id="color6">
									<label for="color6">Green</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color7" id="color7">
									<label for="color7">Multi</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color8" id="color8">
									<label for="color8">Purple</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color9" id="color9">
									<label for="color9">Gold</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color10" id="color10">
									<label for="color10">Orange</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- //Binding -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Discount</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="dis1" id="dis1">
								<label for="dis1">5% - 20%</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="dis2" id="dis2">
								<label for="dis2">20% - 40%</label>
							</li>
							<li>
								<input type="checkbox" class="dis3" name="dis3" id="dis3">
								<label for="dis3">40% - 60%</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="dis4" id="dis4">
								<label for="dis4">60% or more</label>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- reviews -->
					<div class="customer-rev left-side">
						<h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>4.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.5</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>2.5</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				
				<!-- //grid left -->
				<!-- grid right -->
				<div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
							
							<?php
					$name = $_REQUEST['name'];
					try{	
						$pdo=new PDO("mysql:host=localhost;dbname=task3","root","");
						$sql="select * from $name";
						$q=$pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while($row=$q->fetch()){
							$id=$row['Pid'];
							$img=$row['Image_path'];
							$brand=$row['Brand'];
							$name = $row['Name'];
							$price = $row['Price']
							
							

							?>
							<div class="col-lg-3 col-sm-6 p-0">
								
							<div class="card product-men p-3">
							
								<div class="men-thumb-item">
								
									<?php echo "<a href=product-details.php?id=$id&name=$name> <img src=$img  height=250px width=208px class=card-img-top> </a> "; ?>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
										<?php echo "<a href=product-details.php?id=$id&name=$name class=link-product-add-cart>Quick View</a>" ; ?>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize"><?php echo $brand." ".$name; ?></h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold"> Rs. <?php echo $price ?></p>
										<p class="line-through"></p>
									</div>
								</div>
								<!-- card footer -->
								
							</div>
						</div>
						<?php
						}
						
					}
					catch(PDOException $e){
						die("error".$e->getMessage());
					}
						?>
						<!-- //card group -->
					</div>

					
					
				</div>
			</div>
		</div>
		<!--// Shop -->
		<footer>
        <div class="footerv2-w3ls">
            <?php include('includepages/footerinclude.php') ?>
            
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
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->
		<script src="js/bootstrap.js"></script>
		<!-- start-smoth-scrolling -->
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
		<!-- start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
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
		<!-- //here ends scrolling icon -->
		<!-- smoothscroll -->
		<script src="js/SmoothScroll.min.js"></script>
		<!-- //smoothscroll -->

</body>

</html>