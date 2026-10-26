<?php
class UserModel {
    private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("127.0.0.1", "root", "", "db_mvclogin", "3307");
    }
    
    public function checkLogin($email, $password) {
        $email = mysqli_real_escape_string($this->conn, $email);
        $password = mysqli_real_escape_string($this->conn, $password);
        
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->conn, $query);
        
        return mysqli_fetch_assoc($result);
    }
}
?>