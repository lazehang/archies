<?php
require 'includes/db.php';

if(!isset($_GET['id'])){
  echo "error";
  exit();
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
$row = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<?php include "includes/head.php" ;?>
		<title>Products</title>
	</head>

	<body style="background:hsla(0, 0%, 33%, 0.12);">
		 <div class="scroll-top hidden"><i class="ion-chevron-up"></i></div>
		<?php include "includes/fixed-nav.php" ; ?>

		<?php include 'includes/navbar-small.php';?>
		
		<section>
			<div class="container" style="width:100%">
				<div class="row">
		     	 	<div class="address-header col-md-12">
			     	 	<h5>
			     	 		<a class="generic-anchor" href="index.php">Home</a>  / 
			     	 	 <?php echo $row['product_name'] ;?>
			     	 		
			     	 	</h5>
			     	</div>
		     	</div> 
	    	</div> 
   		</section>

   		<section id="product-main">
   			<div class="container" style="width:100%; padding:0% 3%;">
   				<div class="row">
   					<div class="col-md-12 col-sm-12 col-xs-12 product-contents">
   						
   						<!-- Product Image Container -->
   						<div class="col-md-5 col-sm-5 col-xs-12">
   							<div class="zoom-wrapper">
					            <img id="zoom_03" src="img/products/<?php echo $row['src'] ;?>" class="img-reponsive" data-zoom-image="img/products/<?php echo $row['src'] ;?>"/>
					            
          					</div>
   						</div>

   						<!-- Product Details Container -->
   						<div class=" col-md-7 col-sm-7 col-xs-12 product-detail-panel" >
					        <div class="section-title" >
					           
					        </div>
					        <div class="">

								<form class="order-form">
            						<table class="table  col-md-12 col-sm-12 col-xs-12 ">
            							<thead>
            								<tr>
            									<td colspan="2">
            									 <h3 style="">
					               <?php echo $row['product_name'] ;?>
					            </h3>
					            </td>

            								</tr>
            							</thead>
            							<tbody>
							            <tr>
							            	<td>Price :</td>
							                <td><span><?php echo $row['price'] ;?></span>/unit</td>
							            </tr>
							          
          
          							   
							            <tr>
						                	<td>Quantity :</td>
						                	<td>
						                  		<div class="input-group" style="z-index :0; max-width:200px;">
						          					<span class="input-group-btn">
										            	<button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="quant[2]">
										                	<span class="glyphicon glyphicon-minus"></span>
										              	</button>
									          		</span>
						         					<input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
										          	<span class="input-group-btn">
										            	<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
										                	<span class="glyphicon glyphicon-plus"></span>
										              	</button>
										          	</span>
						      					</div>
						                	</td>
						              	</tr>
						              </tbody>
              					
            						</table>
	            					<div style="margin-left:1%">
	             						<button class="btn btn-danger add-to-cart-btn"> Add to cart</button>
	            						<button class="btn btn-primary add-to-cart-btn"> Check Out</button>
	            					</div>
          						</form>           

					        </div>

							<div class="info-wrapper col-md-12 col-sm-12 col-xs-12 ">
								
								<div>
									<h3> Seller's Information	</h3>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 seller-img">
					              <img src="images/logo.png">
					             
					            </div>
					            <div class="col-md-4 col-sm-4 col-xs-12">
					              <ul style="">
					                <li>
					                  <p>New Group</p>
					                </li>
					                <li>
					                  <p>Civil Mall</p>
					                </li>
					                <li>
					                  <p><i class="fa fa-mobile"></i> 984270055</p>
					                </li>
					              </ul>
					            </div>
					            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	           					     <div class="footer-social-pane">
                    
					                      <a class="social-button facebook" href="#">
					                        <i class="fa fa-facebook"></i>
					                      </a>
					                      <a class="social-button twitter" href="#">
					                        <i class="fa fa-twitter"></i>
					                      </a>
					                      <a class="social-button google" href="#">
					                        <i class="fa fa-google"></i>
					                      </a>
					                      <a class="social-button instagram" href="#">
					                        <i class="fa fa-instagram"></i>
					                      </a>
                     
									</div>
					            </div>
								
							</div>
						

					    </div>

   					</div>	
   				</div>
   				
   			</div>
   		</section>

   		<section id="product-info-main">
   			<div class="container" style="width:100%; padding:0% 3%;">
   				<div class="row">
   					<div class="col-md-12 col-sm-12 col-xs-12 product-contents" style="margin-top:0%">
   					  	<div class="product-info-header" ><h2>Product Deatails</h2></div>
			           
			              <div class="product-info col-md-6 col-sm-6">
			                <ul>
			                  <li class="wrapper-header">General Description</li>
			                  <li>Brand <span>Levis'</span></li>
			                  <li>Series <span>001</span></li>
			                  <li>Model <span>Jeans</span></li>
			                  <li>Color <span>blue</span></li>
			                </ul>
			              </div>

			              <div class="product-info col-md-6 col-sm-6">
			                <ul>
			                  <li class="wrapper-header">Product Specication</li>
			                  <li>Type:<span>Jacket</span></li>
			                  <li>Length:<span>M</span></li>
			                </ul>
			              </div>
           			</div> 
						
   				</div>	
   			</div>
   				
   			
   		</section>

		<?php include "includes/footer.php" ;?>
		<?php include "includes/script.php" ; ?>
	

		<script type="text/javascript"> 
           $(document).ready(function () {
          $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: "http://www.elevateweb.co.uk/spinner.gif"}); 
          $("#zoom_03").bind("click", function(e) {  
          var ez =   $('#zoom_03').data('elevateZoom');
          ez.closeAll(); //NEW: This function force hides the lens, tint and window 
          $.fancybox(ez.getGalleryList());
          return false;
          }); 

          }); 
          

          </script>

	</body>


</html>