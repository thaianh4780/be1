<?php
class UserModel extends Db{
   
    // hàm login
    public function login($email, $password)
    {
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("SELECT * FROM user WHERE email=?");
        $sql->bind_param('s', $email);
        $user = parent::select($sql)[0];
        if (password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }


    // hàm đăng ký
    public function addUser($firstname,$lastname,$username, $password)
    {
        //2. Viết câu SQL
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = parent::$conection->prepare("INSERT INTO `user`(`firstname`,`lastname`,`email`, `password`) VALUES (?,?,?,?)");
        $sql->bind_param('ssss',$firstname,$lastname, $username, $password);
        return $sql->execute();
    }
}