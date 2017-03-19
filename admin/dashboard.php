<?php

include 'includes/header.php';
include 'includes/navigation.php';
include '../includes/db.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php
        function countUser(){
        global $conn;
        $query = mysqli_query($conn,"SELECT count(id) from admin");
        $row = mysqli_fetch_assoc($query);
        ?>
        <h3><?php echo $row['count(id)']; ?><sup style="font-size: 20px"></sup></h3>
        <?php
        }
        ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
            function countProducts(){
              global $conn;
            $query = mysqli_query($conn,"SELECT count(id) from products");
            $row = mysqli_fetch_assoc($query);
            ?>
              <h3><?php echo $row['count(id)']; ?><sup style="font-size: 20px"></sup></h3>
              <?php 
            }
            countProducts();
              ?>
              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            
              <p>Prints Commercials</p>
            </div>
            <div class="icon">
              <i class="ion ion-images"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
           
              <h3><sup style="font-size: 20px"></sup></h3>
              <p>Video Commercials</p>
            </div>
            <div class="icon">
              <i class="ion ion-videocamera"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            
              <h3><sup style="font-size: 20px"></sup></h3>
              <p>Audio Commercials</p>
            </div>
            <div class="icon">
              <i class="ion ion-volume-high"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php countUser(); ?>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include 'includes/footer.php' ?>
