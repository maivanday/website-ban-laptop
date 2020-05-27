
<?php
include 'connect_manage.php';
session_start();
if (isset($_POST['dangnhap_admin']))
{


    $username =$_POST['username'];
    $password = $_POST['password'];
    
   $sql= (" SELECT * FROM register_account_admin WHERE username='$username' AND password= '$password'");
   $result=$conn->query($sql);
   
    if ($result->num_rows == 0){
       
      
         echo '<script language="javascript">alert("Tài khoản hoặc mật khẩu không chính xác !");window.location="register_admin.php";</script>';
        exit;
    }
    
     $_SESSION['username'] = $username;
     echo '<script language="javascript">alert("Đăng nhập thành công");window.location="admin.html";</script>';
     
    die();



}?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <title>register admin</title>
</head>
<style>
    .wrapper_content{
        margin-top:12px;
    }
    .style_register_ad{
        line-height: 35px;
    }
</style>
<body>
    <div class="wrapper_content">
        <div class="form_register_ad" style="text-align: center;">
            <form  id =register action="" method="POST"  >
                <h3>ĐĂNG NHẬP TÀI KHOẢN ADMIN</h3>
                <label class="style_register_ad" for="username"> username(*) </label>
                <input id="username" type="text" name="username" placeholder="nhập tên tài khoản"> <br>

                <label class="style_register_ad" for="pass"> Password(*) </label>
                <input id="password " type="password" name="password" placeholder="nhập mật khẩu"> <br>
         
                
                <input type="submit" style="padding: 11px 40px; color: #000000;background-color: teal;margin-top: 12px;" name="dangnhap_admin" value="login"></input>
                
                <a style="padding: 11px 40px; color: #000000;background-color: teal;margin-top: 12px;" href="../index.html">logout</a>                                        
            </form>
        </div>
    </div>


</body>
</html>