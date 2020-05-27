<?php
include 'connect_manage.php';
$MSHH = $_GET['MSHH'];

    $sql = "DELETE FROM hanghoa WHERE MSHH = '$MSHH'";
    


if ($conn->query($sql)) {
     echo '<script language="javascript">alert("Xóa thành thành công !");window.location="show_product.php";</script>';
   
  exit;
}
 else {
  echo '<script language="javascript">alert("Xóa thành thành công !");window.location="show_product.php";</script>';
   
    
}

$conn->close();

die();

?>
