
<section class="page-section" id="products">
  <div class="section-container" >
    <?php
    $tableName = "products";
    if(isset($_REQUEST['subcategory'])){
      $product_category = $_REQUEST['subcategory'];
      $products = $DB->sql_SelectAllByCategory($tableName, $product_category);
      if($products){
        require_once 'products/productsByCategory.php';
      }elseif(!$products){
        $products = $DB->sql_SelectAll($tableName);
        require_once 'products/promoProducts.php';
      }
    }elseif(isset($_REQUEST['singleProduct'])){
      $_id = $_REQUEST['singleProduct'];
      $products = $DB->sql_SelectOneProduct($tableName, $_id);
      require_once 'products/singleProduct.php';
    }else{
      $products = $DB->sql_SelectAll($tableName);
      if($products){
        require_once 'products/promoProducts.php';
      }
    }
    ?>
  </div>
</section>

