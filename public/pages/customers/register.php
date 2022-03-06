<?php 
    $hostname = getenv('HTTP_HOST');
    echo $hostname.'</br>';

    $tableName = 'products';
    $sql_query = "SHOW COLUMNS FROM ".$tableName;
    $table_result = $db_con->query($sql_query);

    // get db fields
    $fields = array();
    if($table_result ->num_rows > 0) {
        while($table_col = $table_result ->fetch_assoc()){
            $fields[] = $table_col['Field'];
        }
        foreach ($fields as $field => $fieldname) { 
            echo "Field: ".$field. "field name: ".$fieldname."</br>"; 
        }
    }
    // create user
    if (empty($_POST['fname'])) {
        echo "<h1>Please input fname</h1>";
    }else {
        $sql="insert into studentsinfo (".implode(', ', $fields).")
        values('$fname', '$lname', '$groupid', '$city')";
        if($db_con->query($sql) === TRUE) {
            echo "New record added";
            echo "<a href='update.php' class='top'>Home </a>";
        }else{
            echo "ERROR: " .$sql. "<br>" . $db_con->error;
        }
        $db_con->close();
    }
?>