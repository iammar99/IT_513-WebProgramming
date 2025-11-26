<?php

class Database
{
    private $host = "localhost";
    private $db_name = "webdev";
    private $username = "root";
    private $password = "p2184911";
    private $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            echo "Error Occurs: " . $e->getMessage();
        }

        return $this->conn;
    }
}

?>
