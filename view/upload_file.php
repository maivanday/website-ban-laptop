<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form upload file trong PHP</title>
</head>
<body>
    <?php
    include 'connect_manage.php';
    
   
        
	if(isset($_POST['upload_file'])){
        $mshh = $_POST['mshh'];
        $tenhh = $_POST['tenhh'];
        $gia = $_POST['gia'];
        $soluonghang = $_POST['soluonghang'];
        $manhom = $_POST['manhom'];
        $hinh = $_FILES['hinh']['name'];
        $motahh = $_POST['motahh'];
        
        $dir ='../assets/img/';
        $filename = $_FILES['hinh']['tmp_name'];
        
        $destination = $dir.$hinh ;
         move_uploaded_file($filename, $destination);
       
    
        $sql="INSERT INTO hanghoa(MSHH,TenHH,Gia,SoLuongHang,MaNhom,Hinh,MoTaHH) values('$mshh', '$tenhh','$gia','$soluonghang','$manhom','$hinh','$motahh')";
        if ($conn->query($sql)) {
                echo '<script language="javascript">alert("Đăng ký thành công !");window.location="show_product.php";</script>';
             exit;
            }
             else {
              
               echo '<script language="javascript">alert("tên đăng ký đã tồn tại !");window.location="upload_file.php";</script>';
                
            }
            
            $conn->close();
            
            die();
           
           
  }
 ?>
	
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <h2>Form Upload File PHP</h2>
        <label for="mshh">MSHH</label>
                <input  id ="mshh" name =" mshh"type="text">

                <label for="tenhh">TênHH</label>
                <input  id ="tenhh"  name =" tenhh" type="text"> <br>


                <label for="gia">Giá</label>
                <input  id ="gia" name =" gia"type="text">

                <label for="soluonghang">Số Lượng hàng</label> 
                <input  id ="soluonghang" name =" soluonghang"type="text"><br>
           
                <label for="manhom">Mã nhóm</label>
                <input  id ="manhom" name =" manhom"type="text">

                <label for="hinh">HÌnh</label>
                <input  id ="hinh"type="file" name="hinh">  <br>

                <label for="motahh">Mô tả hàng hóa</label>
                <textarea id="motahh" name =" motahh" cols="30" rows="10"></textarea>
       
        <input type="submit"  value="Upload file" name="upload_file">
        
    </form>
        
</body>
</html>