<?= $this->extend('/layout/template')?>
<?= $this->section('content')?>
<!doctype html>
<html>
<head>
</head>
<body>
    <div class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2 bg-light bg-white">
                <div class="ml-3 mt-2">
                    Filter
                </div>
                <hr />
                <br>
                
                <div class="ml-3">
                    Harga
                </div>
                <form action="/dashboard_search" method="post">
                    <div class="row ml-2">
                        <div class="col-mr-5 p-2">
                            <input type="text" id="min" name="min" placeholder="min" style="width:60px">
                        </div>
                        <div class="col-md-2 p-2">
                            <input type="text" id="max" name="max" placeholder="max" style="width:60px">
                        </div>
                    </div>
                    <div class="ml-3">
                        <button class="btn btn-primary btn-sm" type="submit" style="width:135px">Cari</button>
                    </div>  
                </form>
            </div>
           
            <?php foreach($katalog as $ktg) : ?>
                <div class="col-sm-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <span class="text-dark"><strong><?= $ktg['nama_produk']?></strong></span>
                        </div>
                        <div class="card-body">
                            <img class="rounded" style="max-width : 200px " src="uploads/<?= $ktg['gambar_produk'] ?>" class="card-img-top">
                            <h5 class="mt-3 text-success"><?= "Rp ".number_format($ktg['harga_produk'],0,',','.')?></h5>
                            <h8 class="mt-3 text-primary"><?= "Stok: ".$ktg['stok_produk'] ?></h8>
                        </div>
                        <div class="card-footer">
                            <?php echo form_open('home/add');
                                echo form_hidden('id', $ktg['id_produk']);
                                echo form_hidden('price', $ktg['harga_produk']);
                                echo form_hidden('name', $ktg['nama_produk']);
                                //option
                                echo form_hidden('gambar', $ktg['gambar_produk']); ?>
                                <button type="submit" class="mt-3 btn-success" style="width:100%">Tambah Keranjang</button>
                            <?php echo form_close(); ?>
                            <form action="/add_wishlist" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="id_produk" name="id_produk" value=<?= $ktg['id_produk'] ?>>
                                <input type="hidden" id="harga_produk" name="harga_produk" value=<?= $ktg['harga_produk'] ?>>
                                <input type="hidden" id="nama_produk" name="nama_produk" value=<?= $ktg['nama_produk'] ?>>
                                <input type="hidden" id="gambar_produk" name="gambar_produk" value=<?= $ktg['gambar_produk'] ?>>
                                <button type="submit" class="mt-3 btn-success" style="width:100%">Tambah Wishlist</button>
                                <a href="/shopDetails" style="width:100%" class="mt-3 btn btn-success">Detail</a>
                            </form>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</body>
<?= $this->endSection() ?>
