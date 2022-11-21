<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Update Bukti Bayar</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url(); ?>/">Home</a>
                            <span>Update Bukti Bayar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div class="container">
        <div class="row">
            <form action="/upload_bukti_bayar/<?= $id_order ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">    
                    <?php foreach($checkout as $chc): ?>
                        <img src="/uploads/bukti/<?= $chc['bukti_bayar'] ?>" alt="Girl in a jacket" width="250" height="250">
                    <?php endforeach; ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Masukkan Bukti Bayar</label>
                    <input type="file" class="form-control-file" name="bukti" id="bukti" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>