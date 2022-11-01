<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/Assets/css/styleCategories.css">

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Product Found</h2>
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
            <h4>Product Found Details</h4>
            <div class="mt-5">
                <a class="mt-5" href="<?= base_url('add_product'); ?>"> <button type="button"
                        class="btn btn-success ">Add Data</button></a>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Images</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="isi">
                    <?php
                    $no = 1;
                    foreach ($file as $f) : ?>
                    <tr>
                        <th scope=" row"><?= $no; ?></th>

                        <td> <img class="pictures" src="/Assets/img/product/<?= $f->image_product; ?>" alt=""
                                width="200px"></img>
                        </td>

                        <td><?= $f->name_product; ?></td>
                        <td><?= $f->price_product; ?></td>
                        <td>
                            <a href="<?= base_url('edit_product') . '/' . $f->id ?>"><button type="button"
                                    class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="<?= base_url('delete_Product') . '/' . $f->id ?>"><button type="button"
                                    class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                    <?php
                        $no++;
                    endforeach ?>
                </tbody>
            </table>

</section>
<?= $this->endSection(); ?>
