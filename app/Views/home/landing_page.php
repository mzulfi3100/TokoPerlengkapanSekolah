<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

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
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>
                                        <button type="submit"><li type="submit"><i class="fa fa-shopping-cart"></i></a></li></button>
                                        <?php echo form_close(); ?>
                                        <form action="/add_wishlist" method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="id_produk" name="id_produk" value=<?= $ktg['id_produk'] ?>>
                                            <input type="hidden" id="harga_produk" name="harga_produk" value=<?= $ktg['harga_produk'] ?>>
                                            <input type="hidden" id="nama_produk" name="nama_produk" value=<?= $ktg['nama_produk'] ?>>
                                            <input type="hidden" id="gambar_produk" name="gambar_produk" value=<?= $ktg['gambar_produk'] ?>>
                                            <button type="submit"><li type="submit"><i class="fa fa-heart"></i></a></li></button>
                                        </form>
                                    </ul>
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
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
    <?= $this->endSection(); ?>