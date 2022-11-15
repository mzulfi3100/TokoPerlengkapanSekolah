<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Edit Categories</h2>
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
        <a href="<?= base_url('/categoriesSection') ?>"> <button type="button"
                class="btn btn-success"></i>Back</button></a>
        <div class="py-3">
            <form action="<?= base_url('categories_update_proses') ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_categories" class="form-label"></label>
                            <input type="hidden" class="form-control" id="id_categories" name="id_categories"
                                value="<?= $data_categories->id; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="images" class="form-label">Images</label>
                            <input type="text" class="form-control" id="images" name="images"
                                value="<?= $data_categories->images; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="images" class="form-label">Images</label>
                            <input type="file" class="form-control" id="images" name="images"
                                value="<?= $data_categories->images; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="<?= $data_categories->name; ?>">

                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
