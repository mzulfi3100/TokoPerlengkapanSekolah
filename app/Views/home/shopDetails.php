<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Produk Detail</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url(); ?>/">Home</a>
                            <span>Produk Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="/uploads/<?= $katalog['gambar_produk'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?= $katalog['nama_produk'] ?></h3>
                        <div class="product__details__price"><?= "Rp " . number_format($katalog['harga_produk'],0,',','.'); ?></div>
                        <p><?= $katalog['deskripsi_produk'] ?></p>
                        <?php echo form_open('home/adds');
                        echo form_hidden('id', $katalog['id_produk']);
                        echo form_hidden('price', $katalog['harga_produk']);
                        echo form_hidden('name', $katalog['nama_produk']);
                        //option
                        echo form_hidden('gambar', $katalog['gambar_produk']); 
                        echo form_hidden('berat', $katalog['berat_produk']); ?>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" min="1" name="qty">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="primary-btn">ADD TO CARD</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <?= $this->endSection(); ?>