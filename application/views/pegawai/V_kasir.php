<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="1 or 2" style="display: flex;">
            <div class="1">
                <div class="row">
                    <div class="col-sm-4 stretch-card grid-margin" style="width: 800px;">
                        <div class="card" style="background-color:  #F8F5F2;">
                            <div class="card-body">
                                <label for="exampleInputName1">Kasir</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Search" />
                            </div>
                        </div>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic example" style="width: 800px; margin-bottom:20px;">
                        <button type=" button" class="btn btn-primary" style="background-color:  #B2533E"> Minuman </button>
                        <button type="button" class="btn btn-primary" style="background-color:  #B2533E"> Makanan </button>
                        <button type="button" class="btn btn-primary" style="background-color:  #B2533E"> Main Course </button>
                        <button type="button" class="btn btn-primary" style="background-color:  #B2533E"> Desert </button>
                    </div>

                </div>


                <div class="row">
                    <?php foreach ($data_produk as $dp) : ?>
                        <a class="col-sm-4 stretch-card grid-margin" style="width: 200px;" href="<?= base_url('pegawai/inputkasir/') . $dp->id_produk ?>">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img class="img-fluid w-100" src="<?= base_url() ?>/data/produk/<?= $dp->gambar ?>" alt="" />
                                </div>
                                <div class="card-body px-3 text-dark">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted font-13 mb-0"><?= $dp->nama_jenis ?></p>
                                        <i class="mdi mdi-heart-outline"></i>
                                    </div>
                                    <h5 class="font-weight-semibold"> <?= $dp->nama_produk ?> </h5>
                                    <div class="d-flex justify-content-between font-weight-semibold">

                                        <p class="mb-0">Rp. <?= $dp->harga ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php endforeach ?>


                </div>
            </div>
            <div class="2">
                <div class="card" style="width: 420px;">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Harga</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Product</th>
                                        <th>Sale</th>
                                        <th>Status</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total_harga = 0; ?>
                                    <?php $no = 0; ?>
                                    <?php foreach ($data_kasir as $dk) : ?>
                                        <tr>
                                            <td><?= ++$no ?></td>
                                            <td><?= $dk->nama_produk ?></td>
                                            <td class="text-danger"><?= $dk->harga ?></td>
                                            <td>
                                                <label class="badge badge-danger">Belum tebayar</label>
                                            </td>
                                            <td><a type="button" class="btn btn-inverse btn-icon" href="<?= base_url('pegawai/hapustransaksi/') . $dk->id_transaksi ?>">
                                                    <i class="mdi mdi-delete"></i>
                                                </a></td>
                                        </tr>
                                        <?php $total_harga = $dk->harga + $total_harga; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div><br>
                        <div style="display: flexbox;">
                            <a style="margin-right:5px" data-toggle="modal" data-target="#pilihdivisi" type="button" class="btn btn-primary btn-fw" href="">
                                Simpan
                            </a>
                            <label>Total : <?= $total_harga ?></label>
                            <p></p>
                            <a style="margin-right:5px" data-toggle="modal" data-target="#pilihdivisi" type="button" class="btn btn-danger btn-fw" href="">
                                Hapus Semua
                            </a>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>