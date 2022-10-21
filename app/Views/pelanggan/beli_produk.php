<?= $this->extend('pelanggan/topnav')?>
<?= $this->section('content')?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>School Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    
    <link rel="stylesheet" href="/Assets/css/css/style.css" type="text/css">
</head>
<body>
<div class="container">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="uploads/penggaris.jpg" style="max-width: 180px; max-height: 180px">
            </div>
            <div class="col-md-9">
            <div class="checkout__card__body">
                <h4 class="checkout__card__title">Penggaris</h4>
                <p class="checkout__card__text__deskripsi">Penggaris dengan panjang 30cm</p>
                <h4 class="chechkout__card__text__harga" >Rp 10.000 </h4>
            </div>
            </div>
        </div>
    </div>
    <div class="checkout__form">
        <h4>Pembelian Produk</h4>
        <form action="#">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="checkout__input">
                        <p>Jumlah Pembelian<span>*</span></p>
                        <input type="number" min="1" placeholder="Jumlah Pembelian">
                    </div>
                    <div class="checkout__input">
                        <p>Alamat<span>*</span></p>
                        <input type="text" placeholder="Jalan" class="checkout__input__add">
                        <input type="text" placeholder="Keterangan (opsional)">
                    </div>
                    <div class="checkout__input">
                        <p>Pilih Provinsi<span>*</span></p>
                        <select class="checkout__input__select">
                            <option>Select Provinsi</option>
                        </select>
                    </div>
                    <div class="checkout__input">
                        <p>Pilih Kabupaten/Kota<span>*</span></p>
                        <select class="checkout__input__select">
                            <option>Select Kabupaten/Kota</option>
                        </select>
                    </div>
                    <div class="checkout__input">
                        <p>Pilih Jasa Pengiriman<span>*</span></p>
                        <select class="checkout__input__select">
                            <option>Select Jasa Pengiriman</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="checkout__order">
                        <h4>Pesananmu</h4>
                        <div class="checkout__order__products">Produk <span>Total</span></div>
                        <ul>
                            <li>Ongkir <span>Rp 15.000</span></li>
                            <li>Harga Produk<span>Rp 200.000</span></li>
                            <li>Jumlah Pembelian<span>5 </span></li>
                        </ul>
                        <div class="checkout__order__subtotal">Total Harga <span>1.015.000</span></div>
                        <button type="submit" class="site-btn">PESAN</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<?= $this->endSection() ?>