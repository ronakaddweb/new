<div id="sidebar" class="sidebar sidebar-with-footer">
  <!-- Aplication Brand -->
  <div class="app-brand">
    <a href="dashboard.php">
      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
        <g fill="none" fill-rule="evenodd">
          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
        </g>
      </svg>
      <span class="brand-name"><?php echo $name ?></span>
    </a>
  </div>
  <!-- begin sidebar scrollbar -->
  <div class="sidebar-scrollbar">

    <!-- sidebar menu -->
    <ul class="nav sidebar-inner" id="sidebar-menu">



      <li class="has-sub">
        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <a href="dashboard.php"><i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Dashboard</span> </a>
        </a>
        <a href="add-category.php"><i class="mdi mdi-view-dashboard-outline"></i>
          <span class="nav-text">Add Category</span> </a>

        <a class="sidenav-item-link" <?php echo "href=products.php?name=Laptop" ?> data-target="#components">
          <span href="laptop.php" class="nav-text">Laptop</span> <b class="caret"></b>
        </a>
      <li class="has-sub">
        <a class="sidenav-item-link" <?php echo "href=products.php?name=Mobile" ?> data-target="#components">
          <span href="mobile.php" class="nav-text">Mobile Phones</span> <b class="caret"></b>
        </a>
      </li>

      <li class="has-sub">
        <a class="sidenav-item-link" <?php echo "href=products.php?name=Shoes" ?> data-target="#components">
          <span href="shoes.php" class="nav-text">Shoes</span> <b class="caret"></b>
        </a>
      </li>

      <li class="has-sub">
        <a class="sidenav-item-link" <?php echo "href=products.php?name=Shirts" ?> data-target="#components">
          <span href="shirts.php" class="nav-text">Shirts</span> <b class="caret"></b>
        </a>

      </li>
      <li class="has-sub">
        <a class="sidenav-item-link" <?php echo "href=products.php?name=Headphones" ?> data-target="#components">
          <span href="shirts.php" class="nav-text">Headphpnes</span> <b class="caret"></b>
        </a>

      </li>
      <li class="has-sub">
        <a class="sidenav-item-link" <?php echo "href=products.php?name=Bags" ?> data-target="#components">
          <span href="shirts.php" class="nav-text">Bags</span> <b class="caret"></b>
        </a>

      </li>

      <li class="has-sub">
        <a class="sidenav-item-link" <?php echo "href=products.php?name=Tablet" ?> data-target="#components">
          <span href="tablet.php" class="nav-text">Tablet</span> <b class="caret"></b>
        </a>
        <!-- </li> -->

      </li>

      <li class="has-sub">

        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
          <!-- <i class="mdi mdi-folder-multiple-outline"></i> -->
          <!-- <span class="nav-text">Select the product</span> <b class="caret"></b> -->
        </a>
        <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
          <div class="sub-menu">



            <li class="has-sub">
              <a class="sidenav-item-link" href="mobile.php" data-target="#components">
                <span href="mobile.php" class="nav-text">Mobile Phones</span> <b class="caret"></b>
              </a>
            </li>



            <li class="has-sub">
              <a class="sidenav-item-link" href="shoes.php" data-target="#components">
                <span href="shoes.php" class="nav-text">Shoes</span> <b class="caret"></b>
              </a>
            </li>






          </div>
        </ul>
      </li>

    </ul>

  </div>




</div>