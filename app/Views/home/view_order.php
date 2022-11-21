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
                                            <a  href="<?= base_url('bukti_bayar/'.$cot['id'])?>" class="btn btn-sm btn-info">Upload Bukti Bayar</a>
                                        <?php elseif($cot['status'] == "Menunggu Pembayaran"): ?>
                                            <a  href="<?= base_url('update_bukti_bayar/'.$cot['id'])?>" class="btn btn-sm btn-info">Update Bukti Bayar</a>
                                        <?php endif; ?>
                                        <a href="/detail_order/<?= $cot["id"] ?> " method="get" class="btn btn-sm btn-warning">Detail</a>
                                        <?php if($cot['status'] == "Menunggu Pembayaran"): ?>
                                            <a  href="<?= base_url('delete_order/'.$cot['id'])?>" class="btn btn-sm btn-danger">Batalkan</a>
                                        <?php elseif($cot['status'] == "Dalam Proses Pengiriman"): ?>
                                            <a  href="<?= base_url('finish_order/'.$cot['id'])?>" class="btn btn-sm btn-danger">Selesai</a>
                                        <?php endif; ?>
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