<div class="section-content">
<?php
  foreach($products as $products =>$product){
    ?>
      <div class="product_card <?php if($product['p_status'] == "A"){echo "hot-product";} ?>">
        <div class="card-header">
          <img class="chead-img" src="../assets/img/p_img/<?php echo $product['product_image'];?>.jpg" alt="Header Image">
        </div>
        <div class="card-body">
          <h4 class="card-title"><?php echo substr($product['product_name'], 0, 25);?></h4>
          <p class="card-desc"><?php echo substr($product['product_description'], 0, 80);?></p>
          <p class="price"><b>Price: <?php echo $product['product_price'];?></b><i class="fa fa-euro-sign"></i></p>
        </div>
        <div class="card-footer">
          <div class="add-to-shopping-card">
            <button class="sc-btn" id="sc-minus" value="-">-</button>
            <div class="in-the-shopping-card" id="in-the-shopping-card">1</div>
            <button class="sc-btn" id="sc-plus" value="+">+</button>
          </div>
          <a href="?singleProduct=<?php echo $product['product_id'];?>" class="card-link">read more</a>
        </div>
      </div>
    <?php 
  }?>
</div>