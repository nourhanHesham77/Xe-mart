
<?php

require "admin/functions/connect.php";

?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/05-single-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>XeMart - Ecommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/assets/bootstrap.min.css">

		<!-- Fontawesome Icon -->
        <link rel="stylesheet" href="css/assets/font-awesome.min.css">

		<!-- Animate Css -->
        <link rel="stylesheet" href="css/assets/animate.css">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="css/assets/owl.carousel.min.css">

        <!-- Custom Style -->
        <link rel="stylesheet" href="css/assets/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/assets/responsive.css">

    </head>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar 2 -->
        <section class="top-bar2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-left d-flex">
                            <div class="lang-box">
                                <span><img src="images/fl-eng.png" alt="">English<i class="fa fa-angle-down"></i></span>
                                <ul class="list-unstyled">
                                    <li><img src="images/fl-eng.png" alt="">English</li>
                                    <li><img src="images/fl-fra.png" alt="">French</li>
                                    <li><img src="images/fl-ger.png" alt="">German</li>
                                    <li><img src="images/fl-bra.png" alt="">Brazilian</li>
                                </ul>
                            </div>
                            <div class="mny-box">
                                <span>USD<i class="fa fa-angle-down"></i></span>
                                <ul class="list-unstyled">
                                    <li>USD</li>
                                    <li>GBP</li>
                                    <li>EUR</li>
                                </ul>
                            </div>
                            <div class="call-us">
                                <p><img src="images/phn.png" alt="">+1 (111) 426 6573</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><img src="images/user.png" alt="">My Account</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/wishlist.png" alt="">Wishlist</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/checkout.png" alt="">Checkout</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/login.png" alt="">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar 2 -->

        <!-- Logo Area 2 -->
        <section class="logo-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 padding-fix">
                        <form action="#" class="search-bar d-flex">
                            <input type="text" name="search-bar" placeholder="I'm looking for...">
                            <div class="search-cat">
                                <select class="form-control scat-id">
                                    <option>All Categories</option>
                                    <option>Category One</option>
                                    <option>Category Two</option>
                                    <option>Category Three</option>
                                    <option>Category Four</option>
                                    <option>Category Five</option>
                                    <option>Category Six</option>
                                    <option>Category Seven</option>
                                </select>
                            </div>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <div class="carts-area d-flex">
                            <div class="wsh-box ml-auto">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <img src="images/heart.png" alt="favorite">
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="cart-box ml-4">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area 2 -->

        <!-- Cart Body -->
        <div class="cart-body">
            <div class="close-btn">
                <button class="close-cart"><img src="images/close.png" alt="">Close</button>
            </div>
            <div class="crt-bd-box">
                <div class="cart-heading text-center">
                    <h5>Shopping Cart</h5>
                </div>
                <div class="cart-content">
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img src="images/cart1.png" alt=""></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#">SMART LED TV</a></p>
                            <span>1 x $199.00</span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img src="images/cart2.png" alt=""></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#">SMART LED TV</a></p>
                            <span>1 x $199.00</span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="cart-btm">
                    <p class="text-right">Sub Total: <span>$398.00</span></p>
                    <a href="#">Checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-overlay"></div>
        <!-- End Cart Body -->

        <!-- Sticky Menu -->
        <section class="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="sticky-logo">
                            <a href="index.php"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index.php">Home Style 1</a></li>
                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="#">- Western Clothing</a>
                                                        <a href="#">- Traditional Clothing</a>
                                                        <a href="#">- Winter Clothing</a>
                                                        <a href="#">- Summer Clothing</a>
                                                        <a href="#">- Inner Wear</a>
                                                        <a href="#">- Night Wear</a>
                                                        <a href="#">- Mens Clothing</a>
                                                        <a href="#">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="#">- Samsung</a>
                                                        <a href="#">- Huawei</a>
                                                        <a href="#">- One Plus</a>
                                                        <a href="#">- Xiaomi</a>
                                                        <a href="#">- Iphone</a>
                                                        <a href="#">- Blackberry</a>
                                                        <a href="#">- Nokia</a>
                                                        <a href="#">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-1.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-2.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-3.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="images/mega-1.jpg" alt="" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="images/mega-2.jpg" alt="" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-1.jpg" alt="">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-2.jpg" alt="">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-3.jpg" alt="">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-4.jpg" alt="">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>PAGES <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php?do=all">Category</a></li>
                                        <li><a href="05-single-product.php">Single Product</a></li>
                                        <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php">Checkout</a></li>
                                        <li><a href="08-login.php">Log In</a></li>
                                        <li><a href="09-register.php">Register</a></li>
                                        <li><a href="10-wishlist.php">Wishlist</a></li>
                                        <li><a href="11-compare.php">Compare</a></li>
                                        <li><a href="15-track-order.php">Track Order</a></li>
                                        <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="13-faq.php">Faq</a></li>
                                        <li><a href="14-404.php">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="carts-area d-flex">
                            <div class="src-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search Here">
                                    <button type="button" name="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="wsh-box ml-auto">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <img src="images/heart.png" alt="favorite">
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="cart-box ml-4">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sticky Menu -->

        <!-- Menu Area 2 -->
        <section class="menu-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-0">
                        <div class="sidemenu">
                            <p>All Categories <i class="fa fa-bars"></i></p>
                            <ul class="list-unstyled gt-menu">
                                <li><a href="#"><img src="images/m-cloth.png" alt="">Men's Clothing<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr">
                                                    <img src="images/ipn.png" alt="">
                                                    <div class="mg-content text-right">
                                                        <h4>Iphone</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/w-cloth.png" alt="">Women's Clothing<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr tab-bnr">
                                                    <img src="images/tab.png" alt="">
                                                    <div class="mg-content text-right">
                                                        <h4>Tablet</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/ele.png" alt="">Electronics<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr pw-bnr">
                                                    <img src="images/pbank.png" alt="">
                                                    <div class="mg-content text-right">
                                                        <h4>Powerbank</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/sm.png" alt="">Smartphone & Tablet</a></li>
                                <li><a href="#"><img src="images/com.png" alt="">Computer & Office</a></li>
                                <li><a href="#"><img src="images/tv.png" alt="">Home Applience</a></li>
                                <li><a href="#"><img src="images/shoe.png" alt="">Leather & Shoes</a></li>
                                <li><a href="#"><img src="images/kid.png" alt="">Kids & Babies</a></li>
                                <li><a href="#"><img src="images/watch.png" alt="">Jewelary & Watches</a></li>
                                <li><a href="#"><img src="images/health.png" alt="">Health & Beauty</a></li>
                                <li><a href="#"><img src="images/car.png" alt="">Automobiles</a></li>
                                <li><a href="#"><img src="images/sport.png" alt="">Sports & Outdoors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index.php">Home Style 1</a></li>
                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>PAGE'S <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php?do=all">Category</a></li>
                                        <li><a href="05-single-product.php">Single Product</a></li>
                                        <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php">Checkout</a></li>
                                        <li><a href="08-login.php">Log In</a></li>
                                        <li><a href="09-register.php">Register</a></li>
                                        <li><a href="10-wishlist.php">Wishlist</a></li>
                                        <li><a href="11-compare.php">Compare</a></li>
                                        <li><a href="15-track-order.php">Track Order</a></li>
                                        <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="13-faq.php">Faq</a></li>
                                        <li><a href="14-404.php">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="#">- Western Clothing</a>
                                                        <a href="#">- Traditional Clothing</a>
                                                        <a href="#">- Winter Clothing</a>
                                                        <a href="#">- Summer Clothing</a>
                                                        <a href="#">- Inner Wear</a>
                                                        <a href="#">- Night Wear</a>
                                                        <a href="#">- Mens Clothing</a>
                                                        <a href="#">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="#">- Samsung</a>
                                                        <a href="#">- Huawei</a>
                                                        <a href="#">- One Plus</a>
                                                        <a href="#">- Xiaomi</a>
                                                        <a href="#">- Iphone</a>
                                                        <a href="#">- Blackberry</a>
                                                        <a href="#">- Nokia</a>
                                                        <a href="#">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-1.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-2.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-3.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="images/mega-1.jpg" alt="" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="images/mega-2.jpg" alt="" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-1.jpg" alt="">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-2.jpg" alt="">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-3.jpg" alt="">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-4.jpg" alt="">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.php">CONTACT</a></li>
                                <li class="list-inline-item cup-btn"><a href="#">Get Your Coupon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Area 2 -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href="#"><img src="images/logo.png" alt=""></a>
                                <a href="#"><span>Sign In</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a>
                                        <ul class="list-unstyled">
                                            <li><a href="index.php">Home Style 1</a></li>
	                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="list-unstyled">
                                            <li><a href="03-about-us.php">About Us</a></li>
                                            <li><a href="04-category.php?do=all">Category</a></li>
                                            <li><a href="05-single-product.php">Single Product</a></li>
                                            <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                            <li><a href="07-checkout.php">Checkout</a></li>
                                            <li><a href="08-login.php">Log In</a></li>
                                            <li><a href="09-register.php">Register</a></li>
                                            <li><a href="10-wishlist.php">Wishlist</a></li>
                                            <li><a href="11-compare.php">Compare</a></li>
                                            <li><a href="15-track-order.php">Track Order</a></li>
                                            <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                            <li><a href="13-faq.php">Faq</a></li>
                                            <li><a href="14-404.php">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="list-unstyled">
                                            <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                            <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                            <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                            <li><a href="19-blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="20-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Single Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Single Product Area -->
        <section class="sg-product">
       
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <div class="row rate">
                        <?php
                                       $id=$_GET['id'];
                                       $select_product=$connect->query("SELECT * FROM products WHERE id ='$id'");
                                                foreach($select_product as $row_product){
                                                    $img=explode(",",$row_product['img']);
                                                    $rate= round($row_product['rate']);
                                                    $pro_id=$row_product['id'];

                                    ?>
                            <div class="col-md-5">
                                <div class="sg-img">
                                    <!-- Tab panes -->

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                                            <img src="admin/imges/<?php echo$img[3]?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane" id="sg2" role="tabpanel">
                                            <img src="admin/imges/<?php echo$img[0]?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane" id="sg3" role="tabpanel">
                                            <img src="admin/imges/<?php echo$img[1]?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane" id="sg4" role="tabpanel">
                                            <img src="admin/imges/<?php echo$img[2]?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="nav d-flex justify-content-between">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#sg1"><img src="admin/imges/<?php echo$img[3]?>" alt=""></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#sg2"><img src="admin/imges/<?php echo$img[0]?>" alt=""></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#sg3"><img src="admin/imges/<?php echo$img[1]?>" alt=""></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#sg4"><img src="admin/imges/<?php echo$img[2]?>" alt=""></a>
                                    </div>
                                </div>
                            </div>
                          
                                   
                            <div class="col-md-7">
                                <div class="sg-content">
                                    <div class="pro-tag">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">Home Appliance ,</a></li>
                                            <li class="list-inline-item"><a href="#"><?php echo$row_product['seller']?></a></li>
                                        </ul>
                                    </div>
                                     <div class="pro-name">
                                         <p><?php echo $row_product['name']?></p>
                                     </div>
                                     <div class="pro-rating">

                                         <ul class="list-unstyled list-inline" putid="<?php echo$pro_id?>">

                                         <?php

                                         if($rate == 0){


                                         


                                         ?>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-1"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-2"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-3"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-4"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-5"></i></li>

                                             <?php } ?>

                                                                                      
                                                                                      
                                        <?php

                                         if($rate == 1){


                                         


                                         ?>
                                             <li class="list-inline-item"><i class="fa fa-star star-1"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-2"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-3"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-4"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-5"></i></li>

                                             <?php } ?>

                                        <?php

                                         if($rate == 2){


                                         


                                         ?>
                                             <li class="list-inline-item"><i class="fa fa-star star-1"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-2"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-3"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-4"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-5"></i></li>

                                             <?php } ?>
                                        <?php

                                         if($rate == 3){


                                         


                                         ?>
                                             <li class="list-inline-item"><i class="fa fa-star star-1"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-2"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-3"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-4"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-5"></i></li>

                                             <?php } ?>
                                        <?php

                                         if($rate == 4){


                                         


                                         ?>
                                             <li class="list-inline-item"><i class="fa fa-star star-1"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-2"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-3"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-4"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o star-5"></i></li>

                                             <?php } ?>
                                        <?php

                                         if($rate == 5){


                                         


                                         ?>
                                             <li class="list-inline-item"><i class="fa fa-star star-1"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-2"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-3"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-4"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star star-5"></i></li>

                                             <?php } ?>
                                             
                                             



                                             <li class="list-inline-item"><a href="#">( 09 Review )</a></li>
                                         </ul>
                                     </div>
                                     <div class="pro-price">
                                         <ul class="list-unstyled list-inline">
                                             <li class="list-inline-item"><?php echo$row_product['price']?></li>
                                             <li class="list-inline-item"><?php echo$row_product['sale']?></li>
                                         </ul>
                                         <p>Availability : <span>In Stock</span> <label>(13 Available)</label></p>
                                     </div>
                                     
                                     <div class="colo-siz">
                                         <div class="color">
                                             <ul class="list-unstyled list-inline">
                                                 <li>Color :</li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-1" name="color" value="color-1">
                                                     <label for="color-1"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-2" name="color" value="color-2">
                                                     <label for="color-2"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-3" name="color" value="color-3">
                                                     <label for="color-3"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-4" name="color" value="color-4">
                                                     <label for="color-4"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-5" name="color" value="color-5">
                                                     <label for="color-5"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="size">
                                             <ul class="list-unstyled list-inline">
                                                 <li>Size :</li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="size-1" name="size" value="size-1">
                                                     <label for="size-1">S</label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="size-2" name="size" value="size-2">
                                                     <label for="size-2">M</label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="size-3" name="size" value="size-3">
                                                     <label for="size-3">L</label>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="qty-box">
                                             <ul class="list-unstyled list-inline">
                                                 <li class="list-inline-item">Qty :</li>
                                                 <li class="list-inline-item quantity buttons_added">
                                                     <input type="button" value="-" class="minus">
                                                     <input type="number" step="1" min="1" max="10" value="1" class="qty text" size="4" readonly>
                                                     <input type="button" value="+" class="plus">
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="pro-btns">
                                              <a href="#" class="cart">Add To Cart</a>
                                              <a href="#" class="fav-com" data-toggle="tooltip" data-placement="top" title="Wishlist"><img src="images/it-fav.png" alt=""></a>
                                              <a href="#" class="fav-com"  data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                         </div>
                                     </div>
                                </div>
                            </div>

                            <?php } ?>
                        
                            <div class="col-md-12">
                                <div class="sg-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pro-det">Product Details</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rev">Reviews (03)</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pro-det" role="tabpanel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur, expedita, autem labore eos, totam rem quo similique est et qui quaerat cumque sed ab quae assumenda. Non, quas, nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, necessitatibus, dicta iusto in, similique quas<br><br> accusamus debitis illum distinctio nemo numquam obcaecati at itaque odio ducimus cupiditate minima labore libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur, expedita, autem labore eos, totam rem quo similique est et qui quaerat cumque sed ab quae assumenda. <br><br>Non, quas, nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, necessitatibus, dicta iusto in, similique quas accusamus debitis illum distinctio nemo numquam obcaecati at itaque odio ducimus cupiditate.</p>
                                        </div>
                                        <div class="tab-pane fade" id="rev" role="tabpanel">
                                            <div class="review-box d-flex">
                                                <div class="rv-img">
                                                    <img src="images/testimonial-1.jpg" alt="">
                                                </div>
                                                <div class="rv-content">
                                                    <h6>Michel Kolins <span>(Feb 10, 2020)</span></h6>
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut eveniet repellendus voluptas.</p>
                                                </div>
                                            </div>
                                            <div class="review-box d-flex">
                                                <div class="rv-img">
                                                    <img src="images/testimonial-2.jpg" alt="">
                                                </div>
                                                <div class="rv-content">
                                                    <h6>Jenus Doe <span>(Feb 10, 2020)</span></h6>
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p>Consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut eveniet repellendus voluptas.</p>
                                                </div>
                                            </div>
                                            <div class="review-form">
                                                <h6>Add Your Review</h6>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="star-rating">
                                                                <label>Your Rating*</label>
                                                                <span class="fa fa-star-o" data-rating="1"></span>
                                                                <span class="fa fa-star-o" data-rating="2"></span>
                                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="whatever1" class="rating-value" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your Name*</label>
                                                            <input type="text" name="name" required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your Email*</label>
                                                            <input type="text" name="email" required="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Your Review*</label>
                                                            <textarea required=""></textarea>
                                                            <button type="submit">Add Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="sim-pro">
                                    <div class="sec-title">
                                        <h5>Similar Product</h5>
                                    </div>
                                    <div class="sim-slider owl-carousel">
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-5.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="#">Item Title Here</a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-11.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="#">Item Title Here</a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-7.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="#">Item Title Here</a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-9.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="#">Item Title Here</a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-13.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="#">Item Title Here</a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-box">
                            <div class="sec-title">
                                <h6>Categories</h6>
                            </div>
                            <!-- accordion -->
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse1">
                                            <span>Clothing</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse1" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse2">
                                            <span>Electronics</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse2" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse3">
                                            <span>Home Appliance</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse3" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse4">
                                            <span>Smartphone</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse4" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse5">
                                            <span>Computer</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse5" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse6">
                                            <span>Kids Collection</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse6" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#collapse7">
                                            <span>Automobile</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse7" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ht-offer">
                            <div class="sec-title">
                                <h6>Hot Offer</h6>
                            </div>
                            <div class="ht-body owl-carousel">
                                <div class="ht-item">
                                    <div class="ht-img">
                                        <a href="#"><img src="images/tab-15.png" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p><a href="#">Items Title Name Enter Here</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-item">
                                    <div class="ht-img">
                                        <a href="#"><img src="images/tab-14.png" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p><a href="#">Items Title Name Enter Here</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-box">
                            <a href="#"><img src="images/s-banner1.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
      
        </section>

        <!-- End Single Product Area -->

        <!-- Footer Area -->
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-contact">
                            <h5>Contact Info</h5>
                            <div class="f-add">
                                <i class="fa fa-map-marker"></i>
                                <span>Address :</span>
                                <p>795 South Park Avenue, New York, NY USA 94107</p>
                            </div>
                            <div class="f-email">
                                <i class="fa fa-envelope"></i>
                                <span>Email :</span>
                                <p>enquery@domain.com</p>
                            </div>
                            <div class="f-phn">
                                <i class="fa fa-phone"></i>
                                <span>Phone :</span>
                                <p>+1 908 875 7678</p>
                            </div>
                            <div class="f-social">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-cat">
                            <h5>Categories</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Clothing</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Electronics</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Smartphones & Tablets</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Computer & Office</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Home Appliances</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Leather & Shoes</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Kids & Babies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-link">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-right"></i>My Account</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Shopping Cart</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Checkout</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Order History</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Log In</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Our Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-sup">
                            <h5>Support</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Payment Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Return Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Frequently asked questions</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Terms & Condition</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright &copy; 2020 | Designed With <i class="fa fa-heart"></i> by <a href="#" target="_blank">SnazzyTheme</a></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="images/payment.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="back-to-top text-center">
                <img src="images/backtotop.png" alt="" class="img-fluid">
            </div>
        </section>
        <!-- End Footer Area -->


        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src="js/assets/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap -->
        <script src="js/assets/popper.min.js"></script>
        <script src="js/assets/bootstrap.min.js"></script>

        <!-- Owl Slider -->
        <script src="js/assets/owl.carousel.min.js"></script>

        <!-- Wow Animation -->
        <script src="js/assets/wow.min.js"></script>

        <!-- Price Filter -->
        <script src="js/assets/price-filter.js"></script>

        <!-- Mean Menu -->
        <script src="js/assets/jquery.meanmenu.min.js"></script>

        <!-- Custom JS -->
        <script src="js/plugins.js"></script>
        <script src="js/custom.js"></script>
