<?php
require 'includes/db.php';

$ocassion = mysqli_query($conn, "SELECT * FROM ocassion ORDER BY id DESC LIMIT 1")->fetch_assoc();




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Archies Gift Shop | For Her</title>
    <?php include 'includes/head.php';?>
</head>
<body>
		<?php include 'includes/fixed-nav.php'; ?>
		<?php include 'includes/navbar-small.php'; ?>
		
		<div class="head-banner container col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="banner-caption"><h1>Ocassion</h1></div>
					
		</div>
		<div class="container product-address-header col-md-12 col-sm-12 col-xs-12">
			<h5><a class="generic-anchor" href="index.php">Home</a>  / <a class="generic-anchor" href="forher.php"> Ocassion</a> </h5>
 
	   	</div>
	   	



<section style="margin-bottom:2%">
  <div class="container" style="width:100%">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="header" style="margin:0%; margin-bottom: 2%;">
          <h1 class="quote" style="color:#71b839"> <?php echo $ocassion['head'] ;?></span></h1>
          <p class="color:light-blue"> <?php echo $ocassion['quote'] ;?> </p>
        </div>
        <div> 
          <img src="img/ocassion/<?php echo $ocassion['src'];?>" width="100%">
        </div>
      </div>
    </div>
  </div>
</section>


   <div>
            <ul class="pagination pull-right">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
        </div>

<section class="product-inner-showcase ">
  <div class="container" style="width:100%;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >

     
     

    

      <div class="item text-center">
         <?php
         $sql = mysqli_query($conn, "SELECT a.* FROM products a inner join main_categories b on a.main_category_id = b.id Where b.category = 'ocassion' ");
         $count = mysqli_num_rows($sql);

         if ($count > 0){
         while( $row = $sql->fetch_assoc() ){
         ?><!-- ITEM-->
            <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="thumbnail product-item">
             <div class="hovereffect">
            <img class="img-responsive item-img" src="img/products/<?php echo $row['src']; ?>" alt="product">
            <div class="overlay">
               <a class="info see-more" href="products.php?id=<?php echo $row['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon" title="see more" ><i class="fa fa-eye fa-product-icon"> </i></i></a>
               <a class="info add-to-cart" href="#"><i class="hovicon effect-1 sub-a hover-icon" title="add to cart"><i class="fa fa-shopping-bag fa-product-icon"></i></i></a>
               
            </div>
        </div>
            
          </div>
          <h3><a href="products.php?id=<?php echo $row['id']; ?>"><?php echo $row['product_name']; ?></a></h3>
          <p class="amount"> <span><?php echo $row['price']; ?></span>/piece </p> 
            </div>
        <!-- ITEM-->
        <?php } 
        }else{?>
      <h2 class="text-danger text-center">NO ITEMS AVAILABLE NOW !!</h2>
      <?php } ?>
   
          
      </div>
  
    </div>
</div>
</div>
</section>
   <div>
            <ul class="pagination pull-right">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
        </div>

	  	
	<?php include 'includes/footer.php'; ?> 
</body>
</html>
