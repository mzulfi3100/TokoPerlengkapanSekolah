<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/Assets/css/styleCategories.css">

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Products Found</h2>
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
            <h4>Add Product Found</h4>
            <div class="container mt-5 mb-7">
                <form action="/search_found" method="get">
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
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="isi">
                    <?php
                    foreach ($katalog as $ktg) : ?>
                    <tr>
                        <th scope=" row"><?= $nomor++; ?></th>
                        <td> <img src="/uploads/<?= $ktg['gambar_produk']; ?>" width= "200px" height= "200px" alt=""></img></td>
                        <td><?= $ktg['nama_produk']; ?></td>
                        <td><?= "Rp " . number_format($ktg['harga_produk'],0,',','.'); ?></td>
                        <td>
                            <?php if($ktg['product_found']  == "no"): ?>
                                <a href="<?= base_url('add_product') . '/' . $ktg['id_produk'] ?>"><button type="button"
                                    class="btn btn-primary">
                                    <i class="fa-solid fa-plus"></i></button></a>
                            <?php else: ?>
                                <a href="<?= base_url('delete_product') . '/' . $ktg['id_produk'] ?>"><button type="button"
                                    class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i></button></a>
                            <?php endif; ?>
                            
                            
                        </td>
                    </tr>
                    <?php
                    endforeach ?>
                </tbody>
            </table>
            </div>
        <div class="product__pagination">
            <?= $pager->links('found') ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
