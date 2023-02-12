<?php
class LoginController 
{ //đăng nhập
    public static function Log() {
include_once ROOT_DIR . '/src/views/login/login.php';
} 
    
    public static function Adre() {
        include_once ROOT_DIR . '/src/views/login/ad-re.php';
    }
    public static function Admin() {
        include_once ROOT_DIR . '/src/views/login/admin.php';
    }
    //đăng kí
    public static function Regi() {
          
    // kiểm tra đã nhập user với pass chưa
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $FirstName=$_POST['first_name'];
        $LastName=$_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword=$_POST['password_repeat'];
        //kiểm tra pass với pass nhập lại
        if ($password == $repassword) {
            $userModel = new UserModel();
            //kiểm tra xem đã tồn tại
            if($userModel->addUser($FirstName,$LastName,$email, $password)) {
               $successfully="<p style='Color:black'>Register successfully</p>";
                echo $successfully;
            }
            // 
            else {
                $failed="<p style='Color:black'>Register Failed</p>";
                echo  $failed;
            }
        }
        }
        else {
            $failed="<p style='Color:black'>wrong password</p>";
            echo $failed;
        }
        include_once ROOT_DIR . '/src/views/login/register.php';
    }
    public static function Forgot() {
        include_once ROOT_DIR . '/src/views/login/forgot-password.php';
    }

    public static function Logout() {
        session_destroy();
        include_once ROOT_DIR . '/src/views/login/login.php';
        } 
   

   
}