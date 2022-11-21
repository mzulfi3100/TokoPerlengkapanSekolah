<!DOCTYPE html>
<html lang="zxx">

<head>
    <script src="https://kit.fontawesome.com/8200f31639.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="/Assets/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
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
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="<?= base_url(); ?>/">Home</a></li>
                <li><a href="<?= base_url(); ?>/shopGrid">Shop</a></li>
                <li><a href=" #">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="<?= base_url(); ?>/shopDetails">Shop Details</a></li>
                        <li><a href="<?= base_url(); ?>/shopingCart">Shoping Cart</a></li>
                        <li><a href="<?= base_url(); ?>/checkout">Check Out</a></li>
                        <li><a href="<?= base_url(); ?>/blogDetails">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url(); ?>/blog">Blog</a></li>
                <li><a href="<?= base_url(); ?>/contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> schoolshop@gmail.com</li>
                <li>Free Shipping for all Order of Rp 100.000</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> schoolshop@gmail.com</li>
                                <li>Free Shipping for all Order of Rp 100.000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                                <a href="#"><i class="fa fa-user"></i> Login</a>
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
                        <a href="<?= base_url(); ?>/"><img src="/Assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                        if (session()->getflashdata('pesan')){
                            echo'<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo session()->getflashdata('pesan').(' Berhasil Dimasukkan Kedalam Keranjang');
                            echo'</div>';
                        }?>
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?= base_url(); ?>/">Home</a></li>
                            <li class="active"><a href="<?= base_url(); ?>/shopGrid">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?= base_url(); ?>/shopDetails">Shop Details</a></li>
                                    <li><a href="<?= base_url(); ?>/shopingCart">Shoping Cart</a></li>
                                    <li><a href="<?= base_url(); ?>/checkout">Check Out</a></li>
                                    <li><a href="<?= base_url(); ?>/blogDetails">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url(); ?>/blog">Blog</a></li>
                            <li><a href="<?= base_url(); ?>/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <?php
                    $keranjang = $cart->contents();
                    $jml_cartBarang = 0;
                    foreach ($keranjang as $key){
                        $jml_cartBarang = $jml_cartBarang + 1;
                    }
                    ?>
                    <?php
                    $keranjang = $cart->contents();
                    $totalCart = 0;
                    foreach ($keranjang as $dps){
                        $totalCart = $totalCart + $dps['subtotal'];
                    }
                    ?>
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="shopingCart"><i class="fa fa-shopping-bag"></i> <span><?= $jml_cartBarang ?></span></a></li>

                        </ul>
                        <div class="header__cart__price"><span><?= " Total Harga (Rp ".number_format($totalCart,0,',','.').")"?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Stationary</a></li>
                            <li><a href="#">Uniforms</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Backpack</a></li>
                            <li><a href="#">Belt</a></li>
                            <li><a href="#">Tie</a></li>
                            <li><a href="#">Hat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">

                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+62 851 6233 6233</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url(); ?>/">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <?php echo form_open('home/update')?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $countCart = 0; $i = 1; ?>

                            <?php foreach($keranjang as $pdf ) : ?>
                                <?php 
                                    if($pdf['id'] =! 0){ ?>
                                    <tr>
                                    <td class="shoping__cart__item">
                                        <img class="shoping__cart__item__pic set-bg" data-setbg="/uploads/<?=$pdf['options']['gambar']?>" style="height: 150px; width: 150px;">
                                        <h5><?= $pdf['name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <h5><?= "Rp ".number_format($pdf['price'],0,',','.')?></h5>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="number" min="1" name="qty<?= $i++ ?>" value="<?= $pdf['qty'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__sub__total">
                                    <?= "Rp ".number_format($pdf['subtotal'],0,',','.')?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a  href="<?= base_url('home/delete/'.$pdf['rowid'])?>" class="btn btn-sm btn-danger"><i class="fa fa-trash" style="color:white"></i></a>
                                    </td>
                                </tr>
                            <?php $countCart++; }  ?>
                            <?php endforeach; ?>   
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <button class="primary-btn ">Update Cart</button>
                        <a  href="<?= base_url('home/clear') ?>" class="primary-btn ">Clear Cart</a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <?php $countCart = 0 ?>
                            
                            <?php foreach($keranjang as $pdf ) : ?>
                                <?php if($pdf['id'] =! 0){ ?>
                                    <?php if($countCart == 0): ?>
                                        <li>Subtotal<span><?= "Rp ".number_format($pdf['subtotal'],0,',','.')?></span></li>
                                    <?php elseif($countCart != 0): ?>
                                        <li><span><?= "Rp ".number_format($pdf['subtotal'],0,',','.')?></span></li>
                                    <?php endif; ?>
                                <?php $countCart++; }  ?>
                            <?php endforeach; ?>
                            <?php
                                $keranjang = $cart->contents();
                                $totalCart = 0;
                                foreach ($keranjang as $dps){
                                    $totalCart = $totalCart + $dps['subtotal'];
                                }
                            ?>
                            <li>Total <span><?= "Rp ".number_format($totalCart,0,',','.') ?></span></li>
                        </ul>
                        <?php foreach($keranjang as $pdf ) : ?>
                            <?php if($pdf['id'] =! 0){ ?>
                                <a href="/checkout" class="primary-btn">PROCEED TO CHECKOUT</a
                            <?php }  ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="<?= base_url(); ?>/"><img src="/Assets/img/logo.png" alt=""></a>
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
                                </script> All rights reserved | This template is made with <i class="fa fa-heart"
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


</body>

</html>
