<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Edit Product Found</h2>
                    <div class="breadcrumb__option">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<div class="container">
    <div class="mt-5">
        <a href="<?= base_url('/Found') ?>"> <button type="button" class="btn btn-success"></i>Back</button></a>
        <div class="py-3">
            <form action="<?= base_url('update') ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id" class="form-label"></label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_files->id; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="image_product" class="form-label">Images</label>
                            <input type="text" class="form-control" id="image_product" name="image_product"
                                value="<?= $data_files->image_product; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="name_product" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name_product" name="name_product"
                                value="<?= $data_files->name_product; ?>">

                        </div>
                        <div class="mb-3">
                            <label for="price_product" class="form-label">Prices</label>
                            <input type="text" class="form-control" id="price_product" name="price_product"
                                value="<?= $data_files->price_product; ?>">

                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
