<?php
$categories = $DB->sql_SelectAll('categories');

?>
<div class="sidebar" id="sidebar">
    <ul class="category-list">
        <?php foreach($categories as $category =>$category_data){ ?>
        <li class="category-item">
        <?php 
        echo 
        "<button 
        class=\"category-btn\"
        data-toggle=\"collapse\"  
        aria-expanded=\"false\" 
        aria-controls=\"subcat-list\"
        value=".$category_data['category_id']." 
        aria-label=\"Toggle subcategories navigation\"
        href=\"#subcats-".$category_data['category_id']."\" 
        data-target=\"#subcats-".$category_data['category_id']."\">
            ".$category_data['category_name']. " &nbsp;&nbsp;<i class=\"fa fa-chevron-right\"></i>
        </button>";
        $cat_id = $category_data['category_id'];
        $subcategories = $DB->sql_SelectSubcategory('subcategories', $cat_id);
        ?>
            <ul class="subcat-list" id="subcats-<?php echo $category_data['category_id'] ?>">
                <?php echo "<form action=\"\" method=\"post\" id=\"catform\">";
                    foreach($subcategories as $subcategory =>$subcategory_data){ 
                        echo 
                        "<li class=\"subcat-item\">
                            <button method=\"post\"
                            class=\"subcat-btn\" 
                            name=\"subcategory\"
                            value=".$subcategory_data['subcategory_id'].">
                                ".$subcategory_data['subcategory_name']."
                            </button>
                        </li>";
                    }
                    echo "</form>";
                ?>
            </ul>
        </li>
        <?php }?>
    </ul>
</div>