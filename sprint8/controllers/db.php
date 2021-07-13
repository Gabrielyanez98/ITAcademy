<?php

    class Connection {
        private $host;
        private $username;
        private $password;
        private $dbName;

        function __construct(){
            $this->host = 'localhost';
            $this->username = 'root';
            $this-> password = '';
            $this-> dbname = 'php_m8';
        }

        function create() {
            $connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            return $connection;
        }

        function close($connection){
            $connection->close();
        }
    }

?>