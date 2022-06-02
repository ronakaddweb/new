<?php
ob_start();
session_start();
$email = $_SESSION['email'];
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
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
    NProgress.configure({
      showSpinner: false
    });
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
      include 'includesidebar.php';
      ?>
    </aside>



    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">
        <?php
        include 'includeheader.php';
        ?>

      </header>


      <div class="content-wrapper">
        <div class="content">
          <div class="container">
            <form method="post" enctype="multipart/form-data">
              <div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Category Name </label>
                    <input type="text" class="form-control" name="cname" placeholder="Category name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"> Image </label>
                    <input type="file" class="form-control" name="img" placeholder="Image">
                  </div>

                  <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <input type="submit" class="btn btn-primary btn-default" name="insert"></input>
                    <input type="reset" class="btn btn-secondary btn-default"></button>
          </div>
        </div>
      </div>
      <footer class="footer mt-auto">
        <?php
        include 'includefooter.php';
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


<?php
if (isset($_POST['insert'])) {
  $cname = $_POST['cname'];
  $img = "images/".$_FILES["img"]["name"];

  $con = mysqli_connect("localhost", "root", "", "task3") or die("error in connection");

  $query = mysqli_query($con, "insert into Category(Category_name, Image_path) values('$cname', '$img')") or die("error in query");
  move_uploaded_file($_FILES["img"]["tmp_name"], $img);
  if ($query) {
    header('Location:dashboard.php');
  }
  mysqli_close($con);
}

?>