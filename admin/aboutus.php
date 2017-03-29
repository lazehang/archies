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
          <td><img src="img/aboutus/" class="img img-responsive"></td>
          
        </tr>
        <tr>
          <th>Content</th>
          <td style="word-wrap:break-word; width:800px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
          <td>977-98078999098 | 90798789</td>
        
        </tr>
        <tr>
          <th><i class="fa fa-fax fa-lg"></i> &nbsp; Fax</th>
          <td>989989879878</td>
         
        </tr>
        <tr>
          <th><i class="fa fa-envelope fa-lg"></i> &nbsp; Mail</th>
          <td>example@gmail.com</td>
 
        </tr>
        <tr>
          <th><i class="fa fa-map-marker fa-lg"></i> &nbsp;  Address</th>
          <td>Civil mall khichhapokhari</td>
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
          <td>977-98078999098 | 90798789</td>

        </tr>
        <tr>
          <th><i class="fa fa-instagram fa-lg"></i> &nbsp; Instagram</th>
          <td>989989879878</td>

        </tr>
        <tr>
          <th><i class="fa fa-twitter fa-lg"></i> &nbsp; Twitter</th>
          <td>example@gmail.com</td>

        </tr>
        <tr>
          <th><i class="fa fa-google-plus fa-lg"></i> &nbsp; Google+</th>
          <td>Civil mall khichhapokhari</td>

        </tr>
      </table>
    
    </div>
</section><!-- /.content -->

<?php include 'includes/footer.php'; ?>