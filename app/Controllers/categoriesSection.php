<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/Assets/css/styleCategories.css">

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Categories</h2>
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
            <h4>Categories Details</h4>
            <div class="mt-5">
                <a class="mt-5" href="<?= base_url('add_categories'); ?>"> <button type="button"
                        class="btn btn-success ">Add Data</button></a>
            </div>
            <div class="mt-5 mr-5">
                <form action="/search_categories" method="get">
                    <div class="float-left">
                        <input type="text" name="keyword" value="" class="form-control" style="width:155pt" placeholder="Keyword pencarian">
                    </div>
                    <div class="float-left ml-2">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Images</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="isi">
                    <?php
                    foreach ($all_data as $t) : ?>
                    <tr>
                        <th scope=" row"><?= $nomor++; ?></th>
                        <td> <img src="/Assets/img/categories/<?= $t->images; ?>" alt="" width="200px" height="200px"></img></td>
                        <td><?= $t->name; ?></td>
                        <td>
                            <a href="<?= base_url('edit_categories') . '/' . $t->id ?>"><button type="button"
                                    class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="<?= base_url('delete_categories') . '/' . $t->id ?>"><button type="button"
                                    class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                    <?php
                    endforeach ?>
                </tbody>
            </table>
            </div>
        <div class="product__pagination">
            <?= $pager->links('categories') ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
