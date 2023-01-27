
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

          <h3 class="card-title">Halaman Data Alumni</h3>

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

          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>">
            
          </div>

          <table class="table table-borderd table-striped" id="example">
            <thead class="bg-dark">
              <tr>
                <th>No</th>
                <th>Nama Alumni</th>
                <th>Jurusan Alumni</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tahun</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $nomor = 1; ?>
            <?php foreach($all as $s) : ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $s['namaalumni']; ?></td>
                <td><?php echo $s['jurusanalumni']; ?></td>
                <td><?php echo $s['nama']; ?></td>
                <td><?php echo $s['alamat']; ?></td>
                <td><?php echo $s['tahun']; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>admin/alumni/proseshapusdataallalumni?id=<?php echo $s['idtbalumni']; ?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a>
                  <a href="<?php echo base_url(); ?>admin/alumni/formeditallalumni?id=<?php echo $s['idtbalumni']; ?>" class="btn btn-info btn-sm">Edit</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <a href="<?php echo base_url() ?>admin/alumni/formalumniall" class="btn btn-primary btn-sm">Tambah Data</a>
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
    


   