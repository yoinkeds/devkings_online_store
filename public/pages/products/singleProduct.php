<div id="single-product" class="section-content" >
<?php
  foreach($products as $products =>$product){
    ?>
    <div class="single_card <?php if($product['p_status'] == "A"){echo "hot-product";} ?>">
        <div class="card-header">
            <div class="product_image">
                <img class="chead-img" src="../assets/img/p_img/<?php echo $product['product_image'];?>.jpg" alt="Header Image">
            </div>
            <div class="basic_info">
                <h4 class="card-title"><?php echo substr($product['product_name'], 0, 25);?></h4>
                <p class="card-desc"><?php echo substr($product['product_description'], 0, 80);?></p>
                <p class="price"><b>Price: <?php echo $product['product_price'];?></b><i class="fa fa-euro-sign"></i></p>
                <div class="card-footer">
                    <div class="add-to-shopping-card">
                        <button class="sc-btn" id="sc-minus" value="-">-</button>
                        <div class="in-the-shopping-card" id="in-the-shopping-card">1</div>
                        <button class="sc-btn" id="sc-plus" value="+">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="tabs details_tabs">
                <div role="tablist" aria-label="Sample Tabs" class="tab-head">
                    <button role="tab" aria-selected="true"  aria-controls="tab-panel-1"  id="tab-1" tabindex="0"  class="tab-btn active">Details</button>
                    <button role="tab" aria-selected="false" aria-controls="tab-panel-2" id="tab-2" tabindex="-1" class="tab-btn ">Specifications</button>
                    <button role="tab" aria-selected="false" aria-controls="tab-panel-3" id="tab-3" tabindex="-1" class="tab-btn ">Ratings</button>         
                </div>
                <div class="tab-panel-wrapper">
                    <div class="infopanel" role="tabpanel" id="tab-panel-1"  tabindex="0" aria-labelledby="tab-1">
                        <h4 class="card-title"><?php echo $product['product_name'];?></h4>
                        <p class="card-desc"><?php echo $product['product_description'];?></p>
                    </div>
                    <div class="infopanel" role="tabpanel" id="tab-panel-2"  tabindex="0" aria-labelledby="tab-2" hidden>
                        <h4 class="card-title"><?php echo $product['product_name'];?> 2</h4>
                    </div>
                    <div class="infopanel" role="tabpanel" id="tab-panel-3"  tabindex="0" aria-labelledby="tab-3" hidden>
                        <h4 class="card-title"><?php echo $product['product_name'];?></h4>3
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
  }?>
</div>