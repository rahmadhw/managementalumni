
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
          <?php if ($this->session->flashdata("flash")) : ?>

            <div class="alert alert-success" role="alert">
              <span>Data Anda berhasil <?php echo $this->session->flashdata("flash") ?></span>
            </div>

          <?php endif; ?>
          <table id="example"class="table table-bordered table-striped" >
            <thead class="bg bg-dark">
              <tr>
                <th>No</th>
                <th>Nama Alumni</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $nomor = 1;  ?>
            <?php foreach($alumni as $sw) : ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $sw['namaalumni']; ?></td>
                <td><?php echo $sw['jurusan']; ?></td>
                <td><?php echo $sw['alamat']; ?></td>
                <td><?php echo $sw['nomortelepon']; ?></td>
                <td>
                  <a href="<?php echo base_url() ?>admin/alumni/formeditalumni?id=<?php echo $sw['idalumni']; ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?php echo base_url() ?>admin/alumni/detailalumni?id=<?php echo $sw['idalumni']; ?>" class="btn btn-info btn-sm">detail</a>
                </td>
              </tr>
             <?php endforeach; ?>
             
            </tbody>
          </table>
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
    


   