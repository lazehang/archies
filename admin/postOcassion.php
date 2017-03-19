<?php

require '../includes/db.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM ocassion WHERE id = '$id'");
  $row = $result->fetch_assoc();

  $Edit = isset($row) ? true : false ;
}


if(isset($_POST['submit'])){
  
   $ocassion = $_POST['ocassion'];
   $head = $_POST['head'];
   $quote = $_POST['quote'];

   $check = getimagesize($_FILES["image"]["tmp_name"]);
   
   
    $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $name = addslashes($_FILES['image']['name']);
    $file_loc = $_FILES['image']['tmp_name'];

    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder ="../img/ocassion/";
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
            $old = $ocassion['src'];
            unlink($folder.$old);
            $Update = mysqli_query($conn, "UPDATE ocassion SET ocassion = '".$ocassion."', head = '".$head."', quote = '".$quote."', src = '".$file."'  WHERE id = '$id' ");
            
            header("location:ocassion");
            exit();
          }
    }else{
      $Update = mysqli_query($conn, "UPDATE ocassion SET ocassion = '".$ocassion."', head = '".$head."', quote = '".$quote."' WHERE id = '$id' ");
      header("location:ocassion");
    exit();
  }
    }else{
   



    $insert = mysqli_query($conn,"INSERT INTO ocassion (ocassion, head, quote, src) VALUES ( '".$ocassion."', '".$head."', '".$quote."', '".$file."' ) ");
    
    if($insert){
      move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error($conn));
      header("location:ocassion");
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
        Clients
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Clients</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="products" class="btn btn-success">Back to Products</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                   <input name="" type="hidden" value="">
                  <div class="form-group well">
                    <label for="name" class="col-md-3">Ocassion Name</label>
                    <input type="text" name="ocassion" id="name" value="<?php if(!empty($Edit)){
                      echo $row['ocassion'];
                    } ?>" placeholder="Product Name">
                  </div>
                  <div class="form-group well">
                    <label for="price" class="col-md-3">Head</label>
                    <input type="text" name="head" id="price" value="<?php if(!empty($Edit)){
                      echo $row['head'];
                    } ?>" placeholder="1000">
                  </div>
                  <div class="form-group well">
                    <label for="stock" class="col-md-3">Quotes</label>
                    <input type="text" name="quote" id="stock" value="<?php if(!empty($Edit)){
                      echo $row['quote'];
                    } ?>" placeholder="Short Desc or Quotes">
                  </div>
                

                  <div class="form-group well">
                    <label for="image" class="col-md-3">Banner</label>
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