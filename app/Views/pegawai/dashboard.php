<?= $this->extend('pegawai/template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="/admin/dashboard">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">

                <?php $count = 0; foreach($checkout as $chc): ?>
                  <?php $count++ ?>
                <?php endforeach; ?>
                <span class="info-box-text">Pesanan Masuk</span>
                <span class="info-box-number">
                  <?= $count ?>
                </span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-store"></i></span>

              <div class="info-box-content">
                <?php $count = 0; foreach($katalog as $ktg): ?>
                  <?php $count++ ?>
                <?php endforeach; ?>
                <span class="info-box-text">Katalog</span>
                <span class="info-box-number"><?= $count ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-credit-card"></i></span>

              <div class="info-box-content">
                <?php $count = 0; foreach($bank as $b): ?>
                  <?php $count++ ?>
                <?php endforeach; ?>
                <span class="info-box-text">Bank</span>
                <span class="info-box-number"><?= $count ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->


          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

        </div>


        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
              </div>
              <!-- /.col -->

              <div class="col-md-6">
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>