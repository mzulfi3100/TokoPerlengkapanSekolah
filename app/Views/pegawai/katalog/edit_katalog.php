<div class="p-4">
  <form action="/update_katalog/<?= $id_produk ?>" method="post">
    <div class="form-group">
      <label for="nama_produk">Nama Produk</label>
      <input type="varchar" name="nama_produk" class="form-control" id="nama_produk" value="<?= $nama_produk ?>">
    </div>
    <div class="form-group">
      <label for="kategori_produk">Kategori Produk</label>
      <select class="form-control" name="kategori_produk" id="kategori_produk">
        <option value="<?= $kategori_produk ?>">
          <?php
            if ($kategori_produk == "tas"){
              echo "- Tas -";
            }else if($kategori_produk == "seragam"){
              echo "- Seragam -";
            }else if($kategori_produk == "sepatu"){
              echo "- Sepatu -";
            }else if($kategori_produk == "alat_tulis"){
              echo "- Alat Tulis -";
            }
          ?>
        </option>
        <option value="tas">Tas</option>
        <option value="seragam">Seragam</option>
        <option value="sepatu">Sepatu</option>
        <option value="alat_tulis">Alat Tulis</option>
      </select>
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
    <div class="form-group">
      <label for="featured_produk">Featured Produk</label>
      <select class="form-control" name="featured_produk" id="featured_produk">
        <option value="<?= $featured_produk ?>">
          <?php
            if ($featured_produk == "yes"){
              echo "- Yes -";
            }else if($featured_produk == "no"){
              echo "- No -";
            }
          ?>
        </option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>