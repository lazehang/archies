<?php

require '../includes/db.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $result = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
  $product = $result->fetch_assoc();

  $Edit = isset($product) ? true : false ;
}


if(isset($_POST['submit'])){
  
   $prod_name = $_POST['name'];
   $price = $_POST['price'];
   $stock = $_POST['stock'];

   $check = getimagesize($_FILES["image"]["tmp_name"]);
   
   
    $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $name = addslashes($_FILES['image']['name']);
    $file_loc = $_FILES['image']['tmp_name'];

    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder ="../img/products/";
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
            $old = $product['src'];
            unlink($folder.$old);
            $Update = mysqli_query($conn, "UPDATE products SET product_name = '".$prod_name."', price = '".$price."', stock = '".$stock."', src = '".$file."'  WHERE id = '$id' ");
            
            header("location:products");
            exit();
          }
    }else{
      $Update = mysqli_query($conn, "UPDATE products SET product_name = '".$prod_name."', price = '".$price."', stock = '".$stock."' WHERE id = '$id' ");
      header("location:products");
    exit();
  }
    }else{
      $category = $_POST['category'];
   $m_category = $_POST['m_category'];
    


    $insert = mysqli_query($conn,"INSERT INTO products (product_name, price, stock, main_category_id, category_id, src) VALUES ( '".$prod_name."', '".$price."', '".$stock."', '".$m_category."', '".$category."', '".$file."' ) ");
    
    if($insert){
      move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error($conn));
      if($m_category == 6) {
        header("location:ocassion");
      }else{
        header("location:products");  
      }
      
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
                    <label for="name" class="col-md-3">Product Name</label>
                    <input type="text" name="name" id="name" value="<?php if(!empty($Edit)){
                      echo $product['product_name'];
                    } ?>" placeholder="Product Name">
                  </div>
                  <div class="form-group well">
                    <label for="price" class="col-md-3">Price</label>
                    <input type="number" name="price" id="price" value="<?php if(!empty($Edit)){
                      echo $product['price'];
                    } ?>" placeholder="1000">
                  </div>
                  <div class="form-group well">
                    <label for="stock" class="col-md-3">Stock</label>
                    <input type="number" name="stock" id="stock" value="<?php if(!empty($Edit)){
                      echo $product['stock'];
                    } ?>" placeholder="1000">
                  </div>
                  <div class="form-group well">
                    <label for="category" class="col-md-3">Main Category</label>
                   <?php if(!empty($Edit)){

                    ?> <input type="text" name="m_category" disabled value="<?php
                    $id = $product['main_category_id'];
                    $sql = mysqli_query($conn, "SELECT * FROM main_categories WHERE id = '$id' ");
                    $row = mysqli_fetch_assoc($sql);

                    echo $row['category'];
                    ?>" />
                    
                
                    <?php }
                    else{
                        ?>
                    <select name="m_category">
                      <?php
                      $sql = mysqli_query($conn, "SELECT * FROM main_categories");
                      $count =mysqli_num_rows($sql);
                      if($count >0){


                      while($rows = mysqli_fetch_assoc($sql)){
                        ?>
                        <option value="<?php echo $rows['id'] ;?>">
                          <?php echo $rows['category'] ;?>
                        </option>
                      <?php
                        }
                      }
                      ?>
                     </select>
                     <?php
                    }
                    ?>  
                  </div>

                  <div class="form-group well">
                    <label for="category" class="col-md-3">Category</label>
                   <?php if(!empty($Edit)){

                    ?> <input type="text" name="category" disabled value="<?php
                    $id = $product['category_id'];
                    $sql = mysqli_query($conn, "SELECT * FROM categories WHERE id = '$id' ");
                    $row = mysqli_fetch_assoc($sql);

                    echo $row['category'];
                    ?>" />
                    
                
                    <?php }
                    else{
                        ?>
                    <select name="category">
                      <option value='0'>None</option>

                      <?php
                      $sql = mysqli_query($conn, "SELECT * FROM categories");
                      $count =mysqli_num_rows($sql);
                      if($count >0){


                      while($rows = mysqli_fetch_assoc($sql)){
                        ?>
                        <option value="<?php echo $rows['id'] ;?>">
                          <?php echo $rows['category'] ;?>
                        </option>
                      <?php
                        }
                      }
                      ?>
                     </select>
                     <?php
                    }
                    ?>  
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