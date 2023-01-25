
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

          <h3 class="card-title">Halaman Pendaftaran alumni</h3>

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
          <form method="POST" action="<?php echo base_url() ?>daftaralumni/prosespendaftaran">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <?php if (validation_errors()) : ?>

                    <div class="alert alert-danger" role="alert">
                      <span><?php echo validation_errors(); ?></span>
                    </div>

                  <?php endif;  ?>
                  <label>Masukan Nama Lengkap</label>
                  <input type="text" name="namaalumni" class="form-control">
                </div>

                <div class="form-group">
                  <label>Masukan Jurusan Anda</label>
                  <input type="text" name="jurusan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Masukan Alamat Anda</label>
                  <input type="text" name="alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>Masukan Nomor Telepon</label>
                  <input type="text" name="nomortelepon" class="form-control">
                </div>
                <div class="form-group">
                  <label>Masukan tahun Masuk</label>
                  <input type="text" name="tahunmasuk" class="form-control">
                </div>
                <div class="form-group">
                  <label>Masukan tahun Tamat</label>
                  <input type="text" name="tahuntamat" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">

                <div class="form-group">
                  <label>Masukan hobi</label>
                  <input type="text" name="hobi" class="form-control">
                </div>

                 <div class="form-group">
                  <label>Masukan Program Keahlian</label>
                  <input type="text" name="programkeahlian" class="form-control">
                </div>

                <div class="form-group">
                  <label>Status Pekerjaan</label>
                  <input type="text" name="statuspekerjaan" class="form-control">
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
    


   