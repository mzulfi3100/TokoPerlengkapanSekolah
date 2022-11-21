<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/Assets/css/styleCategories.css">

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>User List</h2>
                    <div class="breadcrumb__option">

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
        <div class="row">

        </div>
        <div class="admin">
            <h4>User List</h4>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody class="isi">
                    <?php
                    $no = 1;
                    foreach ($users as $u) : ?>
                    <tr>
                        <th scope=" row"><?= $no; ?></th>
                        <td><?= $u->username; ?></td>
                        <td><?= $u->email; ?></td>
                        <td><?= $u->name; ?></td>
                    </tr>
                    <?php
                        $no++;
                    endforeach ?>
                </tbody>
            </table>

</section>
<?= $this->endSection(); ?>
