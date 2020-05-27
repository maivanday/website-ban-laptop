<?php
include 'connect_manage.php';
if(isset($_POST['nhap_kh'])){
    $mskh = $_POST['mskh'];
    $htkh = $_POST['htkh'];
    $dc = $_POST['dc'];
    $sdt = $_POST['sdt'];
    

    

    $sql="INSERT INTO khachhang(MSKH,HoTenKH,DiaChi,SoDienThoai) values('$mskh', '$htkh','$dc','$sdt')";
    if ($conn->query($sql)) {
            echo '<script language="javascript">alert("thêm thành công !");window.location="khach_hang.php";</script>';
          exit;
        }
         else {
          
            echo '<script language="javascript">alert("tên khách hàng đã tồn tại !");window.location="Khach_hang.php";</script>';
            
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
    <title>Thông tin khách hàng</title>
</head>
<body>
    <div class="wrapper_content">
        <div class="">
                 <form  action="Khach_hang.php" method="POST"  >
                         <h3>      NHẬP THÔNG TIN CÁ NHÂN</h3>
                         <label for="MSKH"> MSKH</label>
                        <input id="MSKH" type="text" name="mskh" placeholder="nhập 'kh' cộng thêm 3 số cuối điện thoại"> <br>
        
                        <label  for="HTKH"> Họ tên:  </label>
                        <input id="HTKH" type="text" name="htkh" placeholder="nhập họ tên"> <br>

                        <label  for="DC"> Địa chỉ:  </label>
                        <input id="DC" type="text" name="dc" placeholder="nhập địa chỉ"> <br>

                        <label  for="SDT"> SDT: </label>
                        <input id="SDT" type="text" name="sdt" placeholder="nhập số điện thoại"> <br>
                        
                             
                        <input type="submit"  name="nhap_kh" value="thêm"></input>
                        <a href="">Trở về</a>                                         
                </form>
         </div>


    </div>
</body>
</html>