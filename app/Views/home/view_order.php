<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/Assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Order</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url(); ?>/">Home</a>
                            <span>Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <div class="container mt-5">
        <form action="/search_order" method="get">
            <div class="float-left">
                <input type="text" name="keyword" value="" class="form-control" style="width:155pt" placeholder="Keyword pencarian">
            </div>
            <div class="float-left ml-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div> 

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No Order</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Batas Bayar</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php $countCart = 0 ?>
                            <?php foreach($checkout as $cot ) : ?>
                                <tr>
                                    <td class="order__item__no" width="1">
                                        <h5><?= $cot['id'] ?></h5>
                                    </td>
                                    <td class="order__item__tgl">
                                        <h5><?= $cot['tgl_pesan'] ?></h5>
                                    </td>
                                    <td class="order__item__tgl">
                                        <h5><?= $cot['batas_bayar'] ?></h5>
                                    </td>
                                    <td class="order__item__price">
                                        <h5><?= "Rp ".number_format($cot['total_keranjang']+$cot['ongkir'],0,',','.')?></h5>
                                    </td>
                                    <td class="order__item__sts">
                                        <h5><?= $cot['status'] ?></h5>
                                    </td>
                                    <td class="order__item__aksi">
                                        <?php if($cot['bukti_bayar'] == null ): ?>
                                            <a  href="<?= base_url('bukti_bayar/'.$cot['id'])?>" class="btn btn-sm btn-info ">
                                            <i class="fa fa-upload" aria-hidden="true"></i></a>
                                        <?php elseif($cot['status'] == "Menunggu Pembayaran"): ?>
                                            <a  href="<?= base_url('update_bukti_bayar/'.$cot['id'])?>" class="btn btn-sm btn-info ">
                                            <i class="fa fa-upload" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                        <a href="/detail_order/<?= $cot["id"] ?> " method="get" class="btn btn-sm btn-warning">
                                        <i class="fa fa-info" aria-hidden="true"></i></a>
                                        <?php if($cot['status'] == "Menunggu Pembayaran"): ?>
                                            <a  href="<?= base_url('delete_order/'.$cot['id'])?>" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <?php elseif($cot['status'] == "Dalam Proses Pengiriman"): ?>
                                            <a  href="<?= base_url('finish_order/'.$cot['id'])?>" class="btn btn-sm btn-danger">
                                            Selesai</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="product__pagination">
                        <?= $pager->links() ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Shoping Cart Section End -->
    <?= $this->endSection(); ?>