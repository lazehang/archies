<?php 
              include '../includes/db.php';

              if ($_SESSION['login'] == true){
              $email = $_SESSION['email'];
              $query = mysqli_query($conn,"SELECT * FROM admin where email='".$email."' ") or die(mysqli_error());
                  $row= mysqli_fetch_assoc($query);
                  $src = $row['src'];
                }
                else {
                  session_destroy();
                  header("location:index.php");
                  exit();
                }
              ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Archies</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Archies Gift Shop</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/users/<?php echo $src ;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><!-- Govinda Aryal -->
              <?php 
              include '../includes/db.php';
              echo $_SESSION['username']; 
              ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/users/<?php echo $src ;?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']; ?> <br/>Admin
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="../" target="new">Visit Site</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/users/<?php echo $src; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="profile"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview active">
          <a href="dashboard" >
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="forhim.php"><i class="fa fa-circle-o"></i>For Him</a></li>
            <li><a href="forher.php"><i class="fa fa-circle-o"></i>For Her</a></li>
            <li><a href="forhome.php"><i class="fa fa-circle-o"></i> For Home</a></li>
            <li><a href="forkids.php"><i class="fa fa-circle-o"></i>For Kids</a></li>
            <li><a href="newarrival.php"><i class="fa fa-circle-o"></i>New Arrivals</a></li>
            <li><a href="ocassionprod.php"><i class="fa fa-circle-o"></i>Ocassions</a></li>
            <li><a href="trending.php"><i class="fa fa-circle-o"></i>Trendings</a></li>
            <li><a href="mostviewed.php"><i class="fa fa-circle-o"></i>Most Viewed</a></li>
            <li><a href="newcollection.php"><i class="fa fa-circle-o"></i>New Collection</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="ocassion">
            <i class="fa fa-arrow-right"></i> <span>Ocassions</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="slider.php"><i class="fa fa-circle-o"></i>Responsive Slider</a></li>
             <li><a href="heroslider.php"><i class="fa fa-circle-o"></i>Hero Video Slider</a></li>
             <li><a href="testimonial.php"><i class="fa fa-circle-o"></i>Testimonial</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>