<?php

require '../includes/db.php';

$id =1;
$result = mysqli_query($conn, "SELECT * FROM about WHERE id = '$id' ");
$about = $result->fetch_assoc();
$Edit = isset($result) ? true : false ;

if(isset($_GET['edit'])){
  $edit= $_GET['edit'];
}

if(isset($_POST['submit'])){
    $content = $_POST['content'];

    $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $name = addslashes($_FILES['image']['name']);
    $file_loc = $_FILES['image']['tmp_name'];

    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder ="../img/about/";
    $target_file = $folder . basename($_FILES["image"]["name"]);

    // $old = $about['image'];
    // unlink($folder.$old);

    $Update = mysqli_query($conn, "UPDATE about SET image = '".$file."', content = '".$content."' WHERE id = '$id' "); 
    move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error($conn));
    if($Update){  
    header("location:aboutus.php");
    exit();
  }else {
    echo "Number of rows affected: " . mysql_affected_rows() . "<br>";
}

}



//     if(isset($_GET['id'])){
//       $id = $_GET['id'];
     
//             $Update = mysqli_query($conn, "UPDATE testimonial SET name = '".$name."', designation = '".$desg."', content = '".$content."' WHERE id = '$id' ");   
//             header("location:testimonial.php");
//             exit();
          
    
//     }else{
   

//     $insert = mysqli_query($conn,"INSERT INTO testimonial (name, designation, content) VALUES ( '$name', '$desg', '$content' ) ");
    
//     if($insert){


//         header("location:testimonial.php");
      
//     }else{
//       echo "ERR";
//     }
    
//     exit();
// }


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
        <li><a href="#">Add About</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="aboutus.php" class="btn btn-success">Back to About Us</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                 
                <?php if($edit == 'about'){ ?>

                <div class="form-group well">
                    <label for="name" class="col-md-3">Image</label>
                    <input class="form-control" type="file" name="image" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['image'];
                    }
                    ?>"> 
                    </div> 
                    <div class="form-group well">
                    <label for="name" class="col-md-3">Content</label>
                    <input class="form-control" type="text" name="content" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['content'];
                    }
                    ?>"> 
                    </div> 
                    <?php } elseif ($edit == 'contact') {
                    ?>
                    <div class="form-group well">
                     <label for="name" class="col-md-3">Phone</label>
                    <input class="form-control" type="text" name="phone" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['phone'];
                    }
                    ?>"> 
                    </div> 
                    <div class="form-group well">
                    <label for="name" class="col-md-3">fax</label>
                    <input class="form-control" type="text" name="fax" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['fax'];
                    }
                    ?>"> 
                    </div>
                    <div class="form-group well">
                     <label for="name" class="col-md-3">Email</label>
                    <input class="form-control" type="text" name="email" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['email'];
                    }
                    ?>"> 
                    </div> 
                    <div class="form-group well">
                    <label for="name" class="col-md-3">address</label>
                    <input class="form-control" type="text" name="address" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['address'];
                    }
                    ?>"> 
                    </div>  
                    <?php
                    }elseif ($edit == 'social') {
                    ?>
                    <div class="form-group well">
                     <label for="name" class="col-md-3">facebook link</label>
                    <input class="form-control" type="text" name="fb" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['facebook'];
                    }
                    ?>"> 
                    </div> 

                    <div class="form-group well">
                    <label for="name" class="col-md-3">Instagram link</label>
                    <input class="form-control" type="text" name="insta" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['instagram'];
                    }
                    ?>"> 
                    </div> 

                    <div class="form-group well">
                     <label for="name" class="col-md-3">Twitter link</label>
                    <input class="form-control" type="text" name="twitter" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['twitter'];
                    }
                    ?>"> 
                    </div> 
                    <div class="form-group well">
                    <label for="name" class="col-md-3">Google+ link</label>
                    <input class="form-control" type="text" name="g+" id="name" value="<?php
                    if(!empty($Edit)){
                      echo $about['google+'];
                    }
                    ?>"> 
                    </div> 
                    <?php
                    }else{
                      header("location:aboutus.php");
                    }?>             

                  <input class="btn btn-danger" type="reset" value="Clear">
                  <input class="btn btn-success"  type="submit" value="<?php if(!empty($Edit)){
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