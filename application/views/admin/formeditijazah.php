
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

          <h3 class="card-title">Halaman Edit ijazah</h3>

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
          
          <form action="" method="POST" id="formeditevent">
            <input type="hidden" name="idijazah" value="<?php echo $editijazah['idijazah']; ?>" id="idijazah">
            <div class="form-group">
              <label>Status Pengambilan</label>
              <select class="custom-select custom-select form-control" name="statuspengambilan" id="statuspengambilan">

                <option class="form-control" id="statuspengambilan" name="statuspengambilan" value="<?php echo $editijazah['statuspengambilan']; ?>" selected><?php echo $editijazah['statuspengambilan'] ?></option>
                <option value="Sudah mengambil" id="sudahmengambil">Sudah mengambil</option>
              </select>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-sm">
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
    


   