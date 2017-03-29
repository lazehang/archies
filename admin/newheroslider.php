<?php

require '../includes/db.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM hero_slider WHERE id = '$id'");
  $slider = $result->fetch_assoc();

  $Edit = isset($result) ? true : false ;
}


if(isset($_POST['submit'])){
  

   
    $file = rand(1000,100000)."-".$_FILES['video']['name'];
    $name = addslashes($_FILES['video']['name']);
    $file_loc = $_FILES['video']['tmp_name'];

    $file_size = $_FILES['video']['size'];
    $file_type = $_FILES['video']['type'];
    $folder ="../img/videos/";
    $target_file = $folder . basename($_FILES["video"]["name"]);
  

    

  //   if(isset($_GET['id'])){
  //     $id = $_GET['id'];
  //      //check file
  //      if($check !== false){
  //       // Check if file already exists
  //         if (file_exists($target_file)) {
  //             echo "Sorry, file already exists.";
  //             die();
  //         }
  //         else { 
  //           move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error());
  //           $old = $slider['src'];
  //           unlink($folder.$old);
  //           $Update = mysqli_query($conn, "UPDATE responsiveslider SET main_caption = '".$m_cap."', top_caption = '".$t_cap."', bottom_caption = '".$b_cap."', src = '".$file."'  WHERE id = '$id' ");   
  //           header("location:slider.php");
  //           exit();
  //         }
  //   }else{
  //     $Update = mysqli_query($conn, "UPDATE responsiveslider SET main_caption = '".$m_cap."', top_caption = '".$t_cap."', bottom_caption = '".$b_cap."' WHERE id = '$id' ");
  //     header("location:slider");
  //   exit();
  // }
  //   }else{
  	$name = substr($file, 0, strpos($file, '.'));

    $insert = mysqli_query($conn,"INSERT INTO hero_slider (video) VALUES ( '$name' ) ");
    
    if($insert){
      move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error($conn));

        header("location:slider.php");
      
    }else{
      echo "ERR";
    }
    
    exit();

    
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
                 

                <div class="form-group well">
                    <label for="video" class="col-md-3">Video</label>
                    <input type="file" name="video" id="video" value="">
        
                    
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