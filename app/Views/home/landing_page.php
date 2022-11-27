<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="/Assets/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>
                                New Arrival
                            </span>
                            <h2>Product <br />100% Originals</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="<?= base_url('shopGrid') ?>" class="primary-btn">SHOP NOW</a>
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
                    <?php $no = 1; foreach($all_data as $all): ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="/Assets/img/categories/<?= $all->images ?>">
                            <form id="input<?= $no ?>" action="/dashboard_kategori" method="get">
                                <input type="hidden" name="kategori" id="kategori" value="<?= $all->id ?>">
                                <h5><a href="javascript:;" onclick="document.getElementById('input<?= $no ?>').submit();"><?= $all->name ?></a></h5>
                            </form>
                            <?php $no++ ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                            <?php $no = 1; foreach($all_data as $all): ?>
                                <li data-filter=".<?= $all->name ?>"><?= $all->name ?></li>
                            <?php endforeach; ?>  

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php $count = 0; foreach($wishlist as $wish): ?>
                    <?php $count++ ?>
                <?php endforeach; ?>
                <?php foreach($featured as $ftr ) : ?>
                    <?php $sudah = 0;
                        if($ftr['featured_produk'] == "yes"){ ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 mix <?= ($ftr['name']) ?>">
                                <div class="featured__item">
                                    <?php echo form_open('home/add');
                                    echo form_hidden('id', $ftr['id_produk']);
                                    echo form_hidden('price', $ftr['harga_produk']);
                                    echo form_hidden('name', $ftr['nama_produk']);
                                    //option
                                    echo form_hidden('gambar', $ftr['gambar_produk']); 
                                    echo form_hidden('berat', $ftr['berat_produk']); ?>
                                    
                                    <div class="featured__item__pic set-bg" data-setbg="/uploads/<?=$ftr['gambar_produk']?>">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="/shopDetails/<?= $ftr['id_produk'] ?>"><i class="fa fa-info"></i></a></li>
                                        <button type="submit"><li type="submit"><i class="fa fa-shopping-cart"></i></a></li></button>
                                        <?php echo form_close(); ?>
                                        <script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>
                                        <?php if($count == 0): ?>
                                            <form action="/add_wishlist" method="post" enctype="multipart/form-data">
                                                <input type="hidden" id="id_produk" name="id_produk" value=<?= $ftr['id_produk'] ?>>
                                                <input type="hidden" id="harga_produk" name="harga_produk" value=<?= $ftr['harga_produk'] ?>>
                                                <input type="hidden" id="nama_produk" name="nama_produk" value=<?= $ftr['nama_produk'] ?>>
                                                <input type="hidden" id="gambar_produk" name="gambar_produk" value=<?= $ftr['gambar_produk'] ?>>
                                                <input type="hidden" id="berat_produk" name="berat_produk" value=<?= $ftr['berat_produk'] ?>>
                                                <button type="submit"><li type="submit"><i class="fa fa-heart-o"></i></a></li></button>
                                            </form>
                                        <?php elseif($count != 0 ): ?>
                                            <?php foreach($wishlist as $wish): ?>
                                                <?php if($wish['id_produk'] == $ftr['id_produk']): ?>
                                                    <form action="/delete_wishlist/<?= $wish['id'] ?>" method="get" enctype="multipart/form-data">
                                                        <button type="submit"><li type="submit"><i class="fa fa-heart"></i></a></li></button>
                                                        <?php $sudah = 1 ?>
                                                    </form>
                                                <?php endif; ?>
                                            <?php endforeach ?>
                                            <?php if($sudah == 0): ?>
                                                <form action="/add_wishlist" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" id="id_produk" name="id_produk" value=<?= $ftr['id_produk'] ?>>
                                                    <input type="hidden" id="hargar_produk" name="harga_produk" value=<?= $ftr['harga_produk'] ?>>
                                                    <input type="hidden" id="nama_produk" name="nama_produk" value=<?= $ftr['nama_produk'] ?>>
                                                    <input type="hidden" id="gambar_produk" name="gambar_produk" value=<?= $ftr['gambar_produk'] ?>>
                                                    <input type="hidden" id="berat_produk" name="berat_produk" value=<?= $ftr['berat_produk'] ?>>
                                                    <button type="submit"><li type="submit"><i class="fa fa-heart-o"></i></a></li></button>
                                                </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </ul>
                                    
                                    </div>
                                </div>
                            </div>
                    <?php  }  ?>
                <?php endforeach; ?>
            </div>
            <div class="product__pagination">
                <?= $pager->links() ?>
                <!-- <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
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
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Latest Product</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                            <?php $count = 0; foreach($wishlist as $wish): ?>
                                <?php $count++ ?>
                            <?php endforeach; ?>
                                <?php foreach($katalog as $ktg): ?>
                                    <?php $sudah = 0; ?>
                                    <div class="col-lg-4">

                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                            data-setbg="/uploads/<?= $ktg['gambar_produk'] ?>">
                                            <?php echo form_open('home/add');
                                            echo form_hidden('id', $ktg['id_produk']);
                                            echo form_hidden('price', $ktg['harga_produk']);
                                            echo form_hidden('name', $ktg['nama_produk']);
                                            //option
                                            echo form_hidden('gambar', $ktg['gambar_produk']); 
                                            echo form_hidden('berat', $ktg['berat_produk']); ?>
                                            
                                            <ul class="product__item__pic__hover">
                                                <li><a href="/shopDetails/<?= $ktg['id_produk'] ?>"><i class="fa fa-info"></i></a></li>
                                                <button type="submit"><li type="submit"><i class="fa fa-shopping-cart"></i></a></li></button>
                                                <?php echo form_close(); ?>
                                                <script src="https://kit.fontawesome.com/72ae031378.js" crossorigin="anonymous"></script>
                                                <?php if($count == 0): ?>
                                                    <form action="/add_wishlist" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" id="id_produk" name="id_produk" value=<?= $ktg['id_produk'] ?>>
                                                        <input type="hidden" id="harga_produk" name="harga_produk" value=<?= $ktg['harga_produk'] ?>>
                                                        <input type="hidden" id="nama_produk" name="nama_produk" value=<?= $ktg['nama_produk'] ?>>
                                                        <input type="hidden" id="gambar_produk" name="gambar_produk" value=<?= $ktg['gambar_produk'] ?>>
                                                        <input type="hidden" id="berat_produk" name="berat_produk" value=<?= $ktg['berat_produk'] ?>>
                                                        <button type="submit"><li type="submit"><i class="fa fa-heart-o"></i></a></li></button>
                                                    </form>
                                                <?php elseif($count != 0 ): ?>
                                                    <?php foreach($wishlist as $wish): ?>
                                                        <?php if($wish['id_produk'] == $ktg['id_produk']): ?>
                                                            <form action="/delete_wishlist/<?= $wish['id'] ?>" method="get" enctype="multipart/form-data">
                                                                <button type="submit"><li type="submit"><i class="fa fa-heart"></i></a></li></button>
                                                                <?php $sudah = 1 ?>
                                                            </form>
                                                        <?php endif; ?>
                                                    <?php endforeach ?>
                                                    <?php if($sudah == 0): ?>
                                                        <form action="/add_wishlist" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" id="id_produk" name="id_produk" value=<?= $ktg['id_produk'] ?>>
                                                            <input type="hidden" id="hargar_produk" name="harga_produk" value=<?= $ktg['harga_produk'] ?>>
                                                            <input type="hidden" id="nama_produk" name="nama_produk" value=<?= $ktg['nama_produk'] ?>>
                                                            <input type="hidden" id="gambar_produk" name="gambar_produk" value=<?= $ktg['gambar_produk'] ?>>
                                                            <input type="hidden" id="berat_produk" name="berat_produk" value=<?= $ktg['berat_produk'] ?>>
                                                            <button type="submit"><li type="submit"><i class="fa fa-heart-o"></i></a></li></button>
                                                        </form>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                            <span><?= $ktg['nama_produk'] ?></span>
                                            <div class="product__item__price"><?= "Rp ".number_format($ktg['harga_produk'],0,',','.')?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
    <?= $this->endSection(); ?>