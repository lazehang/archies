<?php
require 'includes/db.php';

//responsive slider
$sliders = mysqli_query($conn, "SELECT * from responsiveslider");






?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Archies Gift Shop</title>
	
      <?php include 'includes/head.php'; ?>


    
     
	</head>
	<body>
      <div class="scroll-top hidden"><i class="ion-chevron-up"></i></div>
    <nav class="navbar navbar-default navbar-fixed-top nav-col" role="navigation">
      <div class="container-fluid" style="padding:0em;"> 

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="col-md-3 col-sm-3 col-xs-6">
          <ul class="nav navbar-nav ">
            
          <li><a class="navbar-brand" href="index.php" style="padding-top: 9px; padding-left: 25px;"><img src="images/logo.png" alt="logo" /></a></li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> </a>
              <ul class="dropdown-menu burger-menu">
                <li><a href="forhim.php">For Him</a></li>
                <li class="divider"></li>
                <li><a href="forher.php">For Her</a></li>
                <li class="divider"></li>
                <li><a href="forkids.php">For Kids</a></li>
                <li class="divider"></li>
                <li><a href="forhome.php">For Home</a></li>
                <li class="divider"></li>
                <li><a href="newarrival.php">New Arrivals</a></li>
                <li class="divider"></li>
                <li><a href="#">Ocassion</a></li>
              </ul>
            </li>
            </ul>
          </div>
           <div class="col-md-6 col-sm-6 col-xs-6">
          <form class="navbar-form navbar-left" id="nav-search-bar" role="search">
            <div class="input-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span id="search_concept">Categories</span> <span class="caret"></span>
                    </button>
               <ul class="dropdown-menu" role="menu">
                      <li><a href="#">For Him</a></li>
                      <li><a href="#">For Her</a></li>
                      <li><a href="#">For Kids</a></li>
                      <li><a href="#">For Home</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                </ul>
              
             
              <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
             
            </div>
           
          </form>
        </div>
           <div class="nav navbar-nav navbar-right col-md-3 col-sm-3 col-xs-6" id="nav-user-account">
           
              <div class="nav-user-inner col-md-offset-1 col-md-11 col-sm-offset-1 col-sm-11 col-xs-12 "> <a href="">Sign In</a> | <a href="">Register</a></div>
               <div class="col-md-offset-1 col-md-11 col-sm-offset-1 col-sm-11 col-xs-12 ">
              <span>Archies Gift Shop</span>
          
 
            </div>
           
           
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container" style="width:100%;">
      <div class="row">
 
          <?php include 'includes/navbar-small.php';?>
        </div>
      </div> 
    

          
    <section id="top-head">

      <div class="container" id="page1">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-6 col-sm-6 col-xs-12" style="padding:0px !important">
                <div id="logo-bar" style="cursor: pointer;" onclick="window.location='index.php';">     
                  <img src="images/logo1.png" alt="logo" id="logo-img"/>
                  <!-- <div id="tag-line">
                    <h2>The most special way to say you care</h2>
                  </div>   -->         
                </div>        
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" id="head-pane">
                    <ul class="pull-right">
                      <li><a href="about-us.php"><i class="hovicon effect-1 sub-a" data-toggle="tooltip" title="About Us"><i class="ion-information"></i></i></a></li>
                      <li><a href=""><i class="hovicon effect-1 sub-a" data-toggle="tooltip" title="Help!"><i class="ion-help"></i></i></a></li>
                      <li><a href=""><i class="hovicon effect-1 sub-a" data-toggle="tooltip" title="Sign Up"><i class="ion-person"></i></i></a></li>
                      <li><a data-toggle="modal" data-target="#cart-modal"><i class="hovicon effect-1 sub-a" data-toggle="tooltip" title="My Cart"><i class="ion-ios-cart"></i></i></a></li>
                      <!-- Modal -->
                      <div id="cart-modal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                              <div id="shopping-cart">
                                
                                
                            
                            
                                 </div>
                            </div>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                 
                    </ul>
              </div>            
              
              <div class="col-md-12 col-sm-12 col-xs-12" id="search-bar">  
                     
                          <div id="search" class="pull-right">
                            <input id="input" placeholder="looking for..."/>
                            <button id="button"><i class="fa fa-search"></i></button>
                            <div class="spinner"><i class="fa fa-spinner"></i></div>
                          </div>

              </div>
            
          </div>
        </div>
      </div>
      
    </section>

   
    
            
          <?php include 'includes/menu.php' ; ?>

        


    <section id="responsive-slider">
    
    <!-- Responsive slider - START -->
