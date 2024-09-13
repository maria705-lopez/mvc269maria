<?php
class home_controller{

    function __construct(){
       $this -> obj = new Template();
    }
    public function login(){
        $this -> obj->loadPage("home/login", true);
    }
    public function main(){
        if(!isset($_SESSION["id"]))
        header("location:/mvc269");
        $this -> obj->loadPage("home/main");

    }
   
  
}
