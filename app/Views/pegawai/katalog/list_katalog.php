<div class="p-4">
    <a href="/create_katalog" type="button" class="btn btn-primary mb-3">Tambah </a>
    <table class="table table-striped p-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Harga Produk</th>
                <th scope="col">Stok Produk</th>
                <th scope="col">Deskripsi Produk</th>
                <th scope="col">Featured Produk</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($katalog as $ktg) : ?>
            <tr>
                <th scope="row"> <?= $no ?> </th>
                <td><?= $ktg['nama_produk'] ?></td>
                <td><?= $ktg['kategori_produk'] ?></td>
                <td><?= $ktg['harga_produk'] ?></td>
                <td><?= $ktg['stok_produk'] ?></td>
                <td><?= $ktg['deskripsi_produk'] ?></td>
                <td><?= $ktg['featured_produk'] ?></td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/edit_katalog/<?= $ktg['id_produk'] ?>">Edit</a>
                            <form action="/delete_katalog/<?= $ktg['id_produk'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </div>
                </td>
            </tr>
            <?php $no++; endforeach;?>
        </tbody>
    </table>
</div>