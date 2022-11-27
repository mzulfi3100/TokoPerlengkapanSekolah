<?= $this->extend('pegawai/template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Data Bank</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Bank</li>
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
            <h3 class="card-title">Data Bank</h3>
            <div class="text-right">
                <a class="btn btn-primary btn-sm" href="/create_bank">
                    <i class="fas fa-plus">
                    </i>
                    Tambah Bank
                </a>
            </div>
        </div>
        <div class="card-header">
            <form action="/search_bank" method="get">
                <div class="float-left">
                    <input type="text" name="keyword" value="" class="form-control" style="width:155pt" placeholder="Keyword pencarian">
                </div>
                <div class="float-left ml-2">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
            </form> 
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 10%">
                            Nama Bank
                        </th>
                        <th style="width: 10%">
                            No Rekening
                        </th>
                        <th style="width: 10%">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($bank as $b): ?>
                    <tr>
                        <td>
                            <?= $nomor++?>
                        </td>
                        <td>
                            <a>
                                <?= $b['nama_bank'] ?>
                            </a>
                        </td>
                        <td>
                            <?= $b['no_rek'] ?>
                        </td>
                        <td class="project-actions">
                            <a class="btn btn-info btn-sm" href="/edit_bank/<?= $b['id'] ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/delete_bank/<?= $b['id'] ?>" onclick="return confirm('Are you sure ?')">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="ml-4">
            <?= $pager->links('bank', 'bootstrap_pagination') ?>
        </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>