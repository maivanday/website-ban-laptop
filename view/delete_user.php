<?php
include 'connect_manage.php';
$username = $_GET['username'];

    $sql = "DELETE FROM register_account WHERE username = '$username'";
    


if ($conn->query($sql)) {
     echo '<script language="javascript">alert("Xóa thành thành công !");window.location="show_register.php";</script>';
   
  exit;
}
 else {
  echo '<script language="javascript">alert("Xóa thành thành công !");window.location="show_register.php";</script>';
   
    
}

$conn->close();

die();

?>
