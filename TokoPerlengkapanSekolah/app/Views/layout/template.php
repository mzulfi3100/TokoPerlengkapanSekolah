<!DOCTYPE html>
<html lang="zxx">

<head>
    <script src="https://kit.fontawesome.com/8200f31639.js" crossorigin="anonymous"></script>
    <title>School Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="/Assets/img/loading.png" rel="icon">
    <link href="/Assets/img/loading.png" rel="apple-touch-icon">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/Assets/css/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/Assets/css/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> schoolshop@gmail.com</li>
                                <li>Free Shipping for all Order of Rp 100.000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="/Assets/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i>
                                    Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="#"><img src="/Assets/img/logoToko.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="<?= $section_navbar_title1; ?>"><a href="<?= base_url(); ?>/">Home</a></li>
                            <li class="<?= $section_navbar_title2; ?>"><a href="<?= base_url(); ?>/shopGrid">Shop</a>
                            </li>
                            <li class="<?= $section_navbar_title3; ?>"><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?= base_url(); ?>/shopDetails">Shop Details</a></li>
                                    <li><a href="<?= base_url(); ?>/shopingCart">Shoping Cart</a></li>
                                    <li><a href="<?= base_url(); ?>/checkout">Check Out</a></li>
                                    <li><a href="<?= base_url(); ?>/blogDetails">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="<?= $section_navbar_title4; ?>"><a href="<?= base_url(); ?>/blog">Blog</a></li>
                            <li class="<?= $section_navbar_title5; ?>"><a href="<?= base_url(); ?>/admin">Admin</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>Rp 150.000</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="#"><img src="/Assets/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Bandarlampung</li>
                            <li>Phone: +62 851 6233 6233</li>
                            <li>Email: schoolshop@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This page is made with <i class="fa fa-heart"
                                    aria-hidden="true"></i> by <a href="#" target="_blank">SCHOOLSHOP</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="/Assets/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/Assets/js/js/jquery-3.3.1.min.js"></script>
    <script src="/Assets/js/js/bootstrap.min.js"></script>
    <script src="/Assets/js/js/jquery.nice-select.min.js"></script>
    <script src="/Assets/js/js/jquery-ui.min.js"></script>
    <script src="/Assets/js/js/jquery.slicknav.js"></script>
    <script src="/Assets/js/js/mixitup.min.js"></script>
    <script src="/Assets/js/js/owl.carousel.min.js"></script>
    <script src="/Assets/js/js/main.js"></script>
    <script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>



</body>

</html>
