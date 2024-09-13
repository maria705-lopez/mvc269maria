<?php
class users_model
{
    public static function add($data)
    {
        $con = connection::getConnetion();
        $query = "INSERT INTO t_users(us_uid, us_first_name,us_last_name,us_email,us_password,us_photo) VALUES (? , ? , ? , ? , ? , ?)";

        $s = $con->prepare($query);
        $v = array(
            uniqid(),
            $data["name"],
            $data["apellido"],
            $data["email"],
            sha1($data["password"]),
            $data["name_photo"]
        );
        return $s->execute($v);
    }

    public static function all()
    {
        $con = connection::getConnetion();
        $query = "SELECT * FROM t_users";
        $s = $con->prepare($query);
        $s->execute();
        return $s->fetchAll();
    }

    public static function delete($id)
    {
        $con = connection::getConnetion();
        $query = "DELETE FROM t_users WHERE us_uid = '$id'";
        $s = $con->prepare($query);
        return $s->execute();
    }


    public static function validate($nombreusu, $contrausu)
    {
        $con = connection::getConnetion();
        $query = "SELECT us_uid, us_first_name, us_last_name, us_photo , us_email
        FROM t_users WHERE us_email = ? AND us_password = ? ";
        $s = $con->prepare($query);
        $v = array($nombreusu, sha1($contrausu));
        $s->execute($v);
        return $s->fetch();
    }
    public static function searchByUID($uid)
    {
        $con = connection::getConnetion();
        $query = "SELECT * FROM t_users WHERE us_uid = '$uid'";
        $s = $con->prepare($query);
        $s->execute();
        return $s->fetch();
    }
    public static function edit($data)
    {
        $con = connection::getConnetion();
        $campo = isset($data["name_photo"]) ? ", us_photo = ?" : "";

        $query = "UPDATE t_users SET 
                  us_first_name = ?, 
                  us_last_name = ?, 
                  us_email = ? 
                  $campo
                  WHERE us_uid = ?";
        $s = $con->prepare($query);
        if (isset($data["name_photo"]))
            $v = array($data["name"], $data["apellido"], $data["email"],$data["name_photo"], $data["uid"]);
        else
         $v = array($data["name"], $data["apellido"], $data["email"], $data["uid"]);
         
         return $s->execute($v);
        
    }
}
