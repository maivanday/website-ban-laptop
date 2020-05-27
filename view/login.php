
<?php
include 'connect_manage.php';
session_start();
if (isset($_POST['dangnhap']))
{


    $username =$_POST['email'];
    $password = $_POST['password'];
    
   $sql= (" SELECT * FROM register_account WHERE username='$username' AND password= '$password'");
   $result=$conn->query($sql);
   
    if ($result->num_rows == 0){
       
      
         echo '<script language="javascript">alert("Tài khoản hoặc mật khẩu không chính xác !");window.location="register.php";</script>';
        exit;
    }
    
     $_SESSION['username'] = $username;
     echo '<script language="javascript">alert("Đăng nhập thành công");window.location="custom.php";</script>';
     
    die();



}?>
