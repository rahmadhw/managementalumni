
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

          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>

          

          
          <table id="example" class="table table-bordered table-striped">
            <thead class="bg-dark">
              <tr>
                <th>No</th>
                <th style="font-size: 15px;">Nama Perusahaan</th>
                <th>Posisi</th>
                <th width="300px;">keterangan</th>
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
                  <a href="<?php echo base_url(); ?>admin/loker/hapusdataloker?idloker=<?php echo $lk['idloker'] ?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a>
                  <a href="<?php echo base_url(); ?>admin/loker/formeditloker?idloker=<?php echo $lk['idloker'] ?>" class="btn btn-info btn-sm">Edit</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            
          </table>
          <tr>
              <a href="<?php echo base_url(); ?>admin/loker/formtambahloker" class="btn btn-primary btn-sm">tambah data</a>

               <button class="btn btn-info btn-sm" onclick="pelamaran()">tambah data tata cara melamar</button>
            
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
    


   