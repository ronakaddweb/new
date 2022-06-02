<?php
ob_start();
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
                  
             
<?php
 error_reporting(0);
$a=$_REQUEST['id'];


$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from Mobile where Pid=$a") or die("Error in query");

while($row = mysqli_fetch_array($query)){
    $id=$a;
    $brand = $row['Brand'];
    $storage = $row['Storage'];
    $color = $row['Color'];
    $price = $row['Price'];
    $description = $row['Description'];
    $img = $row['Image_path'];
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
 

<div class="card-body">
										
<form method="post" enctype="multipart/form-data">
    <div> 
    <div class="card-body">
											<form>
												<div class="form-group">
													<label for="exampleFormControlInput1">Product Id </label>
													<input type="text" class="form-control" name='pid'  value ='<?php echo $id ?>' placeholder="Product ID">
												</div>
                        <div class="form-group">
													<label for="exampleFormControlInput1"> Brand </label>
													<input type="text" class="form-control" name='brand' value= <?php echo $brand ?> placeholder=" Brand">
												</div>
                        <div class="form-group">
													<label for="exampleFormControlInput1">Storage </label>
													<input type="text" class="form-control" name='storage' value='<?php echo $storage ?>' placeholder="Storage">
												</div>
                        
                        <div class="form-group">
													<label for="exampleFormControlInput1">Color </label>
													<input type="text" class="form-control" name='color' value ='<?php echo $color ?>' placeholder="Color">
												</div>
                        
                        <div class="form-group">
													<label for="exampleFormControlInput1">Price</label>
													<input type="text" class="form-control" name='weight' value ='<?php echo $price ?>' placeholder="Price">
												</div>
                        <div class="form-group">
													<label for="exampleFormControlInput1">Description</label>
													<input type="text" class="form-control" name='description' value ='<?php echo $description ?>' placeholder="Discription">
												</div>
							
												<div class="form-group">
													<label for="exampleFormControlFile1">Example file input</label>
													<input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<input type="submit" class="btn btn-primary btn-default" name="update"></input>
													<!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
												</div>
											</form>
										</div>
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
<?php

// Update Code
if(isset($_POST['update'])){
   
    $pid = $_REQUEST['pid'];
    $pbrand = $_REQUEST['brand'];
    $storage = $_REQUEST['storage'];
    $pcolor = $_REQUEST['color'];
    $pprice = $_REQUEST['price'];
    $pdescription = $_REQUEST['description'];
    $pimg = $_FILES["files"]["name"];
    
  if($pimg=='')
  {
    $pimg=$img;
  }
  else
  {
    $pimg="images/".$pimg;
  }
    

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $demo= "update Mobile set Brand='$pbrand',Storage='$storage', Color='$pcolor', Price='$pprice',Description='$pdescription' ,Image_path='$pimg' where pid = '$pid'";
    echo $demo;
    $query = mysqli_query($con, $demo) or die("error in query");
    
  
    
    if($query){
        header('location:mobile.php');

    } else {
        echo "<script> alert('error in updating);</script>";
    }
    mysqli_close($con);
}

?>