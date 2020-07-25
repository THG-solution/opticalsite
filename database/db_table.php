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
        
        if (mysqli_num_rows($result)>1)
        {
            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                $resultArray[] = $item;
            }
    
            return $resultArray;
        }
        $result=mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;    
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
    
    public function getProducts($query) {
        $result = $this->db->conn->query($query);        
            $resultArray = array();
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                $resultArray[] = $item;
            }
            return $resultArray;
        $result=mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }

    // function which execute any query passes to it
    public function queryData($query)
    {
        $result = $this->db->conn->query($query);
        if (mysqli_num_rows($result)>1)
        {
            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
        $result=mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }


}

?>