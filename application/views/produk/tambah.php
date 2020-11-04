<div class="container">

    <div class="row mt-3">
        <div class="col">
            <h4>Form Tambah Data Produk</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url('produk/tambah') ?>" method="post">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan nama barang" value="<?= set_value('nama_produk') ?>">
                    <small class="form-text text-danger"><?= form_error('nama_produk') ?></small>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan nama barang" value="<?= set_value('harga') ?>">
                    <small class="form-text text-danger"><?= form_error('harga') ?></small>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan nama barang" value="<?= set_value('jumlah') ?>">
                    <small class="form-text text-danger"><?= form_error('jumlah') ?></small>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="3"><?= set_value('jumlah') ?></textarea>
                    <small class="form-text text-danger"><?= form_error('keterangan') ?></small>
                </div>
                <button type="submit" class="btn btn-primary">Tambah barang</button>
            </form>
        </div>
    </div>

</div>