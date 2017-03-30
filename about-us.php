<?php
require "includes/db.php";
$result = mysqli_query($conn, "SELECT * FROM about");
$about = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Archies Gift Shop | About Us</title>
		<?php include "includes/head.php" ; ?>
	</head>
	
	<body>
		 <div class="scroll-top hidden"><i class="ion-chevron-up"></i></div>
		<?php include "includes/fixed-nav.php" ; ?>

		<?php include 'includes/navbar-small.php';?>
		
		<section>
			<div class="container" style="width:100%">
				<div class="row">
		     	 	<div class="address-header col-md-12">
			     	 	<h5>
			     	 		<a class="generic-anchor" href="index.php">Home</a>  / 
			     	 		About Us
			     	 	</h5>
			     	</div>
		     	</div> 
	    	</div> 
   		</section>

   		<section id="about-content">
   			<div class="container">
   				<div class="row">
   					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:1%;border-bottom: 1px solid #eee;">
   						<!-- Heading -->
   						<div class="section-title">
							<h2 class="section-heading">About <span> Us </span></h2>
   						</div>
   						<div class="col-md-5">
	   								<img src="img/about/<?php echo $about['image']; ?>">
	   							</div>

   						<!-- about us -->
   						<div class="col-md-7 paragraph">
   							<p>
   								<?php echo $about['content']; ?>
   							</p>

   							
   						</div>
   						<!-- 	<div class="col-md-12">
	   						
	   							<div class="col-md-offset-2 col-md-4">
	   								<img src="images/shop.jpg">
	   							</div>
	   						
	   						<div class="col-md-6 paragraph-sm">
	   							           
              
                <h3 class="">Contact us</h3>
            
             <!--   <h4> Kathmandu, Nepal</h4> --
               <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+977-980504000&nbsp;&nbsp;|&nbsp;&nbsp;01-444555</p>
               <p><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;01-444555</p>
               <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;arc1akash@gmail.com</p>
               <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Civil Mall, Shop no. 420</p>
            </div>
	   							
	   					
   						</div> -->
   					</div>


   				</div>
   				
   			</div>
   			
   		</section>
   		


   		<!-- <div class="col-md-12" style="padding:0em">

   			<img src="http://www.clipartkid.com/images/800/gift-ribbon-png-clipart-best-GLo4p2-clipart.jpeg">
   		</div> -->

   		<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">

              <div class="row">
                <div class="col-md-12">
              <h2>Contact Us</h2>
              <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                     <textarea  class="form-control" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" class="btn all-button">Send Message</button>
                  </form>

                  <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="<?php echo $about['twitter']; ?>" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="<?php echo $about['facebook']; ?>" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="<?php echo $about['instagram']; ?>" class="btn btn-default btn-lg"><i class="fa fa-instagram"> <span class="network-name">Instagram</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            

            </div>
        </div>
      </div>


        <div class="container" style="width:100%">
          <div class="row">
            
              <div id="googleMap">

              <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.579027228454!2d85.31054451465603!3d27.69940318279522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1854a0c1c183%3A0x864be1bcc05db676!2sCivil+Mall!5e0!3m2!1sen!2snp!4v1488269899019" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        

          
          </div>
          </div>
          
        </div>

      </section>

   		<?php include "includes/footer.php" ;?>
 <?php include "includes/script.php" ;?>
     
	</body>

</html>