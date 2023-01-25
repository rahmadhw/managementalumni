
<?php if (empty($this->session->userdata("namapengguna"))) {
  redirect(base_url('admin/login'));
} ?>  


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    




     <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">
       
     
        <div class="card-header">

          <h3 class="card-title">Halaman Edit Alumni</h3>

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

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo validation_errors(); ?></strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <?php endif; ?>
          <form action="<?php echo base_url(); ?>admin/alumni/proseseditalumni" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Nama Alumni</label>
                  <input type="text" name="namaalumni" class="form-control" value="<?php echo $edit[0]['namaalumni']; ?>">
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" value="<?php echo $edit[0]['jurusan']; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $edit[0]['alamat']; ?>">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomortelepon" class="form-control" value="<?php echo $edit[0]['nomortelepon']; ?>">
                </div>
                <div class="form-group">
                  <label>Tahun Masuk</label>
                  <input type="number" name="tahunmasuk" class="form-control" value="<?php echo $edit[0]['tahunmasuk']; ?>">
                </div>
                <div class="form-group">
                  <label>Tahun Tamat</label>
                  <input type="number" name="tahuntamat" class="form-control" value="<?php echo $edit[0]['tahuntamat']; ?>">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label>Hobi</label>
                  <input type="text" name="hobi" class="form-control" value="<?php echo $edit[0]["hobi"]; ?>">
                </div>
                <div class="form-group">
                  <label>Program Keahlian</label>
                  <input type="text" name="programkeahlian" class="form-control" value="<?php echo $edit[0]['programkeahlian']; ?>">
                </div>
                <div class="form-group">
                  <label>Status Pekerjaan</label>
                  <select class="custom-select custom-select-sm" name="idstatus">
                    <option value="<?php echo $edit[0]['idstatus'] ?>"><?php echo $edit[0]['namastatus']; ?></option>
                  <?php foreach($status as $st) : ?>
                    <option value="<?php echo $st['idstatus'] ?>"><?php echo $st['namastatus'] ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
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
    


   