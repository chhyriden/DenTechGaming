<?php

    class employees
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "root";
        private $database   = "php_curd";
        public  $con;


        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->con;
            }
        }

        // Insert customer data into customer table
        public function insertData($post)
        {
            $last_name = $this->con->real_escape_string($_POST['last_name']);
            $gender = $this->con->real_escape_string($_POST['gender']);
            $hire_date = $this->con->real_escape_string($_POST['hire_date']);
            $query = "INSERT INTO employees(emp_no,birth_date,first_name,last_name,gender,hire_date,) VALUES('$emp_no','$birth_date','$first_name','$last_name','$gender','$hire_date',)";
            $sql   = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg1=insert");
            }else{
                echo "Registration failed try again!";
            }
        }
    }
?>
