<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url(); ?>/">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produk</th>
                                    <th>Harga</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php $countCart = 0 ?>
                            <?php foreach($wishlist as $w ) : ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img class="shoping__cart__item__pic set-bg" data-setbg="/uploads/<?=$w['gambar_produk']?>" style="height: 150px; width: 150px;">
                                        <h5><?= $w['nama_produk'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <h5><?= "Rp ".number_format($w['harga_produk'],0,',','.')?></h5>
                                    </td>
                                    <?php echo form_open('home/add');
                                        echo form_hidden('id', $w['id_produk']);
                                        echo form_hidden('price', $w['harga_produk']);
                                        echo form_hidden('name', $w['nama_produk']);
                                        //option
                                        echo form_hidden('gambar', $w['gambar_produk']); 
                                        echo form_hidden('berat', $w['berat_produk']); 
                                        ?>
                                    <td>
                                        <button type="submit"><li type="submit"><i class="fa fa-shopping-cart"></i></a></li></button>
                                        <?php echo form_close(); ?>
                                        <a href="/delete_wishlist/<?= $w["id"] ?> " method="get" class="btn btn-sm btn-danger"><i class="fa fa-trash" style="color:white"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Shoping Cart Section End -->
    <?= $this->endSection(); ?>