<?php
// error_reporting(0);
ob_start();
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <head>

  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />
  <script type="text/javascript" src="assets/plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="sign-in.php">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>
                  <span class="brand-name">Sleek Dashboard</span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">

              <h4 class="text-dark mb-5">Sign In</h4>
              <form method="post">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg"  aria-describedby="emailHelp" placeholder="Username" name="email">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password">
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">Remember me
                          <input type="checkbox" />
                          <div class="control-indicator"></div>
                        </label>
                
                      </div>
                      <p><a class="text-blue" href="#">Forgot Your Password?</a></p>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary btn-block mb-4" name="login">
                    <p>Don't have an account yet ?
                      <a class="text-blue" href="sign-up.php">Sign Up</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright pl-0">
        <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
          <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
        </p>
      </div>
    </div>
</body>
</html>
<?php
//error_reporting(0);
//ob_start();
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
$con=mysqli_connect("localhost","root","","task3") or die("Error in Connection");
$query=mysqli_query($con,"select * from adminpanel where email ='$email' and password='$password'") or die("Error in query");
$row = mysqli_fetch_array($query);
$name=$row['Name'];
if($query)
{
  //echo "Login Success";
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['name']=$name;
  header('Location:dashboard.php');

  
}
else{
  header('Location:sign-up.php');
}
}

?>