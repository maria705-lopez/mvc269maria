<?php
require_once "Model/product_model.php";

class product_controller
{
    function __construct()
    {

        $this->obj = new template();
    }
    public function main()
    {
        if (!isset($_SESSION["id"]))
            header("location:/mvc269");
        $this->obj->product = product_model::all();
        $this->obj->loadPage("product/main");
    }
    public function frmRegistrar()
    {

        $this->obj->loadPage("product/frmRegistrar", true);
    }
    public function Register()
    {

        $data["name"] = $_POST["name"];
        $data["price"] = $_POST["price"];
        $data["Descripcion"] = $_POST["Descripcion"];
        $data["name_photo"] = $_FILES["photo"]["name"];

        $file               = $_FILES["photo"]["tmp_name"];
        if (move_uploaded_file($file, './Public/image/' . $data["name_photo"])) {

            $r = product_model::add($data);
            if ($r > 0)
                echo json_encode(array("message" => "Se registro", "status" => 1));
            else
                echo json_encode(array("message" => "error al  registrar", "status" => 1));
        }
    }
    public function delete()
    {
        if (!isset($_SESSION["id"]))
            header("location:/mvc269");
        $uid = $_GET["uid"];
        $r = product_model::delete($uid);
        if ($r > 0)
            echo json_encode(array("message" => "Se elimino", "status" => 1, "icon" => "success"));
        else
            echo json_encode(array("message" => "error al  eliminar", "status" => 2, "icon" => "error"));
    }
    public function validate()
    {
        extract($_POST);
        $r = product_model::validate($nombrepro, $contrapro);

        if (is_array($r)) {
            $_SESSION["id"] = $r["pro_uid"];
            $_SESSION["pro_nombre"] = $r["us_pro_nombre"];
            $_SESSION["pro_price"] = $r["us_pro_price"];
            $_SESSION["pro_descripcion"] = $r["us_pro_descripcion"];
            $_SESSION["photo"] = $r["pro_photo"];

            echo json_encode(array("message" => "Encontrado", "status" => 1));
        } else {
            echo json_encode(array("message" => "Datos Incorrectos", "status" => 2));
        }
    }
    public function logout()
    {
        session_destroy();
        header("location:/mvc269");
    }
    public function frmEdit()
    {
        if (!isset($_SESSION["id"]))
            header("location:/mvc269");
        $uid             = $_GET["uid"];
        $this->obj->product = product_model::searchByUID($uid);
        $this->obj->loadPage("product/frmEdit");
    }
    public function editar()
    {

        $data["name"]     = $_POST["name"];
        $data["price"] = $_POST["price"];
        $data["Descripcion"]    = $_POST["Descripcion"];
        $data["uid"]      = $_POST["uid"];
        
        if ((isset($_FILES["photo"]))){
            $data["name_photo"] = $_FILES["photo"]["name"];
            $file               = $_FILES["photo"]["tmp_name"];

            move_uploaded_file($file, './Public/image/' . $data["name_photo"]);
        }
        $r = product_model::edit($data);
        if ($r > 0)
            echo json_encode(array("message" => "Se edito", "status" => 1));
        else
            echo json_encode(array("message" => "error al  editar", "status" => 2));
    }
}
