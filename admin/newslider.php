<?php

require '../includes/db.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM responsiveslider WHERE id = '$id'");
  $slider = $result->fetch_assoc();

  $Edit = isset($result) ? true : false ;
}


if(isset($_POST['submit'])){
  
   $m_cap = $_POST['m_cap'];
   $t_cap = $_POST['t_cap'];
   $b_cap = $_POST['b_cap'];

   $check = getimagesize($_FILES["image"]["tmp_name"]);
   
   
    $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $name = addslashes($_FILES['image']['name']);
    $file_loc = $_FILES['image']['tmp_name'];

    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder ="../img/slider/";
    $target_file = $folder . basename($_FILES["image"]["name"]);
  

    

    if(isset($_GET['id'])){
      $id = $_GET['id'];
       //check file
       if($check !== false){
        // Check if file already exists
          if (file_exists($target_file)) {
              echo "Sorry, file already exists.";
              die();
          }
          else { 
            move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error());
            $old = $slider['src'];
            unlink($folder.$old);
            $Update = mysqli_query($conn, "UPDATE responsiveslider SET main_caption = '".$m_cap."', top_caption = '".$t_cap."', bottom_caption = '".$b_cap."', src = '".$file."'  WHERE id = '$id' ");   
            header("location:slider.php");
            exit();
          }
    }else{
      $Update = mysqli_query($conn, "UPDATE responsiveslider SET main_caption = '".$m_cap."', top_caption = '".$t_cap."', bottom_caption = '".$b_cap."' WHERE id = '$id' ");
      header("location:slider");
    exit();
  }
    }else{

    $insert = mysqli_query($conn,"INSERT INTO responsiveslider (main_caption, top_caption, bottom_caption, src) VALUES ( '".$m_cap."', '".$t_cap."', '".$b_cap."', '".$file."' ) ");
    
    if($insert){
      move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error($conn));

        header("location:slider.php");
      
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
        <li><a href="#">add slider</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="slider.php" class="btn btn-success">Back to Slider</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                   <input name="" type="hidden" value="">
                  <div class="form-group well">
                    <label for="m_cap" class="col-md-3">Main Caption</label>
                    <input type="text" name="m_cap" id="m_cap" value="<?php if(!empty($Edit)){
                      echo $slider['main_caption'];
                    } ?>" placeholder="Main Caption">
                  </div>
                  <div class="form-group well">
                    <label for="t_cap" class="col-md-3">Top Caption</label>
                    <input type="text" name="t_cap" id="t_cap" value="<?php if(!empty($Edit)){
                      echo $slider['top_caption'];
                    } ?>" placeholder="Top Small Caption">
                  </div>
                  <div class="form-group well">
                    <label for="b_cap" class="col-md-3">Bottom Cation</label>
                    <input type="text" name="b_cap" id="b_cap" value="<?php if(!empty($Edit)){
                      echo $slider['b_cap'];
                    } ?>" placeholder="Bottom Small Caption">
                  </div>

                <div class="form-group well">
                    <label for="image" class="col-md-3">Image</label>
                    <input type="file" name="image" id="image" value="">
        
                    
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