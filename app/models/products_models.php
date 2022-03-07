<?php
/* 
    ##  PHP / HTML      Document
    ##  Document title: header
    ##  Author:         Tim Lopes
    ##  Author email    timlopes.work@gmail.com
    ##  Website:        www.timlopes.eu
    ##  Designed for:   Group project
    ##  Project:        Web Development 
    ##  Dated:          February 2022
*/
require '../app/init.php';

class Products_models{
    protected $tableName = 'products';
    protected $db_con;
    protected $tableFields;
    public function __construct(){
        $DB = new DB;
        $this->db_con = $DB->db_Con();
        $this->tableFields = $DB->get_table_fields();
    }
    public function db_Con(){
        return $this->db_con;
    }
    public function tableFields(){
        return $this->tableFields;
    }
    public function createProducts($tableName, $productData){
        $db_con = $DB->db_Con();
        $tableFields = $this->tableFields($tableName);
        
    }
}

    // selectAll
    // selectSingle (where ? = ?) params array

    // createNew (table fields)

    // updateSingle (table fields) (set to )+ (where ? = ?) params array
    // bulkUpdate

    // deleteSingle (where ? = ?) params array
    // bulkDelete
