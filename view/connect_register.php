<?php
//connect 
$host ="localhost";
$dbusername ="root";
$dbpassword = "";
$dbname ="form_register";
$conn = new mysqli($host, $dbusername,$dbpassword,$dbname);
//check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="insert info_user(email,password) values(
    ".
    
    "'".$_POST["email"]."'," .
    "'".$_POST["password"]. "',".


$result = mysql_query($sql,$conn)
or die("khong the them du lieu");
echo $sql."success!";
echo"many thanks!";


?>