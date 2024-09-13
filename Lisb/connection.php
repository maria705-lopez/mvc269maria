<?php
class connection{
    private static $instance = null;
    private $con;
    private $USER = "root";
    private $PASSWORD = "";
    private $SERVER = "mysql:host=localhost;dbname=dbtest;port=3306";
    function  __construct(){
        try{
            $this->con = new PDO($this->SERVER, $this->USER, $this->PASSWORD);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $x){
            echo "Error:   ".$x->getMessage();
        }
        
    }
    public static function getConnetion(){
        if (self::$instance == null)
        self::$instance = new connection();
    
        return self:: $instance->con;
    }
}

