
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
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
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
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<?php
		include('includesidebar.php');
		?>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Watch</li>
    </ul>
	<h3> Watch <small class="pull-right">  </small></h3>	
	<hr class="soft"/>
	
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <!-- <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a> -->
</div>
<br class="clr"/>

	<div class="tab-pane" id="listView">
	<?php
                                // ob_start();
                                
								try {
    							$conn = new PDO("mysql:host=localhost;dbname=task3", "root", "");
	
    							$sql='select * from Wishlist';
								$q=$conn->query($sql);
                                //$query=mysqli_query($conn,"") or die("erroe in query");
								$q->setFetchMode(PDO::FETCH_ASSOC);
                                while($row=$q->fetch())
                                {
                                   $name=$row['Name'];
								   $id=$row['Pid'];
                                   $price = $row['Price'];
                                   $img = $row['Image_path'];
                                   $brand = $row['Brand']

                                ?>
		<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
			<?php echo "<a href=watch_details.php?id=$id><img src='$img'></a>";?>
			</div>
			<div class="span4">
				<?php echo "<h3> $brand </h3>";?>				
				<hr class="soft"/>
				<?php echo "<h5> $name </h5>";?>				
				
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<?php echo "<h3> $price </h3>";?>				
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				
				<!-- <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a> -->
                <?php echo "<a class='btn btn-small' pull-right href=delete_wishlist.php?id=$id> Delete Product</a>" ?>
                <?php echo "<a href=wishlist.php?id=$id&img=$img&name=$name&price=$price&brand=$brand type=submit class='btn btn-large btn-primary pull-right'> Wishlist <i class='fa fa-heart-o'></i></a>";?>

				<!-- <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-out"></i></a> -->
				
				</form>
               
			</div>
		</div>
	
		  
		<hr class="soft"/>
        <?php
                                }
							}
							catch(PDOException $e){
								die("Could not connect to the database :" . $e->getMessage());
							}
                                
                            ?>
		
		</div>
		
	</div>

	
</div>

	<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
			<ul>
			<li><a href="#">&lsaquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">&rsaquo;</a></li>
			</ul>
			</div>
			<br class="clr"/>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>


<ul class="thumbnails listing-products">
							
								<?php
                                ob_start();
                                
								try {
    							$conn = new PDO("mysql:host=localhost;dbname=admin_panel", "root", "");
	
    							$sql='select * from wishlist';
								$q=$conn->query($sql);
                                //$query=mysqli_query($conn,"") or die("erroe in query");
								$q->setFetchMode(PDO::FETCH_ASSOC);
                                while($row=$q->fetch())
                                {
                                   $name=$row['Name'];
								   $id=$row['id'];
                                ?>
                                <li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<?php if($name=='T-shirt'){	
										
										 echo "<a href=t-shirt_details.php?id=$id>
                                        <img src={$row["img_url"]} >
                                    	</a><br/>
										<a href=t-shirt_details.php?id=$id class=title>"."{$row['Name']}"."</a><br/>
										<a href=t-shirt_details.php?id=$id class=title>"."{$row['Brand_name']}"."</a><br/>"?>
										<p class="price"><?php "{$row['Price']}" ?></p>
										<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Shirts'){	?>											
										<?php echo "<a href=shirt.php>
                                        <img src={$row["img_url"]} >
                                    	</a><br/>
										<a href=shirt.php class=title>"."{$row['Name']}"."</a><br/>
										<a href=shirt.php class=title>"."{$row['Brand_name']}"."</a><br/>"?>
										<p class="price"><?php "{$row['Price']}" ?></p>
										<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Bottomwear'){	?>											
									<?php echo "<a href=bottomwear_details.php?id=$id>
                                        <img src={$row["img_url"]} >
                                    </a><br/>
									<a href=bottomwear.php class=title>"."{$row['Name']}"."</a><br/>
									<a href=bottomwear.php class=title>"."{$row['Brand_name']}"."</a><br/>"?>
									<p class="price"><?php "{$row['Price']}" ?></p>
									<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Footwear'){	?>											
									<?php echo "<a href=footwear.php?id=$id>
                                        <img src={$row["img_url"]} >
                                    </a><br/>
									<a href=footwear.php class=title>"."{$row['Name']}"."</a><br/>
									<a href=footwear.php class=title>"."{$row['Brand_name']}"."</a><br/>"?>
									<p class="price"><?php "{$row['Price']}" ?></p>
									<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Bags'){	?>											
									<?php echo "<a href=bags.php>
                                        <img src={$row["img_url"]} >
                                    </a><br/>
									<a href=bags.php class=title>"."{$row['Name']}"."</a><br/>
									<a href=bags.php class=title>"."{$row['Brand_name']}"."</a><br/>"?>
									<p class="price"><?php "{$row['Price']}" ?></p>
									<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Headphones'){	?>											
									<?php echo "<a href=headphones.php>
                                        <img src={$row["img_url"]} >
                                    </a><br/>
									<a href=headphones.php class=title>"."{$row['Name']}"."</a><br/>
									<a href=headphones.php?id=$id class=title>"."{$row['Brand_name']}"."</a><br/>"?>
									<p class="price"><?php "{$row['Price']}" ?></p>
									<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Sunglasses'){	?>											
									<?php echo "<a href=sunglasses.php>
                                        <img src={$row["img_url"]} >
                                    </a><br/>
									<a href=sunglasses.php class=title>"."{$row['Name']}"."</a><br/>
									<a href=sunglasses.php class=title>"."{$row['Brand_name']}"."</a><br/>"?>
									<p class="price"><?php "{$row['Price']}" ?></p>
									<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>

									<?php if($name=='Watch'){	?>											
									<?php echo "<a href=watches.php>
                                        <img src={$row["img_url"]} >
                                    </a><br/>
									<a href=watches.php class=title>"."{$row['Name']}"."</a><br/>
									<a href=watches.php class=title>"."{$row['Brand_name']}"."</a><br/>"?>
									<p class="price"><?php "{$row['Price']}" ?></p>
									<?php echo "<a href=delete.php?id=$id>Remove</a>"; ?>
									<?php } ?>
								</div>
                                </li> 
                                <?php
                                }
							}
							catch(PDOException $e){
								die("Could not connect to the database :" . $e->getMessage());
							}
                                
                            ?>
						</ul>

