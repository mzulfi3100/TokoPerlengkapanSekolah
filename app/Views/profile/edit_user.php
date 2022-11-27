<?= $this->extend('/layout/template')?>
<?= $this->section('content')?>

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
                            <option class="form-control" value="<?= $jenis_kelamin ?> ">- <?= $jenis_kelamin ?> -</option>
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