<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>


<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>School Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url(); ?>/">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
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
                    <div class="ml-3 mt-2">
                    Filter
                    </div>
                    <hr />
                    <br>
                    <div class="">
                    Harga
                    </div>
                    <form action="/dashboard_search" method="post">
                        <div class="row">
                            <div class="col-mr-5 p-2 ml-2">
                                <input type="text" id="min" name="min" placeholder="min" style="width:60px">
                            </div>
                            <div class="col-md-2 p-2">
                                <input type="text" id="max" name="max" placeholder="max" style="width:60px">
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-primary btn-sm" type="submit" style="width:135px">Cari</button>
                        </div>  
                    </form>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="/Assets/img/product/discount/pd-1.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    <span>Shoes</span>
                                        <h5><a href="#">Shoes</a></h5>
                                        <div class="product__item__price">Rp 160.000 <span>Rp 200.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="/Assets/img/product/discount/pd-2.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    <span>Stationery</span>
                                        <h5><a href="#">Hat</a></h5>
                                        <div class="product__item__price">Rp 8.000 <span>Rp 10.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="/Assets/img/product/discount/pd-3.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    <span>Stationery</span>
                                        <h5><a href="#">Belt</a></h5>
                                        <div class="product__item__price">Rp 12.000 <span>Rp 15.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="/Assets/img/product/discount/pd-4.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    <span>Stationery</span>
                                        <h5><a href="#">Eraser</a></h5>
                                        <div class="product__item__price">Rp 4.000 <span>Rp 5.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="/Assets/img/product/discount/pd-5.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    <span>Stationery</span>
                                        <h5><a href="#">Pencil</a></h5>
                                        <div class="product__item__price">Rp 8.000 <span>Rp 10.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="/Assets/img/product/discount/pd-6.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    <span>Backpack</span>
                                        <h5><a href="#">Backpack</a></h5>
                                        <div class="product__item__price">Rp 280.000 <span>Rp 350.000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>6</span> Products found</h6>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <!-- <span class="icon_grid-2x2"></span> -->
                                <!-- <span class="icon_ul"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $count = 0; foreach($wishlist as $wish): ?>
                        <?php $count++ ?>
                    <?php endforeach; ?>
                    <?php
                    $no = 1;
                    foreach ($katalog as $ktg) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <?php $sudah = 0;if($ktg['product_found'] == "yes"): ?>
                        <div class="featured__item">
                            <?php echo form_open('home/add');
                                echo form_hidden('id', $ktg['id_produk']);
                                echo form_hidden('price', $ktg['harga_produk']);
                                echo form_hidden('name', $ktg['nama_produk']);
                                //option
                                echo form_hidden('gambar', $ktg['gambar_produk']); 
                                echo form_hidden('berat', $ktg['berat_produk']);?>
                            <div class="featured__item__pic set-bg"
                                data-setbg="/uploads/<?= $ktg['gambar_produk']; ?>">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
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
                                    <?php elseif($count != 0): ?>
                                        <?php foreach($wishlist as $wish): ?>
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
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?= $ktg['nama_produk']; ?></a></h6>
                                <h5><?= "Rp ".number_format($ktg['harga_produk'],0,',','.'); ?></h5>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php
                        $no++;
                    endforeach ?>
                </div>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
</section>
<!-- Product Section End -->

<?= $this->endSection(); ?>
