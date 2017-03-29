<?php 
$sql = mysqli_query($conn, "SELECT * FROM testimonial");

?>
<section id="counter-wrapper" class="front-page-section" >
	<div class="container">
		<div class="row">
    
		  <div class="counter-overlay"></div>

		    
			    <div class="counter-block-wrapper col-md-6 col-sm-6 col-xs-12"  style="padding-top:3%;">
			      <div class="counter-block" style="position: absolute;left:32%"><i class="fa fa-gift"></i><br><div class="inline"><div class="counter product" data-count="99">0</div><span class="less">Gifts</span></div></div>
			      <div class="counter-block" style="position: absolute;top: 30%"><i class="fa fa-users"></i><br><div class="inline"><div class="counter product" data-count="99">0</div><span>Customers</span></div></div>
			      <div class="counter-block" style="position: absolute;top: 60%; left: 32%;"><i class="fa fa-heart-o "></i><br><div class="inline"><div class="counter product" data-count="99">0</div><span class="less">Love</span></div></div>
			      <div class="counter-block" style="position: absolute;top: 30%; left: 60%;"><i class="fa fa-smile-o "></i><br><div class="inline"><div class="counter product" data-count="99">0</div><span>Happiness</span></div></div>
			    </div>
		    <div class=" testimonial-wrapper col-md-6 col-sm-6 col-xs-12" style="padding-top:3em; padding-left: 10em;">

			    <figure class="snip1533">
			        <figcaption>
			        	<div id="myCarousel" class="carousel slide" data-ride="carousel">
			 
			 				 <!-- Wrapper for slides -->
			  				<div class="carousel-inner" role="listbox">
			    				<?php
			    				while ($testi = $sql->fetch_assoc()){ 
			    				?>
			   					<div class="item">
			       					<blockquote>
			      						<p>
			      							<?php echo $testi['content'];?> 
									    </p>
			    					</blockquote>
			    					<h3><?php echo $testi['name'];?></h3>
			    					<h4><?php echo $testi['designation'];?></h4>      
			    				</div>
			    				<?php } ?>
<!-- 
							    <div class="item">
							        <blockquote>
								      <p>If you do the job badly enough,
								       sometimes you don't get asked to do it again.
								      </p>
								    </blockquote>
								    <h3>Wisteria Ravenclaw</h3>
								    <h4>Google Inc.</h4>
							    </div>

							    <div class="item">
								    <blockquote>
								      <p>If you do the job badly enough,
								       sometimes you don't get asked to do it again.
								      </p>
								    </blockquote>
								    <h3>John Doe </h3>
								    <h4>Google Inc.</h4>
							    </div>

							    <div class="item">
								    <blockquote>
								      <p>If you do the job badly enough,
								       sometimes you don't get asked to do it again.
								      </p>
								    </blockquote>
								    <h3>Wisteria </h3>
								    <h4>Google Inc.</h4>
							    </div> -->
							</div>

						  	<!-- Left and right controls -->
						 	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						    	<i class="fa fa-chevron-left" aria-hidden="true"></i>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						    	<i class="fa fa-chevron-right" aria-hidden="true"></i>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
			  
					</figcaption>
				</figure>
		    
		    </div>
		</div>
		
</div><!--/.container-->
</section>
<script type="text/javascript">
$( "div#myCarousel div.carousel-inner div.item" ).first().addClass( "active" );
</script>

	