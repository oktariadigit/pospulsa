<div class=".container-fluid" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: green;border-color: black">
                MENU
              </a>
               <!-- User Panel -->
              <div class="user-panel">
                <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/avatar7.png') ?>" class="img-circle" alt="User Image" />
                </div>
                  <div class="pull-left info">
                <p><b><?php echo $this->session->userdata('username'); ?></b></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!--Coba sidebar-->
            
            <!--Akhir sidebar coba-->

              <!-- Akhir User Panel-->
              <a href="<?php echo base_url() ?>index.php/" class="list-group-item"><i class="fa fa-dashboard"></i> Dashboard</a>
              <a href="<?php echo base_url() ?>transaksi" class="list-group-item"><i class="fa fa-money"></i> Transaksi</a>
              <a href="<?php echo base_url() ?>pembelian" class="list-group-item"><i class="fa fa-cart-plus"></i> Pembelian</a>
              <a href="<?php echo base_url() ?>kategori" class="list-group-item"><i class="fa fa-folder"></i> Kategori</a>
              <a href="<?php echo base_url() ?>nominal" class="list-group-item"><i class="fa fa-folder"></i> Nominal</a>
              <a href="<?php echo base_url() ?>proveder" class="list-group-item"><i class="fa fa-folder"></i> Provider</a>
              <a href="<?php echo base_url() ?>user"    class="list-group-item"><i class="fa fa-user-secret"></i> User</a>
              <a href="<?php echo base_url() ?>laporan" class="list-group-item"><i class="fa fa-money"></i> Laporan Penjualan</a>
              <a href="<?php echo base_url() ?>laporan_pembelian" class="list-group-item"><i class="fa fa-circle"></i> Laporan Pembelian</a>
              <a href="<?php echo base_url() ?>laporan_stok" class="list-group-item"><i class="fa fa-bank"></i> Laporan Stok pulsa</a>
              <a href="<?php echo base_url() ?>laporan_profit" class="list-group-item"><i class="fa fa-paypal"></i> Laporan Profit</a>
               
              <a href="<?php echo base_url() ?>biling" class="list-group-item active" style="text-align: center;background-color: blue;border-color: black" target="_blank" rel="nofollow" title="bilinguser">Form Pembeli</a>
            </div>
        </div>