<div class="responsive-slider-parallax" data-spy="responsive-slider" data-parallax="true" data-parallax-direction="1">
  <div class="slides-container" data-group="slides">
    <div class="bg-photo">
        <img src="images/box.png" class="bg-heart">
      </div>
    <ul>
      <?php 
     while ($slider = $sliders->fetch_assoc()) { ?>
      <li>
        <div class="slide-body" data-group="slide">
          <div class="container">
            <div class="wrapper">
              <div class="caption header-main" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                <div class="caption sub-top" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">&mdash; <?php echo $slider['top_caption']; ?> &mdash;</div>
                <h2><?php echo $slider['main_caption']; ?></h2>
                <div class="caption sub-bottom" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">&mdash;<?php echo $slider['bottom_caption']; ?>&mdash;</div>
              </div>
              <div class="caption img-toy" data-animate="slideAppearLeftToRight" data-delay="200">
                <img src="img/slider/<?php echo $slider['src']; ?>">
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php } ?>
     <!--  <li>
        <div class="slide-body" data-group="slide">
          <div class="container">
            <div class="wrapper">
              <div class="caption header-main" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                <div class="caption sub-top" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">&mdash; Your smile made &mdash;</div>
                <h2>Happiness</h2>
                <div class="caption sub-bottom" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">&mdash; ENJOY GIFTS &mdash;</div>
              </div>
              <div class="caption img-toy" data-animate="slideAppearLeftToRight" data-delay="200">
                <img src="images/toy2.png">
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="slide-body" data-group="slide">
          <div class="container">
            <div class="wrapper">
              <div class="caption header-main" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                <div class="caption sub-top" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">&mdash; Your smile made &mdash;</div>
                <h2>Happiness</h2>
                <div class="caption sub-bottom" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">&mdash; ENJOY GIFTS &mdash;</div>
              </div>
              <div class="caption img-toy" data-animate="slideAppearLeftToRight" data-delay="200">
                <img src="images/toy1.png">
              </div>
            </div>
          </div>
        </div>
      </li> -->
    </ul>
  </div>
  <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-chevron-left"></i></a>
  <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-chevron-right"></i></a>
  <div class="pages">
    <a class="page" href="#" data-jump-to="1">1</a>
    <a class="page" href="#" data-jump-to="2">2</a>
    <a class="page" href="#" data-jump-to="3">3</a>
  </div>
</div>
<!-- Responsive slider - END -->
</section>

<section id="page2">
    
    <div class="container" id="page2-header">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0em;">

              
              <img src="images/archies.png" style="width:100%">              
         
            <div class="header">
              <h1 class="quote quote1">
                <!-- <span><i class="fa fa-quote-left quote_logo" aria-hidden="true"></i></span> -->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Most beautiful way to express your love is giving gifts!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </h1>
             <h2 class="quote quote2">Keep Giving...</h2>

            
          
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 btn-all">
              <a class="all-button inset animated slideInUp" href="about-us.php">Learn More</a>
      </div>
      
    </div>

</section>

