<?php  
ob_start();
// session_destroy();
?>

<div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.php">fh
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                        <select class="form-control input-lg" name="category">
                            <option value="all">Search our store</option>
                            <optgroup label="Mens">
                                <option value="T-Shirts">T-Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Suits & Blazers">Suits & Blazers</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Sweat Shirts">Trousers</option>
                            </optgroup>
                            <optgroup label="Womens">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tunics">Tunics</option>
                            </optgroup>
                            <optgroup label="Girls">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tops">Tops</option>
                            </optgroup>
                            <optgroup label="Boys">
                                <option value="T-Shirts">T-Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Suits & Blazers">Suits & Blazers</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Sweat Shirts">Sweat Shirts</option>
                            </optgroup>
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                    </form>
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="login.php">
                        <input type="submit" class="btn btn-outline-secondary ml-3 my-sm-0" value="login">

                        </a>
                        <?php echo $name ?>
                        
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart ">
                                <form action="viewcart.php" method="post">
                                    
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <a href="viewcart.php"><i class="fas fa-shopping-bag"></i></a>
                                    </button>
                                    
                                </form>
                            </div>
                        </div> &nbsp;
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="wishlist.php" method="post">
                                    
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Wishlist">
                                    <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
                                    </button>
                                    
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="products.php?name=Shirts">Shirts
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="products.php?name=Shoes">Shoes
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="products.php?name=Laptop">Laptop
                                <span class="sr-only"></span>
                            </a>
                        </li><li class="nav-item">
                            <a class="nav-link " href="products.php?name=Mobile">Mobile
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="products.php?name=Tablet">Tablet
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="products.php?name=Watches">Watches
                                <span class="sr-only"></span>
                            </a>
                        </li>

                        
                        
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>