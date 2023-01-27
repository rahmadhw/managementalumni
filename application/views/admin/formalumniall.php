
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

          <h3 class="card-title">Form Penambahan Data Alumni</h3>

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
          <form method="POST" action="<?php echo base_url(); ?>admin/alumni/prosespenambahanallalumni">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  
                  <label>Masukan Nama Alumni</label>
                  <input type="text" name="namaalumni" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jurusan Alumni</label>
                  <input type="text" name="jurusanalumni" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                 <select class="custom-select custom-select form-control" name="idjeniskelamin">
                    <option value="">=== Silakan Pilih ===</option>
                  <?php foreach ($ambil as $amb) : ?>
                    <option value="<?php echo $amb['idjeniskelamin']; ?>"><?php echo $amb['nama']; ?></option>
                  <?php endforeach; ?>
                   
                  </select>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                <textarea name="alamat" class="form-control"> </textarea>
                </div>

                <div class="form-group">
                  <label>Tahun</label>
                  <select class="custom-select custom-select form-control" name="idtahun">
                    <option value="">=== Silakan Pilih ===</option>
                  <?php foreach($all as $ls) :  ?>
                    <option value="<?php echo $ls['idtahun']; ?>"><?php echo $ls['tahun'] ?></option>
                    <?php endforeach;  ?>
                    </select>
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
    


   