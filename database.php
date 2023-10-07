<?php

class Database {
    // database connection
    private $connection;
    function __construct(){
        $this ->connect_db();
    }
    // credentials
    public function connect_db(){
        $this->connection = mysqli_connect('172.31.22.43', 'Mohamed200550033', 'PJmsUCyqSG','Mohamed200550033');
        if(mysqli_connect_error()){
            die("Database connection failed" . mysqli_connect_error());
        }
    }
    //performing sql operations based on data received from the form
    public function create($first_name, $last_name, $email, $address, $phone, $pizza, $topping, $size, $message){

        $sql = "insert into pizzaOrders (first_name, last_name, email, address, phone, pizza, topping, size, message) VALUES ('$first_name', '$last_name', '$email', '$address', '$phone', '$pizza', '$topping', '$size', '$message')";
        $res = mysqli_query($this->connection, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
$database = new Database();
?>