
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
          
          <form action="<?php echo base_url() ?>admin/alumni/proseseditallalumni" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <input type="hidden" name="idtbalumni" value="<?php echo $ambil[0]['idtbalumni']; ?>">
                <div class="form-group">
                  <label>Nama Alumni</label>
                  <input type="text" name="namaalumni" class="form-control" value="<?php echo $ambil[0]['namaalumni'] ?>">
                </div>
                <div class="form-group">
                  <label>Jurusan Alumni</label>
                  <input type="text" name="jurusanalumni" class="form-control" value="<?php echo $ambil[0]['jurusanalumni']; ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="custom-select custom-select" name="idjeniskelamin">
                  <?php foreach($jeniskelamin as $jns) :  ?>
                    <?php if ($jns['idjeniskelamin'] == $ambil[0]['idjeniskelamin']) :  ?>
                    <option value="<?php echo $jns['idjeniskelamin'] ?>" selected><?php echo $jns['nama']; ?></option>
                    <?php else : ?>
                       <option value="<?php echo $jns['idjeniskelamin'] ?>"><?php echo $jns['nama']; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                 
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                <textarea class="form-control" name="alamat" id="msgpost" cols="50" rows="10"><?php echo $ambil[0]['alamat'];?></textarea>
                </div>
                
                <div class="form-group">
                  <label>Tahun</label>
                  <select class="custom-select custom-select" name="idtahun">
                <?php foreach ($tahun as $thn) : ?>
                  <?php if ($thn['idtahun'] == $ambil[0]['idtahun']) : ?>
                    <option value="<?php echo $thn['idtahun']; ?>"selected><?php echo $thn['tahun']; ?></option>
                  <?php else : ?>
                    <option value="<?php echo $thn['idtahun']; ?>"><?php echo $thn['tahun']; ?></option>
                  <?php endif; ?>
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
    


   