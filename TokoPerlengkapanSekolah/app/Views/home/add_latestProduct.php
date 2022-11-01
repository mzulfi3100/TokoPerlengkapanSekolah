<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text mb-5">
                    <h2>Add Latest Product</h2>
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
        <a href="<?= base_url('/latestProductSection') ?>"> <button type="button"
                class="btn btn-success"></i>Back</button></a>
        <div class="py-3">
            <form action="<?= base_url('latestProduct_proses') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-md-8">
                        <?php $validation = \Config\Services::validation(); ?>
                        <div class="mb-3">
                            <label for="name_latest" class="form-label">Name</label>
                            <input type="text"
                                class="form-control <?= $validation->hasError('name_latest') ? 'is-invalid' : ''; ?>"
                                id="name_latest" name="name_latest">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name_latest'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="price_latest" class="form-label">Price</label>
                            <input type="text"
                                class="form-control <?= $validation->hasError('price_latest') ? 'is-invalid' : null; ?>"
                                id="price_latest" name="price_latest">
                            <div class="invalid-feedback">
                                <?= $validation->getError('price_latest'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="images_latest" class="form-label">Images</label>
                            <input type="file"
                                class="form-control <?= $validation->hasError('images_latest') ? 'is-invalid' : null; ?>"
                                id="images_latest" name="images_latest">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images_latest'); ?>
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
