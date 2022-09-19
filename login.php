<?php

    class [[[zg-entity...zg-name]]]
    {
        private $myservername = "localhost";
        private $username   = "root";
        private $password   = "root";
        private $database123   = "php_curd";
        public  $con;


        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->myservername, $this->username,$this->password,$this->database123);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->con;
            }
        }

        // Insert customer data into customer table
        public function insertData($post)
        {
            zg-for(((zg-item:::[[[zg-entity...zg-fields]]]))){{{
            $[[[zg-item...zg-name]]] = $this->con->real_escape_string($_POST['[[[zg-item...zg-name]]]']);}}}
            $query = "INSERT INTO [[[zg-entity...zg-name]]](zg-for(((zg-item:::[[[zg-entity...zg-fields]]]))){{{[[[zg-item...zg-name]]],}}}) VALUES(zg-for(((zg-item:::[[[zg-entity...zg-fields]]]))){{{'$[[[zg-item...zg-name]]]',}}})";
            $sql   = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg1=insert");
            }else{
                echo "Registration failed try again!";
            }
        }
    }
?>
