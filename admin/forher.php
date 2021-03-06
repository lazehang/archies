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
        Products
        <small> view products </small>
             </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">products</a></li>
      </ol>
    </section>

  
<a href="newproduct.php" class="btn addprodbtn"><i class="fa fa-plus"> Products</i></a><br>

  <!-- for him content -->
<section class="content">
    <div class="box container"><br>
        <a href="newproduct.php?cat=for her" class="btn btn-primary">Add Product</a><br>
        <h2 class="well well-sm ">For Her</h2>
        <div class="table-responsive">
              <table class="table table-striped table-bordered">
            <thead class="">
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Main Category</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysqli_query($conn,"SELECT a.* FROM products a inner join main_categories b on a.main_category_id = b.id Where b.category = 'for her' ") or die(mysqli_error());
                 while ($row = mysqli_fetch_assoc($query)) {
                  $name = $row['product_name'];
                  $price = $row['price'];
                  $stock = $row['stock'];
                  $category = $row['category_id'];
                  $main = $row['main_category_id'];
                  $src = $row['src'];
                ?>
                  <tr>
                    <td>
                      <?php echo $name; ?>
                    </td>
                    <td>
                      <?php echo $price; ?>
                    </td>
                    <td>
                      <?php echo $stock; ?>
                    </td>
                    <td>
                      <?php
                      $main_category = mysqli_query($conn,"SELECT * FROM main_categories where id = '$main' ")->fetch_assoc(); 
                      echo $main_category['category']; ?>
                    </td>
                    <td>
                      <?php 
                      $categories = mysqli_query($conn,"SELECT * FROM categories where id = '$category' ")->fetch_assoc();
                      if($categories !== NULL){
                        echo $categories['category'];
                        }else{
                          echo "<p class='text-danger'>No category selected</p>";
                        } ?>
                    </td>
                    <td>
                      <img class="img" src="../img/products/<?php echo $src; ?>" height="200px">
                    </td>
                    <td>
                      <a href="newproduct.php?id=<?php echo $row['id']; ?>" class="text-success"><i class="fa fa-edit"></i></a>
                      <a href="delete/delete-product.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <?php
                 }
                ?>
            </tbody>
        </table>
      </div>
    </div>
</section><!-- /.content -->

<?php include 'includes/footer.php'; ?>