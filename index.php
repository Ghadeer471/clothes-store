<!-------<?php include('functions.php'); ?>------>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Elegance Store</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- static content skipped for brevity -->

<div class="small-container"> 
<h2 class="title">Featured Products</h2>
<div class="row">
<!--------------<?php foreach(getFeaturedProducts() as $product): ?>------->
    <div class="col-4">
        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <h4><?= htmlspecialchars($product['name']) ?></h4>
        <p>£<?= number_format($product['price'], 2) ?></p>
    </div>
<?php endforeach; ?>
</div>

<h2 class="title">Latest Products</h2>
<div class="row">
<?php foreach(getLatestProducts() as $product): ?>
    <div class="col-4">
        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <h4><?= htmlspecialchars($product['name']) ?></h4>
        <p>£<?= number_format($product['price'], 2) ?></p>
    </div>
<!------<?php endforeach; ?>------>
</div>
</div>

<!-- footer and other HTML content continues -->
</body>
</html>