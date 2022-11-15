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
                <?php
                foreach ($all_data as $t) : ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/Assets/img/categories/<?= $t->images; ?>" name="images">

                            <h5><a href="#"><?= $t->name; ?></a></h5>
                        </div>
                    </div>
                <?php
                endforeach ?>

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
                        <li data-filter=".stationery">Stationery</li>
                        <li data-filter=".uniform">Uniform</li>
                        <li data-filter=".backpack">Backpack</li>
                        <li data-filter=".belt">Belt</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-1.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Shoes</a></h6>
                        <h5>Rp 300.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix backpack">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-2.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Backpack</a></h6>
                        <h5>Rp 250.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-3.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Pencil</a></h6>
                        <h5>Rp 5.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery belt">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-4.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Belt</a></h6>
                        <h5>Rp 30.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-5.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Pen</a></h6>
                        <h5>Rp 3.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-6.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Elementary School Hat</a></h6>
                        <h5>Rp 10.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-7.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Junior High School Hat</a></h6>
                        <h5>Rp 10.500</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix stationery">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/Assets/img/featured/feature-8.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Senior High School Hat</a></h6>
                        <h5>Rp 11.500</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container mb-5">
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



<?= $this->endSection(); ?>