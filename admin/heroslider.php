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
        Testimonials
        <small> view testimonials </small>
             </h1>

      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Hero slider</a></li>
      </ol>
    </section>

  
  <!-- for him content -->
<section class="content">
    <div class="box container"><br>
        <a href="newheroslider.php" class="btn btn-primary">Add Slider</a><br>
        <h2 class="well well-sm ">Hero Slider</h2>
        <div class="table-responsive">
              <table class="table table-striped table-bordered">
            <thead class="">
            <tr>
                <th>Video</th>
                <th>Action</th>
             
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysqli_query($conn,"SELECT * FROM hero_slider") or die(mysqli_error($conn));
                 while ($row = mysqli_fetch_assoc($query)) {
                
                ?>
                  <tr>
                    <td>
                      <?php echo $row['video']; ?>
                      <video src="../img/videos/<?php echo $row['video']; ?>"></video>
                    </td>
                  
                    
                    <td>
                      <a href="newheroslider.php?id=<?php echo $row['id']; ?>" class="text-success"><i class="fa fa-edit"></i></a>
                      <a href="delete/delete-testi.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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