<!-- Now Trending -->
<section id="trending-now">
  <div class="container section-title">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
          <h2 class="section-heading"> Trending <span>Now</span></h2>               
      </div>
    </div>
     <div id="trendingCarousel" class="carousel slide carousel-lg" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#trendingCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#trendingCarousel" data-slide-to="1"></li>
      <li data-target="#trendingCarousel" data-slide-to="2"></li>
      <li data-target="#trendingCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    

      <?php 
      $trending = mysqli_query($conn, "SELECT a.* FROM products a inner join categories b on a.category_id = b.id Where b.category = 'trending' ");
      while($result = mysqli_fetch_assoc($trending)) { ?>

     

      <div class="item text-center">
         <!-- ITEM-->
            <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail product-item">
             <div class="hovereffect">
            <img class="img-responsive item-img" src="img/products/<?php echo $result['src']; ?>" alt="product">
                          <div class="overlay">
                              <a class="info see-more" title="see more" href="products.php?id=<?php echo $result['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon"><i class="fa fa-eye fa-product-icon"> </i></i></a>
                            <a class="info add-to-cart" title="add to cart" href="addtocart.php?id=<?php echo $result['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon"><i class="fa fa-shopping-bag fa-product-icon"></i></i></a>
                            </div>
                      </div>
                      </div>
                    <h3><a href="products.php?id=<?php echo $result['id']; ?>"><?php echo $result['product_name'] ; ?></a></h3>
                      <p class="amount"> <span><?php echo $result['price']; ?></span>/piece </p> 
            </div>
        <!-- ITEM-->
      </div>

     <?php }  ?>

      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#trendingCarousel" role="button" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#trendingCarousel" role="button" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




  

  </div>
   
  
</section> <!-- end of now trendings -->

 



<!-- Most viewed -->

<section id="most-viewed">
  <div class="container section-title">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
          <h2 class="section-heading"> Most <span>Viewed</span></h2>               
      </div>
    </div>
     <div id="viewedCarousel" class="carousel slide carousel-lg" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#viewedCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#viewedCarousel" data-slide-to="1"></li>
      <li data-target="#viewedCarousel" data-slide-to="2"></li>
      <li data-target="#viewedCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

    <?php 
      $mostviewed = mysqli_query($conn, "SELECT a.* FROM products a inner join categories b on a.category_id = b.id Where b.category = 'mostviewed' ");
      $count = mysqli_num_rows($mostviewed);
        
      if($count > 0){
      while($result = mysqli_fetch_assoc($mostviewed)) { ?>

     

      <div class="item text-center">
         <!-- ITEM-->
            <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail product-item">
             <div class="hovereffect">
            <img class="img-responsive item-img" src="img/products/<?php echo $result['src']; ?>" alt="product">
                          <div class="overlay">
                              <a class="info see-more" title="see more" href="products.php?id=<?php echo $result['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon"><i class="fa fa-eye fa-product-icon"> </i></i></a>
                            <a class="info add-to-cart" title="add to cart" href="addtocart.php?id=<?php echo $result['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon"><i class="fa fa-shopping-bag fa-product-icon"></i></i></a>
                            </div>
                      </div>
                      </div>
                    <h3><a href="products.php?id=<?php echo $result['id']; ?>"><?php echo $result['product_name'] ; ?></a></h3>
                      <p class="amount"> <span><?php echo $result['price']; ?></span>/piece </p> 
            </div>
        <!-- ITEM-->
      </div>

     <?php } 
     } else { ?>
     <h2 class="text-center text-danger"> No Products Available Now !!</h2>

      <?php } ?>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#viewedCarousel" role="button" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#viewedCarousel" role="button" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

  
 
 
  
  
