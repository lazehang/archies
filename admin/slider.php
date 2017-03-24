<?php
require '../includes/db.php';

?>
<?php include "includes/header.php"; ?>

            
<?php include "includes/navigation.php"; ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Slider
        <small>  </small>
             </h1>

      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider</a></li>
      </ol>
    </section>

  
<a href="newproduct.php" class="btn addprodbtn"><i class="fa fa-plus"> Products</i></a><br>

  <!-- for him content -->
<section class="content">
    <div class="box container"><br>
        <a href="newslider.php" class="btn btn-primary">Add Slider</a><br>
        <h2 class="well well-sm ">Responsive Slider</h2>
        <div class="table-responsive">
              <table class="table table-striped table-bordered">
            <thead class="">
            <tr>
                <th>Main Caption</th>
                <th>Small Top Caption</th>
                <th>Small Bottom Caption</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysqli_query($conn,"SELECT * FROM responsiveslider") or die(mysqli_error());
                 while ($row = mysqli_fetch_assoc($query)) {
                  
                ?>
                  <tr>
                    <td>
                      <?php echo $row['main_caption']; ?>
                    </td>
                    <td>
                      <?php echo $row['top_caption']; ?>
                    </td>
                    <td>
                      <?php echo $row['bottom_caption']; ?>
                    </td>
                    <td>
                      <img class="img" src="../img/slider/<?php echo  $row['src']; ?>" height="200px">
                    </td>
                    <td>
                      <a href="newslider.php?id=<?php echo $row['id']; ?>" class="text-success"><i class="fa fa-edit"></i></a>
                      <a href="delete/delete-slider.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <?php
                 }
                ?>
            </tbody>
        </table>
      </div>
    </div>
</section><!-- /.content -->

<?php include 'includes/footer.php'; ?>