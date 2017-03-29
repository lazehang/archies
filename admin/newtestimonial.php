<?php

require '../includes/db.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM testimonial WHERE id = '$id'");
  $testi = $result->fetch_assoc();

  $Edit = isset($result) ? true : false ;
}


if(isset($_POST['submit'])){
  
  $name = $_POST['name'];
  $desg = $_POST['desg'];
  $content =$_POST['content'];
   

  

    

    if(isset($_GET['id'])){
      $id = $_GET['id'];
     
            $Update = mysqli_query($conn, "UPDATE testimonial SET name = '".$name."', designation = '".$desg."', content = '".$content."' WHERE id = '$id' ");   
            header("location:testimonial.php");
            exit();
          
    
    }else{
   

    $insert = mysqli_query($conn,"INSERT INTO testimonial (name, designation, content) VALUES ( '$name', '$desg', '$content' ) ");
    
    if($insert){


        header("location:testimonial.php");
      
    }else{
      echo "ERR";
    }
    
    exit();
}
    
}

?>




<?php include "includes/header.php"; ?>

            
<?php include "includes/navigation.php"; ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Product
        <small>archies</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Testimonial</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="testimonial.php" class="btn btn-success">Back to Testimonial</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                 

                <div class="form-group well">
                    <label for="name" class="col-md-3">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $testi['name'];
                    }
                    ?>">
        
                    
                  </div>
                   <div class="form-group well">
                    <label for="name" class="col-md-3">Designation</label>
                    <input class="form-control" type="text" name="desg" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $testi['designation'];
                    }
                    ?>">
        
                    
                  </div>
                   <div class="form-group well">
                    <label for="name" class="col-md-3">Content</label>
                    <textarea class="form-control" row="5" name="content"><?php
                    if(!empty($Edit)){
                      echo $testi['content'];
                    }
                    ?></textarea>
        
                    
                  </div>

                  

                  <input class="btn btn-danger" type="reset" value="Clear">
                  <input class="btn btn-success" type="submit" value="<?php if(!empty($Edit)){
                   echo "UPDATE";
                 }else{
                  echo "SAVE";
                 } ?>" name="submit"> <br><br>
              </form>
    </div>
</section><!-- /.content -->

    </div><!-- /.content-wrapper -->



<?php include "includes/footer.php"; ?>



</body>
</html>                     