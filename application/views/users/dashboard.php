
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

          <?php if ($this->session->flashdata("pendaftaransiswa")) : ?>

            <div class="alert alert-success" role="alert">
              <span>Anda <?php echo $this->session->flashdata("pendaftaransiswa") ?>ditambahkan</span>
            </div>

          <?php endif; ?>

          <h3 class="card-title">Halaman Dashboard Users</h3>

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
    


   