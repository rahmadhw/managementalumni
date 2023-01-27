
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

          <h3 class="card-title">Halaman Data Detail Event</h3>

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
        <span class="badge badge-danger ">Nama Event</span>  : <?php echo $event['namaevent']; ?><br><br>
        <span class="badge badge-danger">Keterangan</span> : <?php echo $event['keterangan']; ?><br><br>
        <span class="badge badge-danger">Tanggal event</span> : <?php echo $event['tanggalevent']; ?><br>
        <a href="<?php echo base_url() ?>admin/event" class="btn btn-info btn-sm mt-4">Kembali</a>

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
    


   