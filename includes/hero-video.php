<?php 
$videoslider= mysqli_query($conn, "SELECT * FROM hero_slider"); 

?>
<section class="cd-hero">
     
	    <ul class="cd-hero-slider">
	      <div class="overlay"></div>

		<?php while($video=mysqli_fetch_assoc($videoslider)) { ?>
	    <li class="cd-bg-video selected" >
	        <div class="cd-full-width">
	          <h2>Archies Gift Shop</h2>
	          <p >The most special way to say you care </p>
	           <i class="fa fa-gift" style="font-size:3em; color:#fff"></i>
	          <p class="quotes">" Presents are made for the pleasure of who gives them, not the merits of who receives them. "</p>
	         
	       
	        </div> <!-- .cd-full-width -->

	        <div class="cd-bg-video-wrapper" data-video="img/videos/<?php echo $video['video'] ;?>">
	          
	        </div>
	       
	      </li>
	  <?php }
?>	     
	    </ul>
	
  	
  </section>

