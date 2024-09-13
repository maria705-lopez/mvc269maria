<?php
require_once "Model/users_model.php";

class users_controller
{
    function __construct()
    {

        $this->obj = new template();
    }
    public function main()
    {
        if (!isset($_SESSION["id"]))
            header("location:/mvc269");
        $this->obj->users = users_model::all();
        $this->obj->loadPage("users/main");
    }
    public function frmRegistrar()
    {

        $this->obj->loadPage("users/frmRegistrar", true);
    }
    public function Register()
    {

        $data["name"] = $_POST["name"];
        $data["apellido"] = $_POST["apellido"];
        $data["email"] = $_POST["email"];
        $data["password"] = $_POST["password"];
        $data["name_photo"] = $_FILES["photo"]["name"];

        $file               = $_FILES["photo"]["tmp_name"];
        if (move_uploaded_file($file, './Public/image/' . $data["name_photo"])) {

            $r = users_model::add($data);
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
        $r = users_model::delete($uid);
        if ($r > 0)
            echo json_encode(array("message" => "Se elimino", "status" => 1, "icon" => "success"));
        else
            echo json_encode(array("message" => "error al  eliminar", "status" => 2, "icon" => "error"));
    }
    public function validate()
    {
        extract($_POST);
        $r = users_model::validate($nombreusu, $contrausu);

        if (is_array($r)) {
            $_SESSION["id"] = $r["us_uid"];
            $_SESSION["first_name"] = $r["us_first_name"];
            $_SESSION["last_name"] = $r["us_last_name"];
            $_SESSION["email"] = $r["us_email"];
            $_SESSION["photo"] = $r["us_photo"];

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
        $this->obj->users = users_model::searchByUID($uid);
        $this->obj->loadPage("users/frmEdit");
    }
    public function editar()
    {

        $data["name"]     = $_POST["name"];
        $data["apellido"] = $_POST["apellido"];
        $data["email"]    = $_POST["email"];
        $data["uid"]      = $_POST["uid"];
        
        if ((isset($_FILES["photo"]))){
            $data["name_photo"] = $_FILES["photo"]["name"];
            $file               = $_FILES["photo"]["tmp_name"];

            move_uploaded_file($file, './Public/image/' . $data["name_photo"]);
        }
        $r = users_model::edit($data);
        if ($r > 0)
            echo json_encode(array("message" => "Se edito", "status" => 1));
        else
            echo json_encode(array("message" => "error al  editar", "status" => 2));
    }
}
