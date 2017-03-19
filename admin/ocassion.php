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
        Ocassions
        <small> view</small>
             </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">products</a></li>
      </ol>
    </section>

  
<a href="newproduct.php" class="btn addprodbtn"><i class="fa fa-plus"> Products</i></a><br>



 <!-- ocassion content -->
<section class="content" id="ocassion">
    <div class="box container"><br>
        <a href="postocassion.php" class="btn btn-primary">Add Ocassion</a><br>
         <h2 class="well well-sm ">New Arrivals</h2>
              <table class="table table-striped table-responsive col-xs-12">
            <thead class="">
            <tr>
                <th>Ocassion</th>
                <th>Head</th>
                <th>Quote</th>
                <th>Banner</th>
         
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysqli_query($conn,"SELECT * FROM ocassion ") or die(mysqli_error());
                 while ($row = mysqli_fetch_assoc($query)) {
                  
                ?>
                  <tr>
                    <td>
                      <?php echo $row['ocassion']; ?>
                    </td>
                    <td>
                      <?php echo $row['head']; ?>
                    </td>
                    <td>
                      <?php echo $row['quote']; ?>
                    </td>
                    <td>
                      <img class="img img-responsive" src="../img/ocassion/<?php echo $row['src']; ?>" height="200px">
                    </td>
                    <td>
                      <a href="postOcassion.php?id=<?php echo $row['id']; ?>" class="text-success"><i class="fa fa-edit"></i></a>
                      <a href="delete/delete-ocassion.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <?php
                 }
                ?>
            </tbody>
        </table>
    </div>
</section><!-- /.content -->

</div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->



<?php include "includes/footer.php"; ?>