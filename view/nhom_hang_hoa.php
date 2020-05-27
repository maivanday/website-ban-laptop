<?php
include 'connect_manage.php';
if(isset($_POST['nhap_mn'])){
    $manhom= $_POST['manhom'];
    $tennhom= $_POST['tennhom'];
    

    $sql="INSERT INTO nhomhanghoa(MaNhom,TenNhom) values('$manhom', '$tennhom')";
    if ($conn->query($sql)) {
            echo '<script language="javascript">alert("thêm thành công !");window.location="nhomhanghoa.php";</script>';
          exit;
        }
         else {
          
            echo '<script language="javascript">alert("tên đăng ký đã tồn tại !");window.location="nhomhanghoa.php";</script>';
            
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
    <title>Them nhom hang hoa</title>
</head>
<body>
    <div class="wrapper_content">
        <div class="">
                 <form  action="nhom_hang_hoa.php" method="POST"  >
                         <h3>THÊM NHÓM HÀNG HÓA</h3>
                         <label for="MN"> Mã Nhóm</label>
                        <input id="MN" type="text" name="manhom" placeholder="nhập mã nhóm hàng hóa"> <br>
        
                        <label  for="TN"> Tên nhóm </label>
                        <input id="TN" type="text" name="tennhom" placeholder="nhập tên nhóm"> <br>
                             
                        <input type="submit"  name="nhap_mn" value="thêm"></input>
                        <a href="">Trở về</a>                                         
                </form>
         </div>


    </div>
</body>
</html>