<?php 
    $hostname = getenv('HTTP_HOST');
    echo $hostname.'</br>';

    $tableName = 'products';
    $sql_query = "SHOW COLUMNS FROM ".$tableName;
    $table_result = $db_con->query($sql_query);
    $fields = array();
    if($table_result ->num_rows > 0) {
        while($table_col = $table_result ->fetch_assoc()){
            $fields[] = $table_col['Field'];
        }
        foreach ($fields as $field => $fieldname) { 
            echo "Field: ".$field. "field name: ".$fieldname."</br>"; 
        }
    }
?>
