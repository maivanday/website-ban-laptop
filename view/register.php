
<?php
include 'connect_manage.php';
if(isset($_POST['dangky'])){
    $username = $_POST['email'];
    $password = $_POST['password'];
    

    $sql="INSERT INTO register_account(username,password) values('$username', '$password')";
    if ($conn->query($sql)) {
            echo '<script language="javascript">alert("Đăng ký thành công !");window.location="register.php";</script>';
          exit;
        }
         else {
          
            echo '<script language="javascript">alert("tên đăng ký đã tồn tại !");window.location="register.php";</script>';
            
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
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.12.1-web/css/all.min.css">
    
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <title>form đăng ký</title>
</head>
<body>
    
    
    <div class="wrapper">
        <!-- begin header -->
        <div class="header">
            <div class="wrapper_content">
               <div class="nav_menu">
                   <div class="col-4">
                       <img src="../assets/img/log1.jpg" alt="">

                   </div>
                   <div class="col-8">
                       <div class="main_menu">
                           <ul>
                               <li>
                                   <a href="#">
                                        Shop
                                        <i class="fas fa-chevron-down"></i>
                                       
                                    </a>
                                    <ul class="sub_menu">
                                        <li class=""> <a href="">Smartphone</a>
                                            <ul class="child_menu">
                                                <li ><a href="">SamSung</a></li>
                                                <li ><a href="">Apple</a></li>
                                                <li ><a href="">LG</a></li>
                                                <li ><a href="">Xiaomi</a></li>
                                                <li ><a href="">Vsmart</a></li>
                                                <li ><a href="">Nokia</a></li>
                                                <li ><a href="">Huawei</a></li>
                                               

                                                
                                            </ul>
                                        </li>
                                        <!-- --------------- -->
                                        <li><a href="">Smartwatch</a>
                                            <ul class="child_menu">
                                                <li ><a href="">SamSung Watch</a></li>
                                                <li ><a href="">Apple Watch</a></li>
                                                <li ><a href="">Xiaomi Watch</a></li>
                                                <li ><a href="">Huawei Watch</a></li>
                                                

                                                
                                            </ul>
                                        </li>
                                        <!-- ---------- -->
                                        <li><a href="">Laptop</a>
                                            <ul class="child_menu">
                                                <li ><a href="">MacBook</a></li>
                                                <li ><a href="">Dell</a></li>
                                                <li ><a href="">Asus</a></li>
                                                <li ><a href="">lenovo</a></li>
                                                <li ><a href="">HP</a></li>
                                                

                                                
                                            </ul>
                                        
                                        </li>
                                        <!-- ------------ -->
                                        <li><a href=""> Tablet</a>
                                            <ul class="child_menu">
                                                <li ><a href="">SamSung</a></li>
                                                <li ><a href="">iPad</a></li>
                                                <li ><a href="">Huawei</a></li>
                                                <li ><a href="">Lenovo</a></li>
                                                <li ><a href="">Mobel</a></li>
                                                

                                                
                                            </ul>
                                        
                                        </li>
                                        <!-- --------------- -->
                                        <li><a href="">Phụ Kiện</a>
                                            <ul class="child_menu">
                                                <li ><a href=""> Phụ kiện SamSung</a></li>
                                                <li ><a href="">Phụ kiện Apple</a></li>
                                                <li ><a href="">Phụ kiện LG</a></li>
                                                <li ><a href="">Phụ kiện đồng hồ</a></li>
                                                
                                                
                                            </ul></li>
                                        
                                    </ul>
                               </li>
                               <li>
                                   <a href="#">
                                        Khuyến mãi
                                         <i class="fas fa-chevron-down"></i>
                                      
                                    </a>
                                    <ul class="sub_menu">
                                        <!-- <li><a href="">Mã giảm giá</a></li> -->
                                    
                                        
                                    </ul>
                                </li>
                               <li>
                                   <!-- <a href="#">
                                         Tin công nghệ
                                         <i class="fas fa-chevron-down"></i>
                                         
                                    </a> -->
                                    <form action="" class="search">
                                        <input type="text " placeholder="Nhập tên sản phẩm">
                                        <button>
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </li>
                               <li >
                                   <a href="../index.html">
                                        <i class="fas fa-user-alt"></i>
                                     </a>
                                                
                                    
                                <!-- thong bao -->
                               <li >
                                   
                                    <a href="">
                                       
                                        <i class="fas fa-bell"></i>

                                    </a>
                                
                                    <ul class="notify">
                                        <li> <h3>Thông báo mới nhận</h3>  </li>
                                       
                                        
                                        
                                         <!-- --------------- -->
                                         <li>
                                             <a href="" class="notify-link">
                                                 <img src="https://newtechshop.vn/wp-content/uploads/2019/10/watch-active-2-44mm-2-247x247.jpg" alt="" class="notify-img">
                                                 <div class="notify-info">
                                                     <span class="notify-name">Đồng hồ chính hãng</span>
                                                     <span class="notify-description"> Mô tả sản phẩm</span>
                                                 </div>
                                             </a> 
                                         </li>
                                         <!-- ---------- -->
                                         <li>
                                             <a href="" class="notify-link">
                                                 <img src="https://newtechshop.vn/wp-content/uploads/2019/10/watch-active-2-44mm-11.jpg" alt="" class="notify-img">
                                                 <div class="notify-info">
                                                     <span class="notify-name">Đồng hồ chính hãng</span>
                                                     <span class="notify-description"> Mô tả sản phẩm</span>
                                                 </div>
                                             </a> 
                                         </li>
                                         <!-- ------------ -->
                                         <li>
                                             <a href="" class="notify-link">
                                                 <img src="https://newtechshop.vn/wp-content/uploads/2019/08/note10-1.jpg" alt="" class="notify-img">
                                                 <div class="notify-info">
                                                     <span class="notify-name">Đồng hồ chính hãng</span>
                                                     <span class="notify-description"> Mô tả sản phẩm</span>
                                                 </div>
                                             </a> 
                                          </li>
                                         <!-- --------------- --> 
                                         <li>
                                             <a href="" class="notify-link">
                                                 <img src="https://newtechshop.vn/wp-content/uploads/2019/08/note10-1.jpg" alt="" class="notify-img">
                                                 <div class="notify-info">
                                                     <span class="notify-name">Đồng hồ chính hãng</span>
                                                     <span class="notify-description"> Mô tả sản phẩm
                                                         sản phẩm chính hãng của samsugn với cát tính năng vượt trội 
                                                         nhìn trẻ trung mạnh mể với thiết iế tinh tế
                                                         bền
                                                     </span>
                                                 </div>
                                             </a> 
                                         </li>
                                         <li>
                                             <footer class="notify-footer">
                                                <a href="">Xem tất cả </a>
                                             </footer>
                                            
                                         </li>
                                    
                                     </ul>
                                  
                                   
                               </li>

                                    
                                <!-- -------------- -->
                               <li>
                                   <a href="">
                                        <i class=" header__cart-icon fas fa-shopping-cart"></i>

                                    </a>
                                </li>
                           
                                
                            </ul>
                       </div>

                   </div>
               </div>
            </div>
            <!-- -------- -->


        </div>

        <!-- end header -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- begin content -->
        <div class="modal_layout">
            <div class="modal_over"></div>
            <div class="modal_content">
                <div class="auth-form">
                    <div class="wrapper_content">
                        <div class="col-6">
                            <div class="form_register">
                                <form  id =register action="register.php" method="POST" onsubmit='return check_register()' >
                                    <h3>ĐĂNG KÝ</h3>
                                    <label class="style_register" for="email"> Email(*) </label>
                                    <input id="email" type="email" name="email" placeholder="nhập email"> <br>
        
                                    <label class="style_register" for="pass"> Password(*) </label>
                                    <input id="password " type="password" name="password" placeholder="nhập mật khẩu"> <br>
                             
                                    <label  class="style_register" for="pass_1">  Nhập lại password(*)</label>
                                    <input id="password_1 " type="password" name="pass_1" placeholder="nhập lại mật khẩu">  <br>
                                    
                                    <input type="submit" style="padding: 11px 40px; color: #000000;background-color: teal;margin-top: 12px;" name="dangky" value="Đăng ký"></input>
                                    <a href="../index.html">Trở về</a>                                         
                                </form>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form_login">
                                <form  id =login action="login.php" method ="POSt" onsubmit = 'return check_login()' >
                                    <h3>ĐĂNG NHẬP</h3>
                                    <label class="style_register" for="email"> Email(*) </label>
                                    <input id="login_email" type="email" name="email" placeholder="nhập email"> <br>
                             
                                    <label class="style_register" for="password"> Password(*) </label>
                                    <input id="login_password " type="password" name="password" placeholder="nhập mật khẩu"> <br>

                                    <input type="checkbox" >Ghi nhớ đăng nhập<br>
                                    

                                    <input type="submit" style="padding: 11px 40px;  color: #000000;background-color: teal;margin-top: 12px"name="dangnhap"  value = "Đăng nhập"></input>
                                    <a href="">Quên mật khẩu</a>
                                </form>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        
        <!-- end content -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- begin footer -->
        <div class="footer">

        </div>
        <!-- end footer -->
    </div>
    <!-- script javascript -->
    <script>
     
 function check_register() {
   var email = document.forms["register"]["email"].value;
   var pass = document.forms["register"]["password"].value;
   var pass_1 =document.forms["register"]["pass_1"].value;
   var dk = false;

  // check email 
  if(email == "") {
    alert("Email không được để trống");
         return dk = false;
  }
   
   
   //check pass
   if(pass == "") {
    alert("Mật khẩu không được để trống");
        return dk = false;
    }       else if (pass.length <8 || pass.length >16){
                alert("Mật khẩu phải có ít nhất 8 ký tự và nhiều nhất 16 ký tự")
                    return dk = false;
        
                } else if(pass===email){
                    alert("Mật khẩu không được chứa tên đăng nhập ")
                        return dk = false;
   }
   // check password again
   if(pass_1 == "") {
     alert("Phải nhập lại password, không được để trống")
        return dk = false;
         } else if (pass_1 !=pass){
             alert("Nhập lại mật khẩu cho chính xác")
                return dk = false;
   }

   return dk = true;

  
    }

    // check login-------------------------------------------------------------------//
    function check_login() {
   var email = document.forms["login"]["email"].value;
   var pass = document.forms["login"]["password"].value;
   
   var dk = false;

  // check email 
  if(email == "") {
    alert("Email không được để trống");
         return dk = false;
  }
   
   
   //check pass
   if(pass == "") {

    alert("Mật khẩu không được để trống");
        return dk = false;
    }       else if (pass.length <8 || pass.length >16){
                alert("Mật khẩu phải có ít nhất 8 ký tự và nhiều nhất 16 ký tự")
                    return dk = false;
        
                } else if(pass===email){
                    alert("Mật khẩu không được chứa tên đăng nhập")
                        return dk = false;
   }
  
   return dk = true;
  
    }

</script>
</body>
</html>