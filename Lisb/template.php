<?php
class Template{
    public function loadPage($content,$hasHeaderFooter=false){
        if($hasHeaderFooter == false){
            require_once "View/header.php";
            require_once "View/$content.php";
            require_once "View/footer.php";
        }else{
            require_once "View/$content.php";
        }
           
     }
}