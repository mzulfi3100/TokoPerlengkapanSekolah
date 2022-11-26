<?= $this->extend('pegawai/template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Data Katalog</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Katalog</li>
            </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <?php
        if(session()->getFlashData('success')){
        ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
        }
        ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Katalog</h3>
            <div class="text-right">
                <a class="btn btn-primary btn-sm" href="/create_katalog">
                    <i class="fas fa-plus">
                    </i>
                    Tambah Katalog
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 10%">
                            Nama Produk
                        </th>
                        <th style="width: 13%">
                            Kategori Produk
                        </th>
                        <th style="width: 10%">
                            Harga Produk
                        </th>
                        <th style="width: 10%">
                            Berat Produk
                        </th>
                        <th style="width: 15%">
                            Deskripsi Produk
                        </th>
                        <th style="width: 15%">
                            Gambar Produk
                        </th>
                        <th style="width: 10%">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach($katalog as $ktg): ?>
                    <tr>
                        <td>
                            <?= $i++ ?>
                        </td>
                        <td>
                            <a>
                                <?= $ktg['nama_produk'] ?>
                            </a>
                        </td>
                            <td>
                                <?= $ktg['name'] ?>
                            </td>
                        <td>
                            <?= "Rp " . number_format($ktg['harga_produk'],0,',','.');  ?>
                        </td>
                        <td>
                            <?= $ktg['berat_produk']."g" ?>
                        </td>
                        <td>
                            <?= $ktg['deskripsi_produk'] ?>
                        </td>
                        <td>
                            <img src="/uploads/<?= $ktg['gambar_produk'] ?>" widht="100x" height="100px">
                        </td>
                        <td class="project-actions">
                            <a class="btn btn-info btn-sm" href="/edit_katalog/<?= $ktg['id_produk'] ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/delete_katalog/<?= $ktg['id_produk'] ?>" onclick="return confirm('Are you sure ?')">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>