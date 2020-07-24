<?php

class Table
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->conn))
            return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table)
    {
        $result = $this->db->conn->query("SELECT * FROM {$table}");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetching  products table data of specific product id 
    public function getProductData($id)
    {
        $result = $this->db->conn->query("SELECT * FROM products WHERE product_id = '$id'");
        
        $result=mysqli_fetch_array($result, MYSQLI_ASSOC);
        // $resultArray = array();

        // while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        // {
        //     $resultArray[] = $item;
        // }

        return $result;
    }
    
    // function which execute any query passes to it
    public function queryData($query)
    {
        $result = $this->db->conn->query($query);
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }


}

?>