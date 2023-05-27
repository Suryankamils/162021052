


<body>
   
<?php include ('layouts/header.php'); ?>

<div class="heading">
   <h3>search page</h3>
   <p> <a href="home.php">home</a> / search </p>
</div>

<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="search products..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>

<section class="products" style="padding-top: 0;">

   <div class="box-container">
   
   <form action="" method="post" class="box">
      <img src="uploaded_img" alt="" class="image">
      <div class="name"></div>
      <div class="price">/-</div>
      <input type="number"  class="qty" name="product_quantity" min="1" value="1">
      <input type="hidden" name="product_name" value="">
      <input type="hidden" name="product_price" value="">
      <input type="hidden" name="product_image" value="">
      <input type="submit" class="btn" value="add to cart" name="add_to_cart">
   </form>
   
   </div>
  

</section>





<?php include ('layouts/footer.php'); ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>