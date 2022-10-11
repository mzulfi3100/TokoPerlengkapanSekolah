<?=$this->extend('pelanggan/topnav')?>
<?=$this->section('content')?>
<div class="container">
    <div class="row">
        <?php foreach($katalog as $ktg) : ?>
            <div class="col-sm-3">
                <div class="card text-center" >
                    <div class="card-header">
                        <span class="text-dark"><strong><?= $ktg['nama_produk']?></strong></span>
                    </div>
                    <div class="card-body">
                        <img class="rounded" src="uploads/<?= $ktg['gambar_produk'] ?>" class="card-img-top">
                        <h5 class="mt-3 text-success"><?= "Rp ".number_format($ktg['harga_produk'],0,',','.')?></h5>
                        <h8 class="mt-3 text-primary"><?= "Stok: ".$ktg['stok_produk'] ?></h8>
                    </div>
                    <div class="card-footer">
                        <a href="" style="width:100%" class="btn btn-primary">Beli</a>
                        <a href="" style="width:100%" class="mt-3 btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?=$this->endSection()?>