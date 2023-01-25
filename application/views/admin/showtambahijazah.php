
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

          <h3 class="card-title">Halaman Show tambah ijazah</h3>


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
          
          <form action="<?php echo base_url() ?>admin/ijazah/tambahpengambilanijazah" method="POST">
            <div class="form-group">
              <label>Nama Alumni</label>
              <select class="custom-select" name="idalumni">
                <option>Open this select menu</option>
              <?php foreach ($alumni as $alm) : ?>
                <option value="<?php echo $alm['idalumni'] ?>"><?php echo $alm['namaalumni'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
             <label>Status Pengambilan</label>
             <select class="custom-select" name="statuspengambilan">
                <option>Open this select menu</option>
                <option value="Sudah mengambil">Sudah mengambil</option>
                <option value="Belum mengambil">Belum mengambil</option>
              </select>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
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
    


   