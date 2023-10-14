<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vendor</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Jenis</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_produk as $dp) : ?>
                                    <tr>
                                        <td><?= $dp->nama_produk ?></td>
                                        <td>
                                            <?= $dp->nama_jenis ?>
                                        </td>
                                        <td><?= $dp->stock ?></td>
                                        <td><?= $dp->harga ?></td>
                                        <td class="py-1">
                                            <img src="<?= base_url('data/produk/') ?><?= $dp->gambar ?>" alt="image" />
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>