</section> <!-- end most viewed -->

     <?php include 'includes/hero-video.php'; ?>


 




  <!-- new collection -->
 <section id="new-collection">
  <div class="container section-title">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
          <h2 class="section-heading"> New <span>Collection</span></h2>               
      </div>
    </div>
     


     <div id="newCarousel" class="carousel slide carousel-lg" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#newCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#newCarousel" data-slide-to="1"></li>
      <li data-target="#newCarousel" data-slide-to="2"></li>
      <li data-target="#newCarousel" data-slide-to="3"></li>
    </ol>

     <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

    <?php 
      $new = mysqli_query($conn, "SELECT a.* FROM products a inner join categories b on a.category_id = b.id Where b.category = 'newcollection' ");
      $count = mysqli_num_rows($new);
        
      if($count > 0){
      while($result = mysqli_fetch_assoc($new)) { ?>

     

      <div class="item text-center">
         <!-- ITEM-->
            <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail product-item">
             <div class="hovereffect">
            <img class="img-responsive item-img" src="img/products/<?php echo $result['src']; ?>" alt="product">
                          <div class="overlay">
                              <a class="info see-more" title="see more" href="products.php?id=<?php echo $result['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon"><i class="fa fa-eye fa-product-icon"> </i></i></a>
                            <a class="info add-to-cart" title="add to cart" href="addtocart.php?id=<?php echo $result['id']; ?>"><i class="hovicon effect-1 sub-a hover-icon"><i class="fa fa-shopping-bag fa-product-icon"></i></i></a>
                            </div>
                      </div>
                      </div>
                    <h3><a href="products.php?id=<?php echo $result['id']; ?>"><?php echo $result['product_name'] ; ?></a></h3>
                      <p class="amount"> <span><?php echo $result['price']; ?></span>/piece </p> 
            </div>
        <!-- ITEM-->
      </div>

     <?php } 
     } else { ?>
     <h2 class="text-center text-danger"> No Products Available Now !!</h2>

      <?php } ?>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#viewedCarousel" role="button" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#viewedCarousel" role="button" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

  
</section><!--  end new collection -->  

  <?php include 'includes/testimonials.php'; ?>
<?php include 'includes/footer.php'; ?>

 <script>
$( "div#trendingCarousel div.carousel-inner div.item" ).first().addClass( "active" );
$( "div#newCarousel div.carousel-inner div.item" ).first().addClass( "active" );
$( "div#viewedCarousel div.carousel-inner div.item" ).first().addClass( "active" );

</script>


 <script type="text/javascript">
  $('.carousel-lg').carousel({
  interval: false
})

$('.carousel-lg .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});

</script>

<script src="responsive-slider/js/jquery.js"></script>
            
<script src="responsive-slider/js/jquery.event.move.js"></script>
<script src="responsive-slider/js/responsive-slider.js"></script>

 <script src="hero-slider/js/main.js"></script>

<script src="hero-slider/js/modernizr.js"></script>
<script src="js/scroll-top.js"></script>
 
 <script type="text/javascript">
$(document).ready(function(){

   $('.responsive-slider-parallax ').responsiveSlider({
          autoplay: true,
          transitionTime: 1000
        });

});

 
</script>     
 <script>
  $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');

    $(window).scroll(function () {

      if ($(this).scrollTop() > 700) {
        $(".counter-block-wrapper").addClass("animated fadeInLeft");
    $(".snip1533").addClass("animated fadeInRight");
      
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {
    duration: 1000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });
}
});
});
</script>   

<script type="text/javascript">
  $(document).ready(function() {
(function ($) {
  $(document).ready(function(){
    
  // hide .navbar first
  $(".nav-col").hide();
  
  // fade in .navbar
  $(function () {
    $(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
      if ($(this).scrollTop() > 700 & $(this).width() > 1024) {
        $('.nav-col').fadeIn();
      } else {
        $('.nav-col').fadeOut();
      }
    });

  
  });

});
  }(jQuery));

}); 

</script>


  <!-- for search button=========================================================================================== -->
  <script type="text/javascript">
    var search = document.getElementById('search');
    var button = document.getElementById('button');
    var input = document.getElementById('input');

    function loading() {
      search.classList.add('loading');

      setTimeout(function() {
        search.classList.remove('loading');
      }, 1500);
    }

    button.addEventListener('click', loading);

    input.addEventListener('keydown', function() {
      if (event.keyCode == 13) loading();
    });
  </script>
  <!-- end search====================================================================================================== -->

  <script type="text/javascript">
 
// $(document).ready(function() {
//    $("#trending-sm").swiperight(function() {
//       $(this).carousel('prev');
//     });
//    $("#trending-sm").swipeleft(function() {
//       $(this).carousel('next');
//    });
// });



 </script>  

   
   
       
                   
             
      
            

   


  
	</body>
</html>

