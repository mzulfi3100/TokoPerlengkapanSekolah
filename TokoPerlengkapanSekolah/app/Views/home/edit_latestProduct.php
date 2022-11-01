<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Edit Latest Product</h2>
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
        <a href="<?= base_url('/latestProductSection') ?>"> <button type="button"
                class="btn btn-success"></i>Back</button></a>
        <div class="py-3">
            <form action="<?= base_url('latestProduct_update_proses') ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_latest_product" class="form-label"></label>
                            <input type="hidden" class="form-control" id="id_latest_product" name="id_latest_product"
                                value="<?= $data_latestProduct->id_latest_product; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Images</label>
                            <input type="text" class="form-control" id="image_latest" name=""
                                value="<?= $data_latestProduct->image_latest; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name_latest" name="name_latest"
                                value="<?= $data_latestProduct->name_latest; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="price_latest" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price_latest" name="price_latest"
                                value="<?= $data_latestProduct->price_latest; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
