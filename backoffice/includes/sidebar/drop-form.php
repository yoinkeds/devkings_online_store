

        <?php
        foreach($categories_rows as $catrows){
            echo "<option  class=\"accrdion-toggle\" value=".$catrows['category_id']."
                    data-toggle=\"collapse\"  
                    data-target=\"#content-".$catrows['category_id']."\" 
                    aria-controls=\"navcollapser\" 
                    aria-expanded=\"false\" 
                    >".$catrows['category_name'];
            $thiscat_ids = $catrows['category_id'];
            // Start of Subcatagories
            $subcat_result = $db_con->query("SELECT * FROM $subcat WHERE parent_id = $thiscat_ids");
            if($subcat_result->num_rows > 0) {
                while($subrows =  $subcat_result->fetch_assoc()){
                   $subcat_rows[]= $subrows;
                    echo "<option class=\"accordion-content\" 
                        value=".$subrows['subcategory_id']." 
                        id=\"#content-".$subrows['subcategory_id']."\">".$subrows['subcategory_name']."</option>";                
                    }
                 echo "</div>";
            }
            // End of Subcatagories
        }
        ?>