<script>
    $(document).ready(function(){

        

        $(".star-1").click(function(){
           var id= $(this).closest("ul").attr("putid");
            var rate=1;
            console.log(id);
            $.post("functions/add_rate.php",{
                sid : id,
                srate : rate,
            },function(data){
                console.log(data);
                $(".rate").load(location.href+' .rate');
            })
            
           
        })
       
        $(".star-2").click(function(){
           var id= $(this).closest("ul").attr("putid");
            var rate=2;
            console.log(id);
            $.post("functions/add_rate.php",{
                sid : id,
                srate : rate,
            },function(data){
                console.log(data);
                $(".rate").load(location.href+' .rate');
            })
           
        })
        $(".star-3").click(function(){
           var id= $(this).closest("ul").attr("putid");
            var rate=3;
            console.log(id);
            $.post("functions/add_rate.php",{
                sid : id,
                srate : rate,
            },function(data){
                $(".rate").load(location.href+' .rate');
                console.log(data);
            })
           
        })
        $(".star-4").click(function(){
           var id= $(this).closest("ul").attr("putid");
            var rate=4;
            console.log(id);
            $.post("functions/add_rate.php",{
                sid : id,
                srate : rate,
            },function(data){
                $(".rate").load(location.href+' .rate');
                console.log(data);
            })
           
        })

        $(".star-5").click(function(){
           var id= $(this).closest("ul").attr("putid");
            var rate=5;
            console.log(id);
            $.post("functions/add_rate.php",{
                sid : id,
                srate : rate,
            },function(data){
                console.log(data);
                $(".rate").load(location.href+' .rate');
            })
           
        })
    })
</script>
    </body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/05-single-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:46 GMT -->
</html>
