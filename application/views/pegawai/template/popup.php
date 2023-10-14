   <!-- Logout Modal-->
   <div class="modal fade" id="pilihdivisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

       <div class="modal-dialog" role="">
           <div class="modal-content">
               <div class="modal-header">
                   <?php global $usernameglobal;
                    $username = $usernameglobal;
                    $cek = 1;
                    ?>
                   <h4>Pilih Divisi</h4>
                   <br>

                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>

                   </button>

               </div>
               <?php $akun = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); ?>
               <div class="card-body">
                   <h6>Konfirmasi Pembayaran ?</h6>
                   <form class="forms-sample" method="post" action="<?= base_url('pegawai/konfirmasipembayaran/'); ?>" enctype="multipart/form-data">
                       <div class="form-group">

                           <input type="hidden" name="id" value="<?= $akun['id_user']; ?>" />
                       </div>
                       <button type="submit" class="btn btn-dark mr-2">Ok</button>
                       <button class="btn btn-light">Cancel</button>
                   </form>
               </div>
           </div>
       </div>
   </div>