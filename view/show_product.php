<?php
include 'connect_manage.php';


$sql = "SELECT * FROM hanghoa ";

$result = mysqli_query($conn, $sql);
$dir ='../assets/img/';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    
    <title>Danh sách sản phẩm</title>
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
.image{
    height: 188px;
    width: 194px;
}


</style>
<body>
    <div class="wrapper_content">
        <h1>Danh sách sản phẩm</h1>
        <a href="upload_file.php"><h3 >upload sản phẩm mới</h3></a>
        <table border="2px" class="tb" >
            <tr  style="background-color:blue">
                <td>MSHH</td>
                <td>Tên hàng hóa</td>
                <td>Đơn giá</td>
                <td>Số lượng hàng hóa</td>
                <td>Mã nhóm</td>
                <td>ảnh sản phẩm</td>
                <td>Mô tã sản phẩm</td>
                <td>Xóa</td> 
            </tr>
             <?php
             while ($data = mysqli_fetch_array($result)){

                $hinh =  $data['Hinh'];
                $destination = $dir.$hinh ;
               
               
               
                 ?>

            <tr>
                <td> <?php  echo "$data[MSHH]";?></td>
                <td> <?php echo "$data[TenHH]"  ;?> </td>
                <td> <?php echo "$data[Gia]"  ;?> </td>
                <td> <?php echo "$data[SoLuongHang]"  ;?> </td>
                <td> <?php echo "$data[MaNhom]"  ;?> </td>
                <td class = "image" ><img src=" <?php echo $destination  ?> " ></td>
                
                <td> <?php echo "$data[MoTaHH]"  ;?> </td>

               
                <td><a href="delete_product.php?MSHH=<?php echo $data['MSHH']; ?>" class="delete">xóa</a></td>
            </tr>
           

       <?php } ?> 
        </table>




    </div>

</body>
</html>