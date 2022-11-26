<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

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
                        <form action="#">

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
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form action="/update_profile_process/<?= user()->id ?>" method="post">
        <div class="admin">
            <h4>Edit Profile User</h4>

            <!-- table begin-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Biodata</th>
                        <th scope="col">Field Column</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Email</td>
                        <td><input type="text" name="email" id="email" class="form-control" placeholder="<?= $user['email'] ?>" value="<?= $user['email'] ?>"></td>    
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Username</td>
                        <td><input type="text" name="username" id="username" class="form-control" placeholder="<?= $user['username'] ?>" value="<?= $user['username'] ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Nama Lengkap</td>
                        <td><input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="<?= $profile['nama_lengkap'] ?>" value="<?= $profile['nama_lengkap'] ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>No. Telpon</td>
                        <td><input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="<?= $profile['no_telepon'] ?>" value="<?= $profile['no_telepon'] ?>">
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jenis Kelamin</td>
                        <td><select class="" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="<?= $profile['jenis_kelamin'] ?>"><?= $profile['jenis_kelamin'] ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" id="alamat" class="form-control" placeholder="<?= $profile['alamat'] ?>" value="<?= $profile['alamat'] ?>">
                    </tr>
                </tbody>
                
            </table><div>* Tidak Boleh Kosong</div><div>________________</div>
            <!-- table end -->

        </div>
        <button type="submit" class="site-btn">Update Profile</button>
        </form>
    </div>
</section>
<!-- Checkout Section End -->

<?= $this->endSection(); ?>