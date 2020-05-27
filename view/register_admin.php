<?php
include 'connect_manage.php';
if(isset($_POST['dangky_admin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check_pass = $_POST['pass_1'];
    

    $sql="INSERT INTO register_account_admin(username,password) values('$username', '$password')";
    if (($conn->query($sql)) && $check_pass === $password){
            echo '<script language="javascript">alert("Đăng ký thành công !");window.location="register_admin.php";</script>';
          exit;
        }
         else {
          
            echo '<script language="javascript">alert("tên đăng ký đã tồn tại! hoặc password không đúng");window.location="register_admin.php";</script>';
            
        }
        
        $conn->close();
        
        die();

 }


?>



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
        margin-top: 12px;
    }
    .style_register_ad{
        line-height: 35px;
    }
</style>
<body>
    <div class="wrapper_content">
        <div class="form_register_ad" style="text-align: center;">
            <form  id =register action="" method="POST"  >
                <h3>CHỈ QUẢN TRỊ VIÊN MỚI ĐƯỢC QUYỀN ĐĂNG KÝ TÀI KHOẢN</h3>
                <label class="style_register_ad" for="username"> username(*) </label>
                <input id="username" type="text" name="username" placeholder="nhập tên tài khoản"> <br>

                <label class="style_register_ad" for="pass"> Password(*) </label>
                <input id="password " type="password" name="password" placeholder="nhập mật khẩu"> <br>
         
                <label  class="style_register_ad" for="pass_1">  Nhập lại password(*)</label>
                <input id="password_1 " type="password" name="pass_1" placeholder="nhập lại mật khẩu">  <br>
                
                <input type="submit" style="padding: 11px 40px; color: #000000;background-color: teal;margin-top: 12px;" name="dangky_admin" value="create"></input>
                
                <a style="padding: 11px 40px; color: #000000;background-color: teal;margin-top: 12px;" href="./login_admin.php">login</a>                                        
            </form>
        </div>
    </div>


</body>
</html>