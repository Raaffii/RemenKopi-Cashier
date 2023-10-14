<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #F8F5F2;">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="<?= base_url('assets/img_remen/remenkopi.svg') ?>" alt="profile" />

                    <!--change to offline or busy as needed-->
                    <?php $akun = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); ?>
                </div>
                <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center"><?= $akun['nama_user'] ?></span>
                    <span class="font-weight-semibold mb-1 mt-2 text-center">Pegawai</span>
                </div>
            </a>
        </li>

        <li class="pt-2 pb-1">
            <span class="nav-item-head">List</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pegawai/kasir') ?>">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Kasir</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pegawai/vendor') ?>">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Vendor</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Event</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="mdi mdi-chart-bar menu-icon"></i>
                <span class="menu-title">Stok Barang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">History Penjualan</span>
            </a>
        </li>
        <li class="nav-item pt-3">
            <a class="nav-link" href="<?= base_url('pegawai/laporanpenjualan') ?>">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Laporan Penjualan</span>
            </a>
        </li>
    </ul>
</nav>