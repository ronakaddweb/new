<?php
ob_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<!-- <div id="welcomeLine" class="row">
	<div class="span6"><strong> <?php echo $a; ?> </strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<a href="wishlist_update.php">Wishlist<span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] </span> </a> 
        <a href="product_summary.php">Cart<span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] </span> </a> 
	</div>
	</div>
</div> -->
<!-- Navbar ================================================== -->



<div class="header">
  <a href="index2.php" class="logo">Ecommerce</a>
  <a
	<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</a>
  <div class="header-right">
    <a  href="index2.php">Home</a>
    <a  href="contact.php">Contact</a>
    <a href="#about">About</a>
	<a href="login.php">Login</a>
	
	
  </div>
</div>

<div class="header2">

 
  <div class="categories">
    <a  href="laptop.php">Laptop</a>
    <a  href="mobile.php">Mobile</a>
    <a href="shoes.php">Shoes</a>
	<a href="watch.php">Watch</a>
	<a href="tablet.php">Tablet</a>
	
	
  </div>
</div>

<style>
* {box-sizing: border-box;}

html{
	width:100%;
}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  /* width:90%; */
  
}


.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
  /* width:100%; */
}
.categories {
  overflow: hidden;
  /* background-color: black; */
  background:black;
  padding: 10px 10px;
  color:white;
  /* width:100%; */
  text-align:center;
}

.categories a{
	color:white;
	font-size:18px;
	padding:5px;
	
}


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  /* background-color: lightblue; */
  
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
<!-- <div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	 <a class="btn" href="login.php"  style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>


	</li>
    </ul>
  </div>
</div> -->