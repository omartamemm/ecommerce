<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Drophut - Single Product eCommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!--header area start-->
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="support_info">
                            <p>Any Enquiry: <a href="tel:">+56985475235</a></p>
                        </div>
                        <div class="top_right text-right">
                            <ul>
                               <li><a href="my-account.html"> My Account </a></li> 
                               <li><a href="checkout.html"> Checkout </a></li> 
                            </ul>
                        </div> 
                        <div class="search_container">
                           <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button> 
                                </div>
                            </form>
                        </div> 
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="#" class="login_trigger">
                                    <img src="assets/img/user.png" alt="أيقونة تسجيل الدخول">
                                </a>
                                <!-- قائمة الخيارات المنسدلة -->
                                <div class="login_options">
                                    <style>
                                        .header_wishlist {
                                            position: relative;
                                            display: inline-block;
                                        }
                                        .login_options {
                                            display: none;
                                            position: absolute;
                                            top: 100%;
                                            right: 0;
                                            background-color: #fff;
                                            border: 1px solid #ddd;
                                            border-radius: 4px;
                                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                                            z-index: 1000;
                                            min-width: 200px;
                                        }
                                        .header_wishlist:hover .login_options {
                                            display: block;
                                        }
                                        .login_options ul {
                                            list-style: none;
                                            margin: 0;
                                            padding: 10px 0;
                                        }
                                        .login_options ul li {
                                            padding: 10px 20px;
                                        }
                                        .login_options ul li a {
                                            text-decoration: none;
                                            color: #333;
                                            font-size: 14px;
                                            display: block;
                                        }
                                        .login_options ul li a:hover {
                                            background-color: #f5f5f5;
                                            color: #000;
                                        }
                                    </style>
                                    <ul>
                                        <li><a href="user_login.html">تسجيل الدخول كمستخدم</a></li>
                                        <li><a href="admin_login.html">تسجيل الدخول كأدمن</a></li>
                                        <li><a href="register.html">إنشاء حساب</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><img src="assets/img/shopping-bag.png" alt="أيقونة سلة التسوق"></a>
                                <span class="cart_quantity">2</span>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt="صورة المنتج"></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt="صورة المنتج"></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Natus erro at congue massa commodo</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>   
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="product-details.html">product</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="forget-password.html">Forget Password</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="tracking.html">tracking</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="login.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@drophunt.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Email: <a href="mailto:">support@drophunt.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                   <li><a href="my-account.html">Account</a></li> 
                                   <li><a href="checkout.html">Checkout</a></li> 
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="شعار الموقع"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                    <form action="#">
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button> 
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        <a href="#" class="login_trigger">
                                            <img src="assets/img/user.png" alt="أيقونة تسجيل الدخول">
                                        </a>
                                        <!-- قائمة الخيارات المنسدلة -->
                                        <div class="login_options">
                                            <style>
                                                .header_wishlist {
                                                    position: relative;
                                                    display: inline-block;
                                                    margin-right: 20px;
                                                }
                                                .login_options {
                                                    display: none;
                                                    position: absolute;
                                                    top: 100%;
                                                    right: 0;
                                                    background-color: #fff;
                                                    border: 1px solid #ddd;
                                                    border-radius: 4px;
                                                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                                                    z-index: 1000;
                                                    min-width: 200px;
                                                }
                                                .header_wishlist:hover .login_options {
                                                    display: block;
                                                }
                                                .login_options ul {
                                                    list-style: none;
                                                    margin: 0;
                                                    padding: 10px 0;
                                                }
                                                .login_options ul li {
                                                    padding: 10px 20px;
                                                }
                                                .login_options ul li a {
                                                    text-decoration: none;
                                                    color: #333;
                                                    font-size: 14px;
                                                    display: block;
                                                }
                                                .login_options ul li a:hover {
                                                    background-color: #f5f5f5;
                                                    color: #000;
                                                }
                                                .middel_right_info {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: flex-end;
                                                }
                                                .mini_cart_wrapper {
                                                    position: relative;
                                                }
                                            </style>
                                            <ul>
                                                <li><a href="index.php?page=login">login as user </a></li>
                                                <li><a href="index.php?page=admin_login">login as admin </a></li>
                                                <li><a href="index.php?page=register">Register</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)"><img src="assets/img/shopping-bag.png" alt="أيقونة سلة التسوق"></a>
                                        <span class="cart_quantity">2</span>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product.jpg" alt="صورة المنتج"></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>    
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product2.jpg" alt="صورة المنتج"></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Natus erro at congue massa commodo</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>   
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="cart.html">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
             <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="main_menu menu_position"> 
                                <nav>  
                                    <ul>
                                        <li><a href="index-2.html">home</a></li>
                                        <li><a href="product-details.html">Product</a></li>
                                        
                                        <li><a class="active" href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="forget-password.html">Forget Password</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="tracking.html">tracking</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"> Contact Us</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    
        </div>
    </header>
</body>
</html>