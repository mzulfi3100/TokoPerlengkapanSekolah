<div class="p-4">
  <form action="/update_katalog/<?= $id_produk ?>" method="post">
    <div class="form-group">
      <label for="nama_produk">Nama Produk</label>
      <input type="varchar" name="nama_produk" class="form-control" id="nama_produk" value="<?= $nama_produk ?>">
    </div>
    <div class="form-group">
      <label for="harga_produk">Harga Produk</label>
      <input type="int" name="harga_produk" class="form-control" id="harga_produk" value="<?= $harga_produk ?>">
    </div>
    <div class="form-group">
      <label for="stok_produk">Stok Produk</label>
      <input type="int" name="stok_produk" class="form-control" id="stok_produk" value="<?= $stok_produk ?>">
    </div>
    <div class="form-group">
      <label for="deskripsi_produk">Deskripsi Produk</label>
      <input type="varchar" name="deskripsi_produk" class="form-control" id="deskripsi_produk" value="<?= $deskripsi_produk ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>