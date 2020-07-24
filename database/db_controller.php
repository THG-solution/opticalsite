<?php

class DBController 
{
    // Database Connection Property
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'optics_ecommerce';

    // Connection Property
    public $conn = null;

    // Defining Constructor
    public function __construct(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->conn->connect_error)
        {
            echo "Fail to Connect ".$this->conn->connect_error;
        }
    }

    // Defining Destructor
    public function __destruct(){
        $this->closeConnection();
    }

    protected function closeConnection(){
        if($this->conn != null)
        {
            $this->conn->close();
            $this->conn= null;               
        }
    }
}

?>
