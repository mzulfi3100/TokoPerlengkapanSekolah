<?= $this->extend('layout/template')?>
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