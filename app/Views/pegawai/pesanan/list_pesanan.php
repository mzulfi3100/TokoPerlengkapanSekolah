<?= $this->extend('pegawai/template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Data Pesanan Masuk</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Pesanan Masuk</li>
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
            <h3 class="card-title">Data Pesanan Masuk</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 1%">
                            Nama
                        </th>
                        <th style="width: 13%">
                            Alamat
                        </th>
                        <th style="width: 8%">
                            Provinsi
                        </th>
                        <th style="width: 8%">
                            Kabupaten
                        </th>
                        <th style="width: 8%">
                            Jasa Pengiriman
                        </th>
                        <th style="width: 12%">
                            Total
                        </th>
                        <th style="width: 8%">
                            Status
                        </th>
                        <th style="width: 10%">
                            Bukti Bayar
                        </th>
                        <th style="width: 15%">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach($checkout as $chc): ?>
                    <tr>
                        <td>
                            <?= $i++ ?>
                        </td>
                        <td>
                            <a>
                                <?= $chc['nama'] ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?= $chc['alamat'] ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?= $chc['nama_provinsi'] ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?= $chc['nama_kabupaten'] ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?= $chc['service'] ?>
                            </a>
                        </td>
                        <td>
                            <?= "Rp ".number_format($chc['total_keranjang']+$chc['ongkir'],0,',','.') ?>
                        </td>
                        <td>
                            <?= $chc['status'] ?>
                        </td>
                        <td>
                            <?php if($chc['bukti_bayar'] != null): ?>
                                <img src="/uploads/bukti/<?= $chc['bukti_bayar'] ?>" alt="" width="100" height="100">
                            <?php else: ?>
                                Belum Upload
                            <?php endif; ?>
                        </td>
                        <td class="project-actions">
                            <a href="#" method="post" class="btn btn-sm btn-primary btn-edit" data-id="<?= $chc['id']; ?>" data-status="<?= $chc['status']; ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/detail_pesanan/<?= $chc["id"] ?> " method="get" class="btn btn-sm btn-warning">
                                <i class="fas fa-info"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/delete_pesanan/<?= $chc['id'] ?>" onclick="return confirm('Are you sure ?')">
                                <i class="fas fa-trash"></i>
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
    <!-- Modal Edit Product-->
    <form action="/status_pesanan" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Status Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 
                <div class="form-group">
                    <label>Status Pesanan</label>
                    <select name="status" id="status" class="form-control status">
                    </select>
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
$(document).ready(function(){
    $('.btn-edit').on('click',function(){
        // get data from button edit
        const id = $(this).data('id');
        console.log(id);
        const status = $(this).data('status');
        console.log(status);
        // Set data to Form Edit
        $('.id').val(id);
        $('#status').append($("<option>").val(status).text(("- "+status+" -")));
        $('#status').append($("<option>").val("Gagal").text(("Gagal")));
        $('#status').append($("<option>").val("Dalam Proses Pengemasan").text(("Dalam Proses Pengemasan")));
        $('#status').append($("<option>").val("Dalam Proses Pengiriman").text(("Dalam Proses Pengiriman")));
        $('#status').append($("<option>").val("Selesai").text(("Selesai")));
        // Call Modal Edit
        $('#editModal').modal('show');
    });
});
</script>
<?= $this->endSection() ?>