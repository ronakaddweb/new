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
    <div class="agilemodal-dialog modal-dialog" role="document">
  
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                    
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 mx-auto align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>

                        <div class="col-md-6">
                            <form  method="post">
                                <div class="form-group">
                                    <label for="recipient-name1" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="name" id="recipient-name1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="email" id="recipient-email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Mobile</label>
                                    <input type="text" class="form-control" placeholder=" " name="mobile" id="recipient-mobile" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" placeholder=" " name="address" id="recipient-address" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Address Line</label>
                                    <input type="text" class="form-control" placeholder=" " name="address_line" id="recipient-address" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">City</label>
                                    <input type="text" class="form-control" placeholder=" " name="city" id="recipient-city" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Postal Code</label>
                                    <input type="text" class="form-control" placeholder=" " name="postal_code" id="recipient-postal_code" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="password" id="password2" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="cpassword" id="password2" required="">
                                </div>
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Register" name="insert">
                                </div>
                            </form>

                            <?php
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
	$address_line = $_POST['address_line'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $id = $_POST['Pid'];


    // if ($_POST['password'] !== $_POST['cpassword']) {
    //     die('Password and Confirm password should match!');   
    //  }

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
	$var = "insert into User_register values('$name','$email', $mobile ,'$address', '$address_line', '$city',$postal_code,'$password')";
    $query = mysqli_query($con, $var)  or die ("error in query");   
    if($query>0){
      header('location:login.php');

    } else {
        echo "<script> alert('errorin inserting);</script>";
    }
    mysqli_close($con);
}

?>
                            <p class="text-center mt-3">Already a member?
                                <a href="login.php" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                    Login Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

</body>