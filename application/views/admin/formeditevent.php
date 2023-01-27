
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
          
          <form action="" method="POST" id="formEvent">
            <div class="row">
              <div class="col-lg-6">
                <input type="hidden" name="idevent" value="<?php echo $formvalue['idevent'] ?>" id="idevent">
                <div class="form-group">
                  <label>Nama Event</label>
                  <input type="text" name="namaevent" class="form-control" value="<?php echo $formvalue['namaevent'] ?>" id="namaevent">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" id="keterangan" cols="50" rows="10"><?php echo $formvalue['keterangan'];?></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal Event</label>
                  <input type="date" name="tanggalevent" class="form-control" value="<?php echo $formvalue['tanggalevent'] ?>" id="tanggalevent">
                </div>

                <div class="form-group">
                  <input type="submit" value="Simpan" class="btn btn-primary btn-sm"> 
                  <a href="<?php echo base_url(); ?>admin/event"class="btn btn-info btn-sm">Kembali</a>
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
    


   