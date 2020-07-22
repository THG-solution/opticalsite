<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->conn))
            return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'products')
    {
        $result = $this->db->conn->query("SELECT * FROM {$table}");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

}

?>