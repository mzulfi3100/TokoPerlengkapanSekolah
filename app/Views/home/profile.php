<?= $this->extend('/layout/template'); ?>
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
    <div class="row">
        <div class="admin" style="margin: 0 auto">
            <h4>Profile User</h4>

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
                        <td><?= $user['email'] ?>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Username</td>
                        <td><?= $user['username'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Nama Lengkap*</td>
                        <td><?= $profile['nama_lengkap'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>No. Telpon</td>
                        <td><?= $profile['no_telepon'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jenis Kelamin</td>
                        <td><?= $profile['jenis_kelamin'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Alamat</td>
                        <td><?= $profile['alamat'] ?></td>
                    </tr>
                </tbody>

            </table>
            <!-- table end -->
            <a href="/update_profile/<?= user()->id ?>" type="submit" class="site-btn">Edit Profile</a>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?= $this->endSection(); ?>