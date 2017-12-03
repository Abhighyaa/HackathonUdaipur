<?php

class DbConnect {

    private $conn;

    function __construct() {
        $this->connect();
    }


    function connect() {
        include_once 'config.php';

        // Connecting to mysql database
        $this->conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // returing connection resource
        return $this->conn;
    }

}

?>