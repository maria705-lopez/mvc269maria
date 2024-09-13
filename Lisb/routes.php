<?php
class Routes{
    public static function loadContent($controller, $action){
        $folder = "Controller";
        if(file_exists($folder."/".$controller."_controller.php")){
            require_once $folder."/".$controller."_controller.php";
            $clase = $controller."_controller";
            $obj = new $clase();
            if(method_exists($obj,$action)){
                $obj -> $action();
            }else{
                echo "<br> Ese metodo $action no existe";
            }
              
        }else{
            echo "<br> Ese controlador $controller no existe";
        }
    }
}
