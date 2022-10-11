<div class="p-3">
<?php $validation =  \Config\Services::validation(); ?>
  <form action="/store_katalog" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama_produk">Nama Produk</label>
      <input type="varchar" name="nama_produk" class="form-control" id="nama_produk" >
    </div>
    <div class="form-group">
      <label for="harga_produk">Harga Produk</label>
      <input type="int" name="harga_produk" class="form-control" id="harga_produk" >
    </div>
    <div class="form-group">
      <label for="stok_produk">Stok Produk</label>
      <input type="int" name="stok_produk" class="form-control" id="stok_produk" >
    </div>
    <div class="form-group">
      <label for="deskripsi_produk">Deskripsi Produk</label>
      <textarea type="textarea" name="deskripsi_produk" class="form-control" id="deskripsi_produk" ></textarea>
    </div>
    <div class="form-group">
      <label for="image">Upload Gambar</label>
      <input type="file" name="image" class="form-control" id="image">
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>