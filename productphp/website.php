<html>
 <body>
  <h1>marlin
  <ul>
   <?php
    $json = file_get_contents('http://product-service1');
    $obj = json_decode($json);
    
    $products = $obj->products;
    foreach($products as $product){
    	echo "<li>$product</li>";
    }
   ?>
  </ul>
  </h1>

 </body>
</html>
