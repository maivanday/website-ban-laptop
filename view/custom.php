
<?php
include 'connect_manage.php';

if (isset($_POST['emai']))
{
    $username =$_POST['email'];
    echo"$username";
}?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.12.1-web/css/all.min.css">
    
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <title>khách hàng</title>
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
                                <!-- <span>
                                    <?php echo "$username"?> ;
                                </span> -->
                                     
                                                
                                    
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
        
        <div class="container">
            <div class="wrapper_content">
                <div class="grid__row">
                    <div class="col-2">
                       <div class="nav_bar">
                           <ul class="main_nav_bar">
                                <li> <h3>GIÁ SẢN PHẨM</h3   >
                                    <ul class="sub_nav_bar">
                                        <li><a href=""> Dưới 2 triệu</a></li>
                                        <li><a href=""> 2 - 5 triệu</a></li>
                                        <li><a href="">5 - 10 triệu</a></li>
                                        <li><a href=""> 10 - 15 triệu</a></li>
                                        <li><a href=""> Trên 15 triệu</a></li>
                                    </ul>
                                </li>
                                <li class="behind"><h3 >DANH MỤC</h3>
                                    <ul class="sub_nav_bar">
                                        <li><a href=""> Smartphone</a></li>
                                        <li><a href=""> Smartwatch</a></li>
                                        <li><a href="">Laptop</a></li>
                                        <li><a href=""> Tablet</a></li>
                                        <li><a href=""> Phụ Kiện</a></li>
                                    </ul>
                                </li>
                           </ul>

                       </div>
                    </div>
                    <div class="col-10">
                        
                        <ul class="derection_link">
                            <li><a href=""> Smartphone</a></li>
                            <li><a href=""> Smartwatch</a></li>
                            <li><a href="">Laptop</a></li>
                            <li><a href=""> Tablet</a></li>
                            <li><a href=""> Phụ Kiện</a></li>
                        </ul>
                          
                        <div class="main-item">
                            <!-- ------------item1 -->
                            <div class="col-2-4">
                                
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!--  -->
                            <!-- item2 -->
                            <div class="col-2-4">
                                
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item3 -->
                            <div class="col-2-4">
                               
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item4-->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item5 -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- --item6 -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- --item7 -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- --item8 -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- --item9-->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- --item10 -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item11------------------------- -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item12------------------------- -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item13------------------------- -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item14------------------------- -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            <!-- item15------------------------- -->
                            <div class="col-2-4">
                              
                                <a class="main-item_product">
                                    <div class="main-item_product_img" style="background-image: url(https://cf.shopee.vn/file/a4156834def179cd5324dee1801c9948_tn)";>

                                    </div>
                                    <h4 class="main-item_product_name">Samsung Galaxy S20 Plus – Chính Hãng SSVN </h4>
                                    <div class="main-item_product_price">
                                        <span class="price_old">20.200.000</span>
                                        <span class="price_new">19.999.000</span>
                                    </div>
                                    <div class="main-item_product_action">
                                        <span class="action_like">
                                        <i class="fas fa-heart"></i> 
                                        <!-- <i class="far fa-heart"></i> -->

                                        </span>
                                        <div class="action_rank">
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                            <i class="fas fa-star after_rank"></i>
                                        </div>
                                    </div>
                                    <div class="main-item_product_made-in">
                                        <span class="brand">SamSung</span>
                                        <span class="name_made_in">Hàn Quốc</span>
                                    </div>


                                </a>
                               
                            </div>
                            
                          
                        </div>
                        <ul class="choose_page">
                            <li class="choose_page_item choose_page_item-active ">
                                <a href="" class="choose_page_item-link">1</a>

                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">2</a>

                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">3</a>

                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">...</a>

                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">10</a>

                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">11</a>

                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">12</a>
                                
                            </li>
                            <li class="choose_page_item">
                                <a href="" class="choose_page_item-link">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                                
                            </li>
                            

                        </ul>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    
    
        <!-- end content -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- begin footer -->

        <div class="footer">

            <div class="wrapper_content">

               
                    <div class="col-2-4">
                        <h3 class="footer_title">   GIỚI THIỆU </h3>
                        <ul class="footer-list">
                            <li class="footer-link">
                                <a href="">Giới thiệu về CTU shop</a>
                            </li>
                            <li class="footer-link">
                                <a href="">Chính sách bảo mật thanh toán</a>
                            </li>
                            <li class="footer-link">
                                <a href="">Chính sách bảo mật thông tin cá nhân</a>
                            </li>
                            <li class="footer-link">
                                <a href="">Chính sách giải quyết khiếu nai</a>
                            </li>
                            <li class="footer-link">
                                <a href="">Điều khoản và sử dụng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2-4">
                        <h3 class="footer_title">CHĂM SÓC KHÁCH HÀNG </h3>
                        <li class="footer-link">
                            <a href="">Hướng dẫn đặt hàng</a>
                        </li>
                        <li class="footer-link">
                            <a href="">Chính sách đổi trả</a>
                        </li>
                        <li class="footer-link">
                            <a href="">Hướng dẫn mua trả góp</a>
                        </li>
                        <li class="footer-link">
                            <a href="">Chính sách hàng nhập khẩu</a>
                        </li>
                        <li class="footer-link">
                            <p>Hỗ trợ khách hàng: <a href="">hotro@ctushop.vn</a></p>
                        </li>
                        <li class="footer-link">
                            <p>Báo lỗi bảo mật: <a href="">security@ctushop.vn</a></p>
                        </li>

                    </div>
                    <div class="col-2-4">
                        <h3 class="footer_title">   ĐỐI TÁC VẬN CHUYỂN </h3>
                        <li class="footer-link">
                            <a href=""> <img class="set_width" src="//media3.scdn.vn/img2/2018/7_27/TsZls2_simg_de2fe0_autox36_maxb.png" alt=""></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width" src="//media3.scdn.vn/img2/2018/7_27/CT6J11_simg_de2fe0_autox36_maxb.png" alt="l"></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width" src="//media3.scdn.vn/img3/2019/6_13/NW3yaN_simg_de2fe0_autox36_maxb.png" alt=""></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width" src="//media3.scdn.vn/img3/2019/10_17/prCvE7_simg_de2fe0_autox36_maxb.png" alt=""></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width"src="//media3.scdn.vn/img3/2019/3_28/7OrxU2_simg_de2fe0_autox36_maxb.png" alt=""></a>
                           
                        </li>


                    </div>
                    <div class="col-2-4">
                        <h3 class="footer_title">PHƯƠNG THỨC THANH TOÁN </h3>
                        <li class="footer-link">
                            <a href=""> <img class="set_width"src="//media3.scdn.vn/img2/2018/7_27/ExHghW.png" alt=""></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width" src="//media3.scdn.vn/img2/2018/7_27/6HLfiO.png" alt=""></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width" src="//media3.scdn.vn/img2/2018/7_27/ZyrCMU.png" alt=""></a>
                        </li>
                        <li class="footer-link">
                            <a href=""><img class="set_width"src="///media3.scdn.vn/img2/2018/7_27/BN05j2.png" alt=""></a>
                          
                        </li>
                    </div>
                    <div class="col-2-4">
                        <h3 class="footer_title">KẾT NỐI VỚI CHÚNG TÔI</h3>
                        <li class="footer-link">
                            <a href="">
                                <i class="fab fa-facebook"></i>
                                facebook
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="">
                                <i class="fab fa-instagram"></i>
                                ínstagram
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                                twitter
                            </a>
                            
                        </li>



                    </div>
                    

            </div>
            
        </div>
        <div class="copyright">
            <p>@2020 Bản quyền thuộc về Krshop.asia</p>

        </div>
        
         
            

        
        <!-- end footer -->
    </div>
</body>
</html>