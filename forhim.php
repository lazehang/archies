<?php
 require "includes/db.php";
 $sql = mysqli_query($conn, "SELECT a.* FROM products a inner join main_categories b on a.main_category_id = b.id Where b.category = 'for him' ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Archies Gift Shop | For Him</title>
    <?php include 'includes/head.php';?>
</head>
<body>
		<?php include 'includes/fixed-nav.php'; ?>
		<?php include 'includes/navbar-small.php'; ?>
		
		<div class="head-banner container col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="banner-caption"><h1>FOR HIM</h1></div>
					
		</div>
		<div class="container product-address-header col-md-12 col-sm-12 col-xs-12">
			<h5><a class="generic-anchor" href="index.php">Home</a>  / <a class="generic-anchor" href="forhim.php"> For Him</a> </h5>
			
   	   	</div>
   	   <!-- 	<div class="container">
   	   		<div class="row">
   	   			<div class="col-md-12">
   	   				<form class="form-inline">
					  <div class="form-group">
					    <label for="perpage">Products Per Page</label>
					   	<select class="form-control" name="perpage" id="perpage">
					   		<option value="12">12</option>
					   		<option value="24">24</option>
					   		<option value="36">36</option>
					   	</select>
					  </div>
					 
					  <button type="submit"  name="prodper" class="btn btn-default">Submit</button>
					</form>


   	   			</div>
   	   		</div>	
   	   	</div> -->

<section class="product-inner-showcase ">
  	<div class="container" style="width:100%;">
    	<div class="row">
      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >

		      	<div class="item text-center">
		       <?php
				if(isset($_POST['prodper']))
				{
					$perpage= $_POST['perpage'];
				} else{
				$perpage = 2;
				}
				if(isset($_GET["page"])){
				$page = intval($_GET["page"]);
				}
				else {


				$page = 1;
				}

				$calc = $perpage * $page;
				$start = $calc - $perpage;
				$result = mysqli_query($conn, "SELECT a.* FROM products a inner join main_categories b on a.main_category_id = b.id Where b.category = 'for him'  Limit $start, $perpage");

				$rows = mysqli_num_rows($result);

				if($rows > 0){
				$i = 0;
				while($post = mysqli_fetch_assoc($result)) {
				?>
				<div class="col-md-3 col-sm-3 col-xs-12">
				          <div class="thumbnail product-item">
				             <div class="hovereffect">
				            <img class="img-responsive item-img" src="img/products/<?php echo $post['src']; ?>" alt="product">
				            <div class="overlay">
				               <a class="info see-more" href="products.php?id=<?php echo $post['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon" title="see more" ><i class="fa fa-eye fa-product-icon"> </i></i></a>
				               <a class="info add-to-cart" href="#"><i class="hovicon effect-1 sub-a hover-icon" title="add to cart"><i class="fa fa-shopping-bag fa-product-icon"></i></i></a>
				               
				            </div>
				        </div>
				            
				          </div>
				          <h3><a href="products.php?id=<?php echo $post['id']; ?>"><?php echo $post['product_name']; ?></a></h3>
				          <p class="amount"> <span><?php echo $post['price'];  ?></span>/piece </p> 
				            </div>
				<?php
				}
				}
				else {
		         ?>
		   
		          <div class="text-center text-danger">
		            <h1>No Results Available Now !!</h1>
		          </div>          

		        <?php
		        }
						?>
			  </div>
    		</div>
		</div>
	</div>
</section>
<div class="container">
            <ul class="pagination pull-right">

<?php

    if(isset($page))
  {

    $result = mysqli_query($conn,"SELECT a.* FROM products a inner join main_categories b on a.main_category_id = b.id Where b.category = 'for him'");

    $rows = mysqli_num_rows($result);

    if($rows)

    {

      $rs = mysqli_fetch_assoc($result);

      

    }
    $total = $rows;

    $totalPages = ceil($total / $perpage);

    if($page <=1 ){

      echo "<li class='page-item disabled'><a class='page-link'>Prev</a></li>";
    }

    else{

      $j = $page - 1;

      echo "<li class='page-item'><a class='page-link' href='forhim.php?page=$j'>< Prev</a></li>";
    }

    for($i=1; $i <= $totalPages; $i++)
    {
      if($i<>$page)
      {     
        echo "<li class='page-item'><a class='page-link' href='forhim.php?page=$i'>$i</a></li>";
      }

      else
      {
        echo "<li class='page-item' ><a class='page-link'>$i</a></li>";
      }

    }

    if($page == $totalPages )

    {

      echo "<li class='page-item disabled' ><a class='page-link'>Next</a></li>";

    }

    else

    {

      $j = $page + 1;

      echo "<li class='page-item'><a class='page-link' href='forhim.php?page=$j'>Next</a></li>";

    }
  }


  ?>
  </ul>
        </div>
	  	
	<?php include 'includes/footer.php'; ?> 
</body>
</html>
