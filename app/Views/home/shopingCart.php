<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
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
                        <?php echo form_open('home/update')?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $countCart = 0; $i = 1; ?>
                            <?php $keranjang = $cart->contents(); ?>

                            <?php foreach($keranjang as $pdf ) : ?>
                                <?php 
                                    if($pdf['id'] =! 0){ ?>
                                    <tr>
                                    <td class="shoping__cart__item">
                                        <img class="shoping__cart__item__pic set-bg" data-setbg="/uploads/<?=$pdf['options']['gambar']?>" style="height: 150px; width: 150px;">
                                        <h5><?= $pdf['name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <h5><?= "Rp ".number_format($pdf['price'],0,',','.')?></h5>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="number" min="1" name="qty<?= $i++ ?>" value="<?= $pdf['qty'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__sub__total">
                                    <?= "Rp ".number_format($pdf['subtotal'],0,',','.')?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a  href="<?= base_url('home/delete/'.$pdf['rowid'])?>" class="btn btn-sm btn-danger"><i class="fa fa-trash" style="color:white"></i></a>
                                    </td>
                                </tr>
                            <?php $countCart++; }  ?>
                            <?php endforeach; ?>   
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <button class="primary-btn ">Update Cart</button>
                        <a  href="<?= base_url('home/clear') ?>" class="primary-btn ">Clear Cart</a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <?php $countCart = 0 ?>
                            
                            <?php foreach($keranjang as $pdf ) : ?>
                                <?php if($pdf['id'] =! 0){ ?>
                                    <?php if($countCart == 0): ?>
                                        <li>Subtotal<span><?= "Rp ".number_format($pdf['subtotal'],0,',','.')?></span></li>
                                    <?php elseif($countCart != 0): ?>
                                        <li><span><?= "Rp ".number_format($pdf['subtotal'],0,',','.')?></span></li>
                                    <?php endif; ?>
                                <?php $countCart++; }  ?>
                            <?php endforeach; ?>
                            <?php
                                $keranjang = $cart->contents();
                                $totalCart = 0;
                                foreach ($keranjang as $dps){
                                    $totalCart = $totalCart + $dps['subtotal'];
                                }
                            ?>
                            <li>Total <span><?= "Rp ".number_format($totalCart,0,',','.') ?></span></li>
                        </ul>
                        <?php foreach($keranjang as $pdf ) : ?>
                            <?php if($pdf['id'] =! 0): ?>
                                <a href="/checkout" class="primary-btn">PROCEED TO CHECKOUT</a
                            <?php endif;  ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- Shoping Cart Section End -->

<?= $this->endSection() ?>
