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
                            <div class="header__top__right__language">
                                <?php if(logged_in()): ?>
                                    <div><i class="fa fa-user"></i>
                                        &ensp; <?= user()->username; ?></div>
                                    <!-- <a href="#"></a> -->
                                    <ul>
                                        <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                                    </ul>
                                <?php else: ?>
                                    <a href="/login"><i class="fa fa-user"></i>Login</a>
                                <?php endif; ?>
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
                            <li class="<?= $section_navbar_title1; ?>"><a href="<?= base_url(''); ?>">Home</a></li>
                            <li class="<?= $section_navbar_title2; ?>"><a href="<?= base_url('shopGrid'); ?>">Shop</a>
                            </li>
                            <li class="<?= $section_navbar_title3; ?>"><a href="<?= base_url(); ?>/view_order">Order</a></li>
                            <?php if(in_groups('pelanggan')): ?>
                                <li class="<?= $section_navbar_title4; ?>"><a href="/profile">Profile</a></li>
                            <?php elseif(in_groups('admin')): ?>
                                <li class="<?= $section_navbar_title4; ?>"><a href="/list_user/">Profile</a></li>
                            <?php endif; ?>
                            <?php if(in_groups('admin')): ?>
                                <li class="<?= $section_navbar_title5; ?>" ><a href="<?= base_url(); ?>/admin">Admin</a></li>
                            <?php endif; ?>
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
                        <?php $count = 0;foreach($wishlist as $w): ?>
                            <?php $count++ ?>
                        <?php endforeach; ?>
                        <li><a href="/view_wishlist"><i class="fa fa-heart"></i><span> <?= $count ?> </span></a></li>
                            <li><a href="shopingCart"><i class="fa fa-shopping-bag"></i> <span><?= $jml_cartBarang ?></span></a></li>
                        </ul>
                        <div class="header__cart__price"><span><?= "Rp ".number_format($totalCart,0,',','.')?></span></div>
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
<section class="<?= $hero; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Kategori Produk</span>
                        </div>
                        <ul>
                            <?php $no = 1; foreach($all_data as $all): ?>
                                <form id="input<?= $no ?>" action="/dashboard_kategori" method="get">
                                    <input type="hidden" name="kategori" id="kategori" value="<?= $all->id ?>">
                                    <li><a href="javascript:;" onclick="document.getElementById('input<?= $no ?>').submit();"><?= $all->name ?></a></li>
                                </form>
                                <?php $no++ ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="/dashboard_cari" method="get">
                                <input type="text" name="cari" placeholder="What do yo u need?">
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

    <div class="container">
        <div class = "p-5">
            <div class="checkout__form">
                <h4>CHECKOUT</h4>
                <form action="/store_checkout" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Nama<span>*</span></p>
                                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat" class="checkout__input__add">
                                <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan (opsional)">
                            </div>
                            <div class="checkout__input">
                                <p>Pilih Provinsi<span>*</span></p>
                                <select class="checkout__input__select" id="provinsi" name="provinsi">
                                    <option>Select Provinsi</option>
                                    <?php foreach($provinsi as $p) : ?>
                                        <option value="<?= $p->province_id ?>"><?= $p->province ?></option>
                                    <?php endforeach; ?>
                                    <input type="hidden" name="nama_provinsi" id="nama_provinsi" value="">
                                </select>
                            </div>
                            <div class="checkout__input">
                                <p>Pilih Kabupaten/Kota<span>*</span></p>
                                <select class="checkout__input__select" id="kabupaten" name="kabupaten">
                                    <option>Select Kabupaten/Kota</option>
                                </select>
                                <input type="hidden" name="nama_kabupaten" id="nama_kabupaten" value="">
                            </div>
                            <div class="checkout__input">
                                <p>Pilih Jasa Pengiriman<span>*</span></p>
                                <select class="checkout__input__select" id="jasa" name="jasa">
                                    <option>Select Jasa Pengiriman</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Pesananmu</h4>
                                <div class="checkout__order__products">Produk <span>Total</span></div>
                                <ul>
                                    <li>Ongkir <span id="total_ongkir"> </span></li>
                                    <?php foreach($cart->contents() as $item){ ?>
                                        <li> <?= $item['name']." (x".$item['qty'].")" ?><span>  <?= "Rp " . number_format($item['price']*$item['qty'],0,',','.'); ?></span></li>
                                    <?php } ?>
                                </ul>
                                <?php
                                    $keranjang = $cart->contents();
                                    $totalCart = 0;
                                    $berat = 0;
                                    foreach ($keranjang as $dps){
                                        $totalCart = $totalCart + $dps['subtotal'];
                                        $berat = $berat + ($dps['options']['berat']*$dps['qty']);
                                    }
                                ?>
                                <input type="hidden" name="berat" id="berat" value="<?= $berat ?>">
                                <input type="hidden" name="kurir" id="kurir" value="JNE">
                                <input type="hidden" name="service" id="service" value="">
                                <input type="hidden" name="status" id="status" value="Menunggu Pembayaran">
                                <input type="hidden" name="total_keranjang" id="total_keranjang" value="<?=$totalCart?>">
                                <div class="checkout__order__subtotal">Total Keranjang <span><?= "Rp ".number_format($totalCart,0,',','.') ?></span></div>
                                <button class="primary-btn">PESAN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 

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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/Assets/js/js/bootstrap.min.js"></script>
    <script src="/Assets/js/js/jquery.nice-select.min.js"></script>
    <script src="/Assets/js/js/jquery-ui.min.js"></script>
    <script src="/Assets/js/js/jquery.slicknav.js"></script>
    <script src="/Assets/js/js/mixitup.min.js"></script>
    <script src="/Assets/js/js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>

    
<script>
    $('document').ready(function(){
        var ongkir = 0;
        $("#provinsi").on('change', function(){
            $('#kabupaten').empty();
            $('#jasa').empty();
            $('#total_ongkir').empty();
            var id_province = $(this).val();
            var nama_province = $("#provinsi option:selected").text(); 
            console.log(id_province);
            console.log(nama_province);
            $('#nama_provinsi').val(nama_province);
            $.ajax({
                url : "<?= base_url('getcity')?>",
                type : 'GET',
                data : {
                    'id_province': id_province,
                },
                dataType : 'json',
                success : function(data){
                    console.log(data);
                    var results = data["rajaongkir"]["results"];
                    $('#kabupaten').append($("<option>").val(results[""]).text("Select Kabupaten/Kota"));
                    for(var i=0; i<results.length; i++)
                    {
                        $('#kabupaten').append($("<option>").val(results[i]['city_id']).text(results[i]['city_name']));
                    }    

                },
            });
        });
        $('#kabupaten').on('change', function(){
            $('#jasa').empty();
            $('#total_ongkir').empty();
            var id_city = $(this).val();
            var nama_kabupaten = $("#kabupaten option:selected").text(); 
            var berat = $("#berat").val(); 
            console.log(nama_kabupaten);
            console.log(berat);
            $('#nama_kabupaten').val(nama_kabupaten);
            $.ajax({
                url : "<?= base_url('getcost')?>",
                type : 'GET',
                data : {
                    'origin': 21,
                    'destination': id_city,
                    'weight': berat,
                    'courier': 'jne',
                },
                dataType : 'json',
                success : function(data){
                    console.log('jasa ')
                    console.log(data);
                    var results = data["rajaongkir"]["results"][0]["costs"];
                    $('#jasa').append($("<option>").val(results[""]).text("Select Jasa Pengiriman"));
					for(var i = 0; i<results.length; i++)
					{
						var text = results[i]["description"]+"("+results[i]["service"]+")";
						$("#jasa").append($('<option>',{
							value : results[i]["cost"][0]["value"],
							text : text,
							etd : results[i]["cost"][0]["etd"]
						}));
					}
                    
                },
            });
        });
        $('#jasa').on('change', function(){
            $('#total_ongkir').empty();
            var service = $('option:selected', this).text();
            $("#service").val(service);
            console.log(service)
            var estimasi = $('option:selected', this).attr('etd');
            ongkir = parseInt($(this).val());
            $("#total_ongkir").append("Rp " + ongkir);
        });
    });
    </script>
</body>

</html>


