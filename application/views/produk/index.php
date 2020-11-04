<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data Produk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-4">
            <h1>Data Produk</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="<?= base_url('produk/tambah') ?>" class="btn btn-sm btn-primary">Tambah data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                <?php $z = 1; ?>
                <?php foreach ($barang as $brg) : ?>
                    <tr>
                        <td><?= $z++ ?></td>
                        <td><?= $brg['nama_produk'] ?></td>
                        <td><?= $brg['harga'] ?></td>
                        <td><?= $brg['jumlah'] ?></td>
                        <td><?= $brg['keterangan'] ?></td>
                        <td>
                            <a href="<?php base_url('') ?>ubah/<?= $brg['id'] ?>" class=" btn btn-sm text-white btn-warning">Ubah</a>
                            <a href="<?php base_url(); ?>hapus/<?= $brg['id'] ?>" onclick="return confirm('Yakin ?')" class="btn btn-sm text-white btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>