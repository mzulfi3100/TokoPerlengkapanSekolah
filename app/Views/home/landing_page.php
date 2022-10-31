<!DOCTYPE html>
<html lang="zxx">

<head>
    <script src="https://kit.fontawesome.com/0cf2f14756.js" crossorigin="anonymous"></script>
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

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="/Assets/img/loading.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>Rp 150.000</span></div>
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
                <a href="<?= base_url(); ?>/login"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?= base_url(); ?>/dashboard">Shop</a></li>
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
                                <a href="<?= base_url(); ?>/login"><i class="fa fa-user"></i> Login</a>
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
                    <div class="col-lg-12">
                    <?php
                    if (session()->getflashdata('pesan')){
                        echo'<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                        echo session()->getflashdata('pesan').(' Berhasil Dimasukkan Kedalam Keranjang');
                        echo'</div>';
                    }?>
                    </div>
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?= base_url(); ?>/">Home</a></li>
                            <li><a href="<?= base_url(); ?>/dashboard">Shop</a></li>
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
                        $jml_cartBarang = $jml_cartBarang + $key['qty'];
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
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Kategori Produk</span>
                        </div>
                        <ul>
                            <form id="input1" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="alat_tulis">
                                <li><a href="javascript:;" onclick="document.getElementById('input1').submit();">Alat Tulis</a></li>
                            </form>
                            <form id="input2" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="seragam">
                                <li><a href="javascript:;" onclick="document.getElementById('input2').submit();">Seragam</a></li>
                            </form>
                            <form id="input3" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="sepatu">
                                <li><a href="javascript:;" onclick="document.getElementById('input3').submit();">Sepatu</a></li>
                            </form>
                            <form id="input4" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="tas">
                                <li><a href="javascript:;" onclick="document.getElementById('input4').submit();">Tas</a></li>
                            </form>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span></span>
                                </div> -->
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
                    <div class="hero__item set-bg" data-setbg="/Assets/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>
                                New Arrival
                            </span>
                            <h2>Product <br />100% Originals</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/Assets/img/categories/cat-1.jpg">
                        <form id="input3" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="sepatu">
                                <h5><a href="javascript:;" onclick="document.getElementById('input3').submit();">Sepatu</a></h5>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/Assets/img/categories/cat-2.jpg">
                        <form id="input1" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="alat_tulis">
                                <h5><a href="javascript:;" onclick="document.getElementById('input1').submit();">Alat Tulis</a></h5>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/Assets/img/categories/cat-3.jpg">
                            <form id="input4" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="tas">
                                <h5><a href="javascript:;" onclick="document.getElementById('input4').submit();">Tas</a></h5>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/Assets/img/categories/cat-6.jpg">
                        <form id="input2" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="seragam">
                                <h5><a href="javascript:;" onclick="document.getElementById('input2').submit();">Seragam</a></h5>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".alat_tulis">Alat Tulis</li>
                            <li data-filter=".seragam">Seragam</li>
                            <li data-filter=".tas">Tas</li>
                            <li data-filter=".sepatu">Sepatu</li>   

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <?php $count = 1 ?>
                <?php foreach($katalog as $ktg ) : ?>
                    <?php 
                        if($ktg['featured_produk'] == "yes" && $count <= 20){ ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 mix <?= ($ktg['kategori_produk']) ?>">
                                <div class="featured__item">
                                    <?php echo form_open('home/add');
                                    echo form_hidden('id', $ktg['id_produk']);
                                    echo form_hidden('price', $ktg['harga_produk']);
                                    echo form_hidden('name', $ktg['nama_produk']);
                                    //option
                                    echo form_hidden('gambar', $ktg['gambar_produk']); ?>
                                    <div class="featured__item__pic set-bg" data-setbg="/uploads/<?=$ktg['gambar_produk']?>">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>
                                        <button type="submit"><li type="submit"><a href><i class="fa fa-shopping-cart"></i></a></li></button>
                                    </ul>
                                    </div>
                                    <?php echo form_close(); ?>
                                    <div class="featured__item__text">
                                        <h6><a href="#"><?= $ktg['nama_produk'] ?></a></h6>
                                        <h5><?= "Rp ".number_format($ktg['harga_produk'],0,',','.')?></h5>
                                    </div>
                                </div>
                            </div>
                    <?php $count++; }  ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/Assets/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/Assets/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <?php $count = 0 ?>
                            <?php foreach($katalog as $ktg): ?>
                            <?php if( $count =! 0){ ?>
                                <div class="latest-product__slider__item">
                                <a href="dashboard_cari?cari=<?= $ktg['nama_produk'] ?>" class="latest-product__item">
                                    <div class="latest-product__item__pic"> 
                                        <img src="/uploads/<?=$ktg['gambar_produk']?>" style="height: 110px; width: 110px;">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?= $ktg['nama_produk'] ?></h6>
                                        <span><?= "Rp ".number_format($ktg['harga_produk'],0,',','.')?></span>
                                    </div>
                                </a>
                            </div>
                            <?php $count++;} ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-7.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tie</h6>
                                        <span>Rp 7.500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-8.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crayons</h6>
                                        <span>Rp 29.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-9.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Paper Clip</h6>
                                        <span>Rp 4.500</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-10.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Binder Clip</h6>
                                        <span>Rp 13.500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-11.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Sock</h6>
                                        <span>Rp 18.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-12.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Highlighter</h6>
                                        <span>Rp 10.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-11.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Sock</h6>
                                        <span>Rp 18.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-4.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Eraser</h6>
                                        <span>Rp 2.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-10.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Binder Clip</h6>
                                        <span>Rp 13.500</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-7.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tie</h6>
                                        <span>Rp 7.500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-9.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Paper Clip</h6>
                                        <span>Rp 4.500</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="/Assets/img/latest-product/lp-8.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crayons</h6>
                                        <span>Rp 29.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/Assets/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> June 4,2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="<?= base_url(); ?>/blog">Tips choosing backpack for children</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, repellat. </p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/Assets/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="<?= base_url(); ?>/blogDetails">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam
                                aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/Assets/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="<?= base_url(); ?>/blog">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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



</body>

</html>
