<?php
class product_model
{
    public static function add($data)
    {
        $con = connection::getConnetion();
        $query = "INSERT INTO t_producto(pro_uid, pro_nombre,pro_precio,pro_descripcion, pro_photo) VALUES (? , ? , ? , ?, ? )";

        $s = $con->prepare($query);
        $v = array(
            uniqid(),
            $data["name"],
            $data["price"],
            $data["Descripcion"],
            $data["name_photo"]
        );
        return $s->execute($v);
    }

    public static function all()
    {
        $con = connection::getConnetion();
        $query = "SELECT * FROM t_producto";
        $s = $con->prepare($query);
        $s->execute();
        return $s->fetchAll();
    }

    public static function delete($id)
    {
        $con = connection::getConnetion();
        $query = "DELETE FROM t_producto WHERE pro_uid = '$id'";
        $s = $con->prepare($query);
        return $s->execute();
    }


    // public static function validate($nombreusu, $contrausu)
    // {
    //     $con = connection::getConnetion();
    //     $query = "SELECT pro_uid, pro_nombre,pro_precio,pro_descripcion, pro_photo
    //     FROM t_producto WHERE us_email = ? AND us_password = ? ";
    //     $s = $con->prepare($query);
    //     $v = array($nombreusu, sha1($contrausu));
    //     $s->execute($v);
    //     return $s->fetch();
    // }
    public static function searchByUID($uid)
    {
        $con = connection::getConnetion();
        $query = "SELECT * FROM t_producto WHERE pro_uid = '$uid'";
        $s = $con->prepare($query);
        $s->execute();
        return $s->fetch();
    }

    public static function edit($data){
     $con = connection::getConnetion();
    
     $campo = isset($data["name_photo"]) ? ", pro_photo = ?" : "";
    
     
     $query = "UPDATE t_producto SET 
              pro_nombre = ?,
              pro_precio = ?, 
              pro_descripcion = ?"
              . $campo . 
              " WHERE pro_uid = ?";
    
     $s = $con->prepare($query);
    
     if (isset($data["name_photo"])) {
        $v = array($data["name"], $data["price"], $data["Descripcion"], $data["name_photo"], $data["uid"]);
     } else {
        $v = array($data["name"], $data["price"], $data["Descripcion"], $data["uid"]);
     }
     return $s->execute($v);
     }
}
