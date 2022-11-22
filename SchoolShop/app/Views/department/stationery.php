<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Stationery</h2>
                    <div class="breadcrumb__option">
                        <!-- <a href="<?= base_url(); ?>/">Home</a>
                        <span>Shop</span> -->
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
                            <li><a href="<?= base_url('stationery') ?>">Stationery</a></li>
                            <li><a href="<?= base_url('uniforms') ?>">Uniforms</a></li>
                            <li><a href="<?= base_url('shoes') ?>">Shoes</a></li>
                            <li><a href="<?= base_url('backpack') ?>">Backpack</a></li>
                            <li><a href="<?= base_url('belt') ?>">Belt</a></li>
                            <li><a href="<?= base_url('tie') ?>">Tie</a></li>
                            <li><a href="<?= base_url('hat') ?>">Hat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="/Assets/img/product/feature-3.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Pencil</a></h6>
                                <h5>Rp 200.000</h5>
                            </div>
                        </div>
                    </div>
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
