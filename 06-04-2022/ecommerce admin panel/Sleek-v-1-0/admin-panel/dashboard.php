<?php
ob_start();
session_start();
$email=$_SESSION['email'];
$name = $_SESSION['name'];
//echo $email;


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

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
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <?php
            include('includesidebar.php');
          ?>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
          <?php
              include('includeheader.php');
          ?>

          </header>


        <div class="content-wrapper">
          <div class="content">						 
          <div class="container">
          <section> 
            <div class="row mt-4 mb-2 ml-3">
              <div class="col-md-3 col-lg-3 inner-section">
              <a href="laptop.php"> <img src="images/laptop.png" width=150 height=200>
               <h2>Laptop</h2></a>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
              <a href="mobile.php"> <img src="images/mobile.jpeg" width=150 height=200>
                <h2>Mobile</h2></a>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
              <a href="tablet.php"> <img src="images/tablet1.jpeg" width=150 height=200>
                <h2>Tablet</h2></a>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <a href="shoes.php"><img src="data:image/jpeg;base64,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" width=150 height=200>
                 <h2>Shoes</h2></a>
              </div>
            </div>
            <div class="row mt-2 mb-2 ml-3">
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSB8pHKXqMoY2jIb67hRWkksRv4SudrsZ85Ig&usqp=CAU" width=150 height=200>
                <h2>BottomWear</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnRXQhf86PaGD6F239FOrv5nFzqE4QMbGq6A&usqp=CAU" width=150 height=200>
                <h2>Sunglasses</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHDaPdm0kAx38l-AED7zqvWd3lTg8XLiwjEg&usqp=CAU" width=150 height=200>
                <h2>Headphones</h2>
              </div>
              <div class="col-md-3 col-lg-3 inner-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4_ObPWxXXfHz-mEudAAKbb-1nrig1yFX26G66aFoMcvxief9hHARy676Yf2Dx1y9fVZE&usqp=CAU" width=150 height=200>
                <h2>Bags</h2>
              </div>
            </div>
          </section>
  
</div>
          </div>
        </div>
                  <footer class="footer mt-auto">
                    <?php
                      include('includefooter.php');
                    ?>
                  </footer>
                </div>
        </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>

  </body>
</html>
