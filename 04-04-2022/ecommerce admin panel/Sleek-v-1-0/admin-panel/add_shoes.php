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
                  <!-- Top Statistics -->
                  

                  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div> 
        <table>
            <tr>
                <td>
                Product ID
                </td>
                <td><input type="text" name="pid" placeholder = "Product ID" required><br></td>
            </tr>
            <tr>
                <td>Brand</td>
                <td><input type="text" name="brand" placeholder= "Brand" required><br></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><input type="text" name="color" placeholder = "Color" required></td>
            </tr>
            <tr>
                <td>Size</td>
                <td><input type="text" name="size" placeholder="Size" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type" placeholder="Type" required></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="quantity" placeholder="Quantity" required></td>
            </tr>
            <tr>
            <tr>
                <td>Discription</td>
                <td><input type="text" name="discription" placeholder="Discription" required></td>
            </tr>
            <tr>
            
            <tr>
                <td>select image</td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td><br><br>
                    <td><input type="submit" name="insert" value="submit"></td></td>
            </tr>

            
        </table>
    </div>
    

   
    <!-- <input type="text" name="img" placeholder="Image" required><br> -->
    
        
</tr>
</table>
    </form>
</body>
</html>

<?php
if(isset($_POST['insert'])){
    $pid = $_POST['pid'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    // $quantity = $_POST['quantity'];
    $discription = $_POST['discription'];
    $filepath = "images/".$_FILES["file"]["name"];


    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
   
    $query = mysqli_query($con, "insert into Shirts values('$pid','$brand','$color', '$size','$type' ,$quantity, '$discription', '$filepath')")  or die ("error in query");
    move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
    if($query){
      header('Location:shoes.php');
    }
    
    

   
    mysqli_close($con);
}

?>
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
