<?= $this->extend('/layout/template')?>
<?= $this->section('content')?>


<!-- Hero Section Begin -->
<section class="hero hero-normal">
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

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Profile</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url('home'); ?>/">Home</a>
                        <span>Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-4">
    <!-- <a href="/create_user" type="button" class="btn btn-primary mb-3">Tambah </a> -->
    <h4>Profile User</h4> 
    <table class="table table-striped p-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Username</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($userProfile as $up) : ?>
            <tr>
                <th scope="row"> <?= $no ?> </th>
                <td><?= $up['email'] ?></td>
                <td><?= $up['username'] ?></td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/edit_user/<?= $up['id'] ?>">Edit</a>
                            <form action="/delete_user/<?= $up['id'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </div>
                </td>
            </tr>
            <?php $no++; endforeach;?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>