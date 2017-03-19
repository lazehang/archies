<?php

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// make quantity a minimum of 1
$quantity=$quantity<=0 ? 1 : $quantity;

// add new item on array
$cart_items[$id]=array(
  'quantity'=>$quantity
);

// read
$cookie = isset($_COOKIE['cart_items_cookie']) ? $_COOKIE['cart_items_cookie'] : "";
$cookie = stripslashes($cookie);
$saved_cart_items = json_decode($cookie, true);

// if $saved_cart_items is null, prevent null error
if(!$saved_cart_items){
  $saved_cart_items=array();
}

if(isset($_GET['id'])){
// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $saved_cart_items)){
  // redirect to product list and tell the user it was added to cart
  header('Location: product.php?id=' . $id . '&action=exists');
}
}

// else, add the item to the array
else{
  // if cart has contents
  if(count($saved_cart_items)>0){
    foreach($saved_cart_items as $key=>$value){
      // add old item to array, it will prevent duplicate keys
      $cart_items[$key]=array(
        'quantity'=>$value['quantity']
      );
    }
  }

  // put item to cookie
  $json = json_encode($cart_items, true);
  setcookie("cart_items_cookie", $json, time() + (86400 * 30), '/'); // 86400 = 1 day
  $_COOKIE['cart_items_cookie']=$json;

  // redirect to product list and tell the user it was added to cart
  // header('Location: product.php?id=' . $id . '&action=added');
 
}

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

      <div class="banner-caption"><h1>New Arrival</h1></div>
          
    </div>
    <div class="container product-address-header col-md-12 col-sm-12 col-xs-12">
      <h5><a class="generic-anchor" href="index.php">Home</a>  / <a class="generic-anchor" href="forhim.php"> For Him</a> </h5>
      

      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table">
                <thead>
                  <tr>
                    <td>Product</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Image</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ids = array();
                  foreach($saved_cart_items as $id=>$name){
    array_push($ids, $id);
  }

                $stmt=$product->readByIds($ids);

  $total=0;
  $item_count=0;


                   while($result = $query->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $result['product_name']; ?></td>
                    <td><?php echo $quantity ; ?></td>
                    <td><?php echo $result['price']; ?></td>
                    <td><img src="img/products/<?php echo $result['src']; ?>" height="200px"></td>
                  </tr>
                  <?php } ?>
                </tbody>

            </table>
          </div>
        </div>
        
      </div>
      



      
  <?php include 'includes/footer.php'; ?> 
</body>
</html>
