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
                        <span>Edit Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="p-4">
  <form action="/update_user/<?= $id ?>" method="post">
<section class="checkout spad">
    <div class="container">
        <div class="row">
        </div>
        <div class="admin">
            <h4>Profile User</h4>    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Biodata</th>
                        <th scope="col">Field Column</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><div class = "form-group">
                        <th scope="row">1</th>
                        <td>Nama Lengkap</td>
                        <td><input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $nama_lengkap ?>" ></td>
                        </div>
                    </tr>
                    <tr><div class = "form-group">
                        <th scope="row">2</th>
                        <td>E-Mail</td>
                        <td><input class="form-control" type="text" name="email" id="email" value="<?= $email?>">
                        </td></div>
                    </tr>
                    <tr><div class = "form-group">
                        <th scope="row">3</th>
                        <td>No. Telpon</td>
                        <td><input class="form-control" type="text" name="no_telepon" id="no_telepon" value="<?= $no_telepon ?>"></td>
                        </div>
                    </tr>
                    <tr><div class = "form-group">
                        <th scope="row">4</th>
                        <td>Jenis Kelamin</td>
                        <td><select name="jenis_kelamin" id="jenis_kelamin">
                            <option class="form-control" value="<?= $jenis_kelamin ?> "  >
                            <?php
                            if ($jenis_kelamin == "laki-laki"){
                                echo "- Laki-Laki -";
                            }else if($jenis_kelamin == "perempuan"){
                                echo "- Perempuan -";
                            }
                            ?></option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select></td>    
                        </div>
                    </tr>
                    <tr><div class = "form-group">
                        <th scope="row">5</th>
                        <td>Alamat</td>
                        <td><input class="form-control" type="text" name="alamat" id="alamat" value="<?= $alamat ?>"></td>
                        </div>
                    </tr>
                </tbody>
            </table><div>
            <!-- table end -->
        </div>
        <button type="submit" class="site-btn" >Update Profile</button>
    </div>
</section>
  </form>
</div>
<?= $this->endSection() ?>