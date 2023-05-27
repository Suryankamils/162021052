

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include ('layouts/header.php'); ?>

<div class="heading">
   <h3>our shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img" alt="">
      <div class="name"></div>
      <div class="price">/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="">
      <input type="hidden" name="product_price" value="">
      <input type="hidden" name="product_image" value="">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      
   </div>

</section>








<?php include ('layouts/footer.php'); ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>