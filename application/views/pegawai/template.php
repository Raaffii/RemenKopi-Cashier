<?php $this->load->view('pegawai/template/V_header'); ?>

<body>
    <div class="container-scroller">
        <?php $this->load->view('pegawai/template/V_sidebar'); ?>


        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view('pegawai/template/V_navbar'); ?>

            <?php echo $contents; ?>
        </div>
    </div>
    <?php // $this->load->view('kabiro/template/logout'); 
    ?>
    <?php //$this->load->view('kabiro/template/popup'); 
    ?>
    <?php $this->load->view('pegawai/template/popup'); ?>
    <?php $this->load->view('pegawai/template/V_footer'); ?>