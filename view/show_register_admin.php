<?php
include 'connect_manage.php';


$sql = "SELECT * FROM register_account_admin ";

$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    
    <title>Thông tin tài khoản quản trị viên</title>
</head>
<style>
.wrapper_content{
    border: 1px solid #000000;
    text-align: center;
    
}
h3{
    color: blue; 
    padding: 3px;   
}
.tb{
   
    text-align: center;
    margin: 31px 400px;
}

</style>
<body>
    <div class="wrapper_content">
        <h1>Danh sách tài khoản quản trị viên</h1>
        <a href="../view/register_admin.php"><h3 >Tạo tài khoản mới</h3></a>
        <table border="2px" class="tb" >
            <tr  style="background-color:blue">
                <td>Username</td>
                <td>Password</td>
               
            </tr>
             <?php
             while ($data = mysqli_fetch_array($result)){
               
                 ?>

            <tr>
                <td> <?php  echo "$data[username]";?></td>
                <td> <?php echo "$data[password]"  ;?> </td>
               
            </tr>
           

       <?php } ?> 
        </table>




    </div>

</body>
</html>