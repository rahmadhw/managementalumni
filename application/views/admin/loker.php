
<?php if (empty($this->session->userdata("namapengguna"))) {
  redirect(base_url('admin/login'));
} ?>  


<div class="content-wrapper">
    
     <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">
       
     
        <div class="card-header">

          <h3 class="card-title">Show Loker</h3>

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
           <?php if ($this->session->flashdata("flash")) : ?>

            <div class="alert alert-success" role="alert">
              <span>Data Anda berhasil <?php echo $this->session->flashdata("flash") ?></span>
            </div>

          <?php endif; ?>

          
          <table id="example" class="table table-bordered table-striped">
            <thead class="bg-dark">
              <tr>
                <th>No</th>
                <th>Nama Perushaan</th>
                <th>Posisi</th>
                <th>keterangan</th>
                <th>Waktu Pelamaran</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
            <?php $nomor = 1;  ?>
            <?php foreach($loker as $lk) : ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $lk['namaperusaan']; ?></td>
                <td><?php echo $lk['posisi']; ?></td>
                <td><?php echo $lk['keterangan'] ?></td>
                <td><?php echo $lk['waktubataspelamaran']; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>admin/loker/hapusdataloker?idloker=<?php echo $lk['idloker'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                  <a href="" class="btn btn-info btn-sm">Edit</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            
          </table>
          <tr>
              <a href="<?php echo base_url(); ?>admin/loker/formtambahloker" class="btn btn-primary btn-sm">tambah data</a>
            
            </tr>
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
    


   