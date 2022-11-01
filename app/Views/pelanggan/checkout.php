<?= $this->extend('/layout/template')?>
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
    <div class = "p-5">
        <div class="checkout__form">
            <h4>CHECKOUT</h4>
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
                            <select class="checkout__input__select" id="provinsi">
                                <option>Select Provinsi</option>
                                <?php foreach($provinsi as $p) : ?>
                                    <option value="<?= $p->province_id ?>"><?= $p->province ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="checkout__input">
                            <p>Pilih Kabupaten/Kota<span>*</span></p>
                            <select class="checkout__input__select" id="kabupaten">
                                <option>Select Kabupaten/Kota</option>
                            </select>
                        </div>
                        <div class="checkout__input">
                            <p>Pilih Jasa Pengiriman<span>*</span></p>
                            <select class="checkout__input__select" id="jasa">
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
</div> 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $('document').ready(function(){
        $("#provinsi").on('change', function(){
            var id_province = $(this).val();
            $.ajax({
                url : "<?= base_url('getcity')?>",
                type : 'GET',
                data : {
                    'id_province': id_province,
                },
                dataType : 'json',
                success : function(data){
                    console.log(data);
                    var results = data["rajaongkir"]["results"];
                    for(var i=0; i<results.length; i++)
                    {
                        $('#kabupaten').append($("<option>").val(results[i]['city_id']).text(results[i]['city_name']));
                    }   

                }
            });
        })
    });
</script>
</body>
</html>