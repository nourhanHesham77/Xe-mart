<?php
session_start();
require "admin/functions/connect.php";
?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/07-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:46 GMT -->
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
                            <a href="index-2.php"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index-2.php">Home Style 1</a></li>
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
                                        <li><a href="04-category.php">Category</a></li>
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
                                        <li><a href="index-2.php">Home Style 1</a></li>
                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>PAGE'S <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php">Category</a></li>
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
                                            <li><a href="index-2.php">Home Style 1</a></li>
	                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="list-unstyled">
                                            <li><a href="03-about-us.php">About Us</a></li>
                                            <li><a href="04-category.php">Category</a></li>
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
                                <li class="list-inline-item"><span>||</span> Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Checkout -->
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <form action="#" method="post">
                            <h5>Billing Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name*</label>
                                    <input type="text" name="fname" id="fname" value="" placeholder="Your first name">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name*</label>
                                    <input type="text" name="lname" id="lname" value="" placeholder="Your last name">
                                </div>
                                <div class="col-md-6">
                                    <label>Email Address*</label>
                                    <input type="text" name="email" id="email" value="" placeholder="Your email address">
                                </div>
                                <div class="col-md-6">
                                    <label>Phone*</label>
                                    <input type="text" name="phone" id="phone" value="" placeholder="Your phone number">
                                </div>
                                <div class="col-md-12">
                                    <label>Company Name</label>
                                    <input type="text" name="company-name" id="company" value="" placeholder="Your company name (optional)">
                                </div>
                                <div class="col-md-12">
                                    <label>Address*</label>
                                    <input type="text" name="address1" id="addressone" value="" placeholder="Address line 1">
                                    <input type="text" name="address2" value="" id="addresstwo" placeholder="Address line 2">
                                </div>
                                <?php
                                $id=$_SESSION['login'];
                                $select_country=$connect->query("SELECT * FROM cart WHERE session_login='$id'");
                                $country=$select_country->fetch_assoc();
                                $cry=$country['tax_id'];
                                $get_country=$connect->query("SELECT * FROM tax WHERE id='$cry'");
                                $cntry=$get_country->fetch_assoc();
                                ?>
                                <div class="col-md-6 contry">
                                    <label>Country*</label>
                                    <select class="country cry">
                                        <option selected><?php echo$cntry['country']; ?></option>
                                        <!-- <option>Canada</option>
                                        <option>United Kingdom</option>
                                        <option>Australia</option>
                                        <option>Germany</option> -->
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Town/City*</label>
                                    <input type="text" name="city" id="cty" value="" placeholder="Your town or city name">
                                </div>
                                <div class="col-md-6">
                                    <label>State/Province*</label>
                                    <input type="text" name="state" value="" placeholder="Your state or province">
                                </div>
                                <div class="col-md-6">
                                    <label>Postal/Zip Code*</label>
                                    <input type="text" name="code" id="postal" value="" placeholder="Your postal or zip code">
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-unstyled">
                                        <li><input type="checkbox" id="samsung" name="name"><label for="samsung">Create An Account?</label></li>
                                        <li><input type="checkbox" id="apple" name="name"><label for="apple">Ship To Same Address?</label></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <label>Order Note</label>
                                    <textarea name="note" placeholder="Note for your order (optional). Example- special notes for delivery"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="order-review">
                                    <h5>Order Review</h5>
                                    <div class="review-box">
                                        <ul class="list-unstyled">
                                            <li>Product <span>Total</span></li>
                                            <?php
                                            $id=$_SESSION['login'];
                                            $get_cart=$connect->query("SELECT * FROM cart WHERE session_login = '$id'"); 
                                            $grand=0;
                                            foreach($get_cart as $row_cart){
                                                $product=$row_cart['product_id'];
                                                $count=$row_cart['count'];
                                                $tax=$row_cart['tax_id'];
                                                $select_tax=$connect->query("SELECT * FROM tax WHERE id ='$tax'");
                                                $get_tax=$select_tax->fetch_assoc();
                                                $ship=$get_tax['tax'];
                                                $select_product= $connect->query("SELECT * FROM products WHERE id='$product'");
                                                
                                                    foreach($select_product as $row_product){
                                                        $img=explode(",",$row_product['img']);
                                            ?>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="admin/imges/<?php echo$img[0]?>" alt="" style="width:50px;height:45px;">
                                                    <p><?php $row_product['name'];?></p>
                                                    <span><?php echo$count; ?>X <?php echo$row_product['price']; ?></span>
                                                </div>
                                                <div class="prc">
                                                    <p><?php
                                                    $price=$row_product['price'];
                                                    $totl=$count*$price;
                                                    echo$totl;
                                                    $grand+=$totl;
                                                    ?></p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                            <?php } ?>
                                            <li>Sub Total <span><?php echo$grand;?></span></li>
                                            <li>Shipping & Tax <span><?Php echo$ship; ?></span></li>
                                            <li>Grand Total <span><?php $sub=$grand+$ship; echo$sub;?></span></li>

                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pay-meth">
                                    <h5>Payment Method</h5>
                                    <div class="pay-box">
                                        <ul class="list-unstyled">
                                            <li>
                                                <input type="radio" id="pay1" name="payment" value="pay1" checked>
                                                <label for="pay1"><span><i class="fa fa-circle"></i></span>Cash On Delivery</label>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint placeat illo animi quis minus accusantium ad doloribus, odit explicabo asperiores quidem.</p>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay2" name="payment" value="pay2">
                                                <label for="pay2"><span><i class="fa fa-circle"></i></span>Direct Bank Transfer</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay3" name="payment" value="pay3">
                                                <label for="pay3"><span><i class="fa fa-circle"></i></span>Cheque Payment</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay4" name="payment" value="pay4">
                                                <label for="pay4"><span><i class="fa fa-circle"></i></span>Paypal</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay5" name="payment" value="pay5">
                                                <label for="pay5"><span><i class="fa fa-circle"></i></span>Payoneer</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" name="button" class="ord-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout -->

        <!-- Brand area 2 -->
        <section class="brand2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand area 2 -->

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

    </body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/07-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:46 GMT -->
</html>
