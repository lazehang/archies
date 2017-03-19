<?php
include 'includes/header.php';
include 'includes/navigation.php';
require '../database/conn.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact</a></li>
      </ol>
    </section>

   <!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="editcontact" class="btn btn-primary">Update Contact</a><br><br>
              <table class="table table-bordered example1">
            <thead>
            <tr>
                <th>Phone</th>
                <th>Landline</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysqli_query($con,"SELECT * FROM contact") or die(mysqli_error());
                 while ($row = mysqli_fetch_assoc($query)) {
                  $phone = $row['phone'];
                  $landline = $row['landline'];
                  $fax = $row['fax'];
                  $email = $row['email'];
                  $address = $row['address'];
                ?>
                  <tr>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $landline; ?></td>
                    <td><?php echo $fax; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $address; ?></td>
                    <td>
                      <a href="editcontact" class="text-danger"><i class="fa fa-edit"></i></a>
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


<?php include 'includes/footer.php' ?>