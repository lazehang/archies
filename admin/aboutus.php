<?php
require '../includes/db.php';
$about = mysqli_query($conn, "SELECT * FROM about")->fetch_assoc();

?>
<?php include "includes/header.php"; ?>

            
<?php include "includes/navigation.php"; ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Content
        <small> about us </small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About us</a></li>
      </ol>
    </section>

  
  <!-- content -->
<section class="content">
    <div class="box container">
      <h3>
       About Us
        <small> <a href="editabout.php?edit=about"><i class="fa fa-pencil-square-o fa-lg"></i></a> </small>
      </h3>
      <br>

      <table class="table table-responsive table-striped">
        <tr>
          <th>Image</th>
          <td><img src="../img/about/<?php echo $about['image']; ?>" style="max-height:400px" class="img img-responsive"></td>
          
        </tr>
        <tr>
          <th>Content</th>
          <td style="word-wrap:break-word; width:800px">
            <?php echo $about['content']; ?>
          </td>
         
        </tr>
        
      </table>
    
    </div>
</section><!-- /.content -->

 <!-- contacts content -->
<section class="content">
    <div class="box container">
      <h3>
       Contact
        <small> <a href="editabout.php?edit=contact"><i class="fa fa-pencil-square-o fa-lg"></i></a> </small>
      </h3>

      <br>

      <table class="table table-responsive table-striped">
        <tr>
          <th><i class="fa fa-phone-square fa-lg"></i> &nbsp; Phone No.</th>
          <td><?php echo $about['phone']; ?></td>
        
        </tr>
        <tr>
          <th><i class="fa fa-fax fa-lg"></i> &nbsp; Fax</th>
          <td><?php echo $about['fax']; ?></td>
         
        </tr>
        <tr>
          <th><i class="fa fa-envelope fa-lg"></i> &nbsp; Mail</th>
          <td><?php echo $about['email']; ?></td>
 
        </tr>
        <tr>
          <th><i class="fa fa-map-marker fa-lg"></i> &nbsp;  Address</th>
          <td><?php echo $about['address']; ?></td>
        </tr>
      </table>
    
    </div>
</section><!-- /.content -->

<section class="content">
    <div class="box container">
      <h3>
       Social
        <small> <a href="editabout.php?edit=social"><i class="fa fa-pencil-square-o fa-lg"></i></a> </small>
      </h3>

      <br>

      <table class="table table-responsive table-striped">
        <tr>
          <th><i class="fa fa-facebook fa-lg"></i> &nbsp; Facebook</th>
          <td><?php echo $about['facebook']; ?></td>

        </tr>
        <tr>
          <th><i class="fa fa-instagram fa-lg"></i> &nbsp; Instagram</th>
          <td><?php echo $about['instagram']; ?></td>

        </tr>
        <tr>
          <th><i class="fa fa-twitter fa-lg"></i> &nbsp; Twitter</th>
          <td><?php echo $about['twitter']; ?></td>

        </tr>
        <tr>
          <th><i class="fa fa-google-plus fa-lg"></i> &nbsp; Google+</th>
          <td><?php echo $about['google']; ?></td>

        </tr>
      </table>
    
    </div>
</section><!-- /.content -->

<?php include 'includes/footer.php'; ?>