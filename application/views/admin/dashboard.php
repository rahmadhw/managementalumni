
<?php if (empty($this->session->userdata("namapengguna"))) {
  redirect(base_url('admin/login'));
} ?>  


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">
        <?php if ($this->session->flashdata("flashlogin")) : ?>

          <div class="alert alert-success" role="alert">
            <span>anda berhasil <?php echo $this->session->flashdata("flashlogin"); ?></span>
          </div>


        <?php endif; ?>
     
        <div class="card-header">

          <h3 class="card-title">Halaman Dashboard</h3>

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
           <?php var_dump($this->session->userdata()); ?>
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


    <div class="row">
      <div class="col-lg-6">
         <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">
        <?php if ($this->session->flashdata("flashlogin")) : ?>

          <div class="alert alert-success" role="alert">
            <span>anda berhasil <?php echo $this->session->flashdata("flashlogin"); ?></span>
          </div>


        <?php endif; ?>
     
        
        <div class="card-body">
           
        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    </section>
      </div>

      <div class="col-lg-6">
        
         <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">
        <?php if ($this->session->flashdata("flashlogin")) : ?>

          <div class="alert alert-success" role="alert">
            <span>anda berhasil <?php echo $this->session->flashdata("flashlogin"); ?></span>
          </div>


        <?php endif; ?>
     
       
        <div class="card-body">
          
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    </section>
      </div>
    </div>


    <!-- /.content -->
  </div>


    <!-- Main content -->
    


   