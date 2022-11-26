<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Admin</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url(); ?>/">Home</a>
                        <span>Admin</span>
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
            <h4>Admin Details</h4>

            <!-- table begin-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Section</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Categories</td>
                        <td>
                            <a href="<?= base_url('/categoriesSection') ?>"><button type="button"
                                    class="btn btn-info btn-sm"> Detail</button></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Featured Product</td>
                        <td>
                            <a href="<?= base_url('/featuredSection') ?>"><button type="button"
                                    class="btn btn-info btn-sm">Detail</button></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Product Found</td>
                        <td>
                            <a href="<?= base_url('Found') ?>"><button type="button"
                                    class="btn btn-info btn-sm">Detail</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- table end -->
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?= $this->endSection(); ?>