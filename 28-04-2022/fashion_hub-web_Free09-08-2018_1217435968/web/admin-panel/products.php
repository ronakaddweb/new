<?php
ob_start();
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$cname = $_REQUEST['name'];
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

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
          <!-- Recent Order Table -->
          <div class="card card-table-border-none" id="recent-orders">
            <div class="card-header justify-content-between">
              <h2><?php echo $cname ?></h2>
            </div>
            <div class="card-body pt-0 pb-5">

              <?php
              $cname = $_REQUEST['name'];
              

              $con = mysqli_connect("localhost", "root", "", "task3") or die("Erro in connection");
              $query = mysqli_query($con, "select * from $cname") or die("Error in query");


              echo "<table class= 'table card-table table-responsive table-responsive-large' style='width:100%'><thead><tr><th>Pid</th><th>Name</th><th>Brand</th><th>Price</th><th>Actual Price</th><th>Image</th><th>Edit</th><th>Delete</th><th>View</th></tr></thead><tbody>";
              while ($row = mysqli_fetch_array($query)) {
                $var = $row["Pid"];
                echo "<tr>";
                echo "<td>" . $row["Pid"] . "</td>";
                $name = $row["Name"];
                echo "<td>" . $name . "</td>";
                echo "<td>" . $row["Brand"] . "</td>";


                echo "<td> Rs. " . $row["Price"] . "</td>";



                echo "<td> Rs. " . $row["Actual_price"] . "</td>";

                echo "<td>" . "<img src=" . $row["Image_path"] . " height=50px width=50px></td>";
                echo "<td><a href=edit-product.php?id=$var&cname=$name>Edit</a></td>";
                echo "<td><a href=delete_product.php?id=$var&cname=$name>delete</a></td>";
                echo "<td><a href=view_product.php?id=$var&cname=$name>View</a></td>";
                echo "</tr>";
              }
              echo "<tbody></table>";
              echo "<a href=add_product.php?name=$name>Add Products</a>";

              ?>

            </div>
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