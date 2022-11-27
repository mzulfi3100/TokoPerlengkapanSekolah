<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Profile</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url('home'); ?>/">Home</a>
                        <a href="/profile">Profile</a>
                        <span>Edit Profile</span>
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
                
            </table>
            <!-- table end -->

        </div>
        <button type="submit" class="site-btn">Update Profile</button>
        </form>
    </div>
</section>
<!-- Checkout Section End -->

<?= $this->endSection(); ?>