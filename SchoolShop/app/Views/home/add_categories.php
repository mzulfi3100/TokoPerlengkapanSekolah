<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

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
<div class="container">

    <div class="mt-5 mb-5">
        <a href="<?= base_url('/categoriesSection') ?>"> <button type="button"
                class="btn btn-success"></i>Back</button></a>
        <div class="py-3">
            <form action="<?= base_url('categories_proses') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php $validation = \Config\Services::validation(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text"
                                class="form-control <?= $validation->hasError('name') ? 'is-invalid' : null; ?>"
                                id="name" name="name">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Images</label>
                            <input type="file"
                                class="form-control <?= $validation->hasError('images') ? 'is-invalid' : null; ?>"
                                id="images" name="images">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
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
