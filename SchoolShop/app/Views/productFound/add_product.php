<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

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
<div class="container">

    <div class="mb-5 mt-5">
        <a href="<?= base_url('Found') ?>"> <button type="button" class="btn btn-success"></i>Back</button></a>
        <div class="py-3">
            <form action="<?= base_url('store') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-md-8">
                        <?php $validation = \Config\Services::validation(); ?>
                        <div class="mb-3">
                            <label for="name_product"
                                class="form-label <?= $validation->hasError('name_product') ? 'is-invalid' : null; ?>">Product
                                Name</label>
                            <input type="text" class="form-control" id="name_product" name="name_product">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name_product'); ?>
                            </div>


                        </div>
                        <div class="mb-3">
                            <label for="price_product"
                                class="form-label <?= $validation->hasError('price_product') ? 'is-invalid' : null; ?>">Price</label>
                            <input type="text" class="form-control" id="price_product" name="price_product">
                            <div class="invalid-feedback">
                                <?= $validation->getError('price_product'); ?>
                            </div>


                        </div>
                        <div class="mb-3">
                            <label for="image_product"
                                class="form-label <?= $validation->hasError('image_product') ? 'is-invalid' : null; ?>">Images</label>
                            <input type="file" class="form-control" id="image_product" name="image_product">
                            <div class="invalid-feedback">
                                <?= $validation->getError('image_product'); ?>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </div>
        </div>
    </div>
    </form>

</div>
</div>
</div>

<?= $this->endSection(); ?>
