
<?php if (empty($this->session->userdata("namapengguna"))) {
  redirect(base_url('login'));
} ?>  


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">

     
        <div class="card-header">

          <h3 class="card-title">Form Penambahan Lowongan kerja</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
           <?php if (validation_errors()) : ?>

              <div class="alert alert-danger" role="alert">
                <span><?php echo validation_errors(); ?></span>
              </div>

            <?php endif;  ?>
          <form method="POST" action="<?php echo base_url(); ?>admin/loker/prosespenambahanloker">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  
                  <label>Masukan Nama Perusahaan</label>
                  <input type="text" name="namaperusaan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Masukan Posisi</label>
                  <input type="text" name="posisi" class="form-control">
                </div>

                <div class="form-group">
                  <label>Masukan Keahlian yang Dibutuhkan</label>
                  <input type="text" name="keterangan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Waktu Batas Pelamaran</label>
                  <input type="date" name="waktubataspelamaran" class="form-control">
                </div>

                <div class="form-group ml-1">
                  <input type="submit" class="btn btn-primary btn-sm" value="simpan">
                  <a href="" class="btn btn-info btn-sm">Kembali</a>
                </div>
              </div>
            </div>
            
          </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    </section>


    <!-- /.content -->
  </div>


    <!-- Main content -->
    


   