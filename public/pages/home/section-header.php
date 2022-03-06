<div class="section-header">
    <?php
    if(isset($_POST['category'])){
        $selected_cat = $_POST['category'];
        $sql_query = "SELECT * FROM subcategories WHERE subcategory_id =  $selected_cat";
        $subcat_result = $db_con->query($sql_query); 
        if($subcat_result ->num_rows > 0) {
            while($rows = $subcat_result->fetch_assoc()){    
                echo "<button class=\"section-heading\">". $rows['subcategory_name']."</button>";
            }
        }
    }
    ?>
</di>