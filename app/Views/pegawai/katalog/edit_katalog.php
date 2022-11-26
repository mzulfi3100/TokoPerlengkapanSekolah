<?= $this->extend('pegawai/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pegawai/dashboard">Home</a></li>
              <li class="breadcrumb-item "><a href="/list_katalog">Data Katalog</a></li>
              <li class="breadcrumb-item active">Edit Data Katalog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form action="/update_katalog/<?= $id_produk ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?= $nama_produk ?>">
                  </div>
                  <div class="form-group">
                    <label for="kategori_produk">Kategori Produk</label>
                    <select class="form-control" name="kategori_produk" id="kategori_produk">
                      <option value="<?= $id_kategori ?>">
                      <?php foreach($all_data as $all): ?>
                        <?php if($all->id == $id_kategori): ?>
                          <?= "- ".$all->name." -" ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </option>
                      <?php foreach($all_data as $all): ?>
                        <option value="<?= $all->id ?>"><?= $all->name ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="harga_produk">Harga Produk</label>
                    <input type="number" name="harga_produk" class="form-control" id="harga_produk" value="<?= $harga_produk ?>">
                  </div>
                  <div class="form-group">
                    <label for="berat_produk">Berat Produk</label>
                    <input type="number" name="berat_produk" class="form-control" id="berat_produk" value="<?= $berat_produk ?>">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi_produk">Deskripsi Produk</label>
                    <input type="extt" name="deskripsi_produk" class="form-control" id="deskripsi_produk" value="<?= $deskripsi_produk ?>">
                  </div>
                  <img src="/uploads/<?= $gambar_produk ?>" widht="200px" height="200px">
                  <div class="form-group">
                    <label for="exampleInputFile">Masukkan Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="p-4">
<form action="/update_katalog/<?= $id_produk ?>" method="post" enctype="multipart/form-data">
  <div class="card-body">
    <div class="form-group">
      <label for="nama_produk">Nama Produk</label>
      <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?= $nama_produk ?>">
    </div>
    <div class="form-group">
      <label for="kategori_produk">Kategori Produk</label>
      <select class="form-control" name="kategori_produk" id="kategori_produk">
        <option value="<?= $id_kategori ?>">
        <?php foreach($all_data as $all): ?>
          <?php if($all->id = $id_kategori): ?>
            <?= $all->name ?>
          <?php endif; ?>
        <?php endforeach; ?>
        </option>
        <?php foreach($all_data as $all): ?>
          <option value="<?= $all->id ?>"><?= $all->name ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="harga_produk">Harga Produk</label>
      <input type="number" name="harga_produk" class="form-control" id="harga_produk" value="<?= $harga_produk ?>">
    </div>
    <div class="form-group">
      <label for="berat_produk">Berat Produk</label>
      <input type="number" name="berat_produk" class="form-control" id="berat_produk" value="<?= $berat_produk ?>">
    </div>
    <div class="form-group">
      <label for="deskripsi_produk">Deskripsi Produk</label>
      <input type="extt" name="deskripsi_produk" class="form-control" id="deskripsi_produk" value="<?= $deskripsi_produk ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Masukkan Gambar</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="image">
          <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
<?= $this->endSection() ?>