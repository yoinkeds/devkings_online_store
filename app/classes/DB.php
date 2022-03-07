<?php

class DB {
    
    protected $DB_ServerName="db";
    protected $DB_User = "root";
    protected $DB_Pass = "password"; // password
    protected $DB_Name = "online_store";
    protected $fields = array();
    protected $_query;
    
    public function __constructor($DB_ServerName,$DB_User,$DB_Pass, $DB_Name){
        $this->$DB_ServerName = $DB_ServerName;
        $this->$DB_User = $DB_User;
        $this->$DB_Pass = $DB_Pass;
        $this->$DB_Name = $DB_Name;
    }
    
    public function db_Con(){
        $DB_server=$this->DB_ServerName;
        $DB_user=$this->DB_User;       
        $DB_pass=$this->DB_Pass;       
        $DB_databese=$this->DB_Name;
        $db_con = new mysqli($DB_server, $DB_user,$DB_pass, $DB_databese);
        if($db_con->connect_error){
             die("Something went wrong".$db_con->connect_error);
        };
        return  $db_con;
    }
   
    public function get_table_fields($tableName){
        $db_con = $this->db_Con();
        $fieldnames = array();
        $fields;
        $tables = $db_con->query("SHOW COLUMNS FROM ".$tableName);
        if($tables->num_rows < 0) {
            create_tables($tableName, $db_con);
        }elseif($tables->num_rows > 0){
            while($row = $tables->fetch_assoc()){
                $fieldnames[] = $row['Field'];
            }
            for($x = 1; $x < count($fieldnames ); $x++) {
                $fields[] =  $fieldnames[$x];
            }
        }
        return $fields;  
    }

    public function sql_SelectSubcategory($tableName, $cat_id){
        $db_con = $this->db_Con();
        $all_table_rows;// current category row
        $selectAll_query ="SELECT  * FROM $tableName WHERE parent_id = $cat_id";
        $selectAll_results = $db_con->query( $selectAll_query );
        if(!$selectAll_results){
            $all_table_rows[] = "Could not get any product"; 
            return; 
            die("Something went wrong");
        }elseif($selectAll_results->num_rows > 0) {
            while($selected_rows = $selectAll_results->fetch_assoc()){
                $all_table_rows[] = $selected_rows;
            }  
            return  $all_table_rows;
        }
    }

    public function sql_SelectAllByCategory($tableName, $cat_id){
        $db_con = $this->db_Con();
        $all_table_rows;// current category row
        $selectAll_query ="SELECT  * FROM $tableName WHERE subcategory_id =  $cat_id";
        $selectAll_results = $db_con->query( $selectAll_query );
        if(!$selectAll_results) {
            $all_table_rows[] = "Could not get any product";
            return; 
            die("Something went wrong"); 
            exit();
        }elseif($selectAll_results->num_rows > 0) {
            while($selected_rows = $selectAll_results->fetch_assoc()){
                $all_table_rows[] = $selected_rows;
            } 
            return  $all_table_rows;
        }
    }

    public function sql_SelectAll($tableName){
        $db_con = $this->db_Con();
        $all_table_rows;// current category row
        $selectAll_query ="SELECT  * FROM $tableName";
        $selectAll_results = $db_con->query( $selectAll_query );
        if(!$selectAll_results){
            $all_table_rows[] = "Could not get any product";
            return; 
            die("Something went wrong");
            exit();
        }elseif($selectAll_results->num_rows > 0) {
            while($selected_rows = $selectAll_results->fetch_assoc()){
                $all_table_rows[] = $selected_rows;
            }  
            return  $all_table_rows;
        }
    }
    // Products functions
    public function sql_SelectOnSales($tableName){
        $db_con = $this->db_Con();
        $onSales = "sales";
        $all_table_rows;// current category row
        $selectAll_query ="SELECT  * FROM $tableName WHERE p_status = $onSales";
        $selectAll_results = $db_con->query( $selectAll_query );
        if(!$selectAll_results){
            $all_table_rows[] = "Could not get any product";
            return; 
            die("Something went wrong");
            exit();
        }elseif($selectAll_results->num_rows > 0) {
            while($selected_rows = $selectAll_results->fetch_assoc()){
                $all_table_rows[] = $selected_rows;
            }  
            return  $all_table_rows;
        }
    }
    // select single item from table (Table name and the array Where What= What)
    public function sql_SelectOneProduct($tableName, $_id){
        $db_con = $this->db_Con();
        $all_table_rows;// current category row
        $selectAll_query ="SELECT  * FROM $tableName WHERE product_id = $_id";
        $selectAll_results = $db_con->query( $selectAll_query );
        if(!$selectAll_results){
            $all_table_rows[] = "Could not get any product";
            return; 
            die("Something went wrong");
            exit();
        }elseif($selectAll_results->num_rows > 0) {
            while($selected_rows = $selectAll_results->fetch_assoc()){
                $all_table_rows[] = $selected_rows;
            }  
            return  $all_table_rows;
        }
    }

    // Create an 
};

/*
    public function create_tables($tableName, $db_con, $t_sch){
        $table_sql = "CREATE TABLE ".$tableName.$t_sch."";
        if($db_con->query($table_sql)===TRUE){
            echo $tableName." Table successfully created";
        }
    }
    */