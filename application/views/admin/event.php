
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

          <div class="flash-data" data-flashdata=<?php echo $this->session->flashdata('flash'); ?>></div>

          <h3 class="card-title">Halaman Data Event</h3>

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
          <table id="example"class="table table-bordered table-striped" id="example">
            <thead class="bg bg-dark">
              <tr>
                <th>No</th>
                <th>Nama Event</th>
                <th>Tanggal Event</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
        
          <?php $nomor = 1; ?>
          <?php foreach ($event as $v): ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $v['namaevent']; ?></td>
                <td><?php echo date($v['tanggalevent']); ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>admin/event/formeditevent?id=<?php echo $v['idevent']; ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?php echo base_url(); ?>admin/event/getdetail?id=<?php echo $v['idevent']; ?>" class="btn btn-info btn-sm">detail</a>
                  <a href="<?php echo base_url(); ?>admin/event/hapusevent?id=<?php echo $v['idevent']; ?>" class="btn btn-danger btn-sm">hapus</a>
                </td>
              </tr>
          
          <?php endforeach; ?>
            </tbody>
          </table>
          <a class="btn btn-primary btn-sm tambahformdataevent" >Tambah Data</a>
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


    <section class="content-header" id="content-header" style="display: none">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">
       
     
        <div class="card-header" id="event">

          <h3 class="card-title">Halaman Data Event</h3>

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
          <form action="" method="POST" id="form">
            <div class="form-group">
              <label>Nama Event</label>
              <input type="text" name="namaevent" class="form-control" id="namaevent">
            </div>

            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" name="keterangan" rows="10" id="keterangan"></textarea>
            </div>

            <div class="form-group">
              <label>Tanggal Event</label>
              <input type="date" name="tanggalevent" class="form-control" id="tanggalevent">
            </div>

            <div class="form-group">
              <input type="submit" id="btnevent" value="Simpan" class="btn btn-primary btn-sm">
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
    


   