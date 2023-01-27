
<?php if (empty($this->session->userdata("namapengguna"))) {
  redirect(base_url('admin/login'));
} ?>  


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">

      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <div class="card-header">

          <h3 class="card-title">Halaman Status Pengambilan Ijazah</h3>


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
          <table class="table table-bordered table-striped" id="example">
              <thead class="bg bg-dark">
                <tr>
                  <th>No</th>
                  <th>Nama alumni</th>
                  <th>Status Pengambilan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $nomor = 1;  ?>
              <?php foreach($ijazah as $ijz) : ?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
                  <td><?php echo $ijz['namaalumni']; ?></td>
                  <td><?php echo $ijz["statuspengambilan"]; ?></td>
                  <?php if ($ijz['statuspengambilan'] == "Sudah mengambil") { ?>
                  <td>
                    <span class="badge badge-success">Selesai</span>
                  </td>

                  <?php }else{ ?>

                  <td>
                    <a href="" class="btn btn-info btn-sm">Hubungi</a> 
                    <a href="<?php echo base_url(); ?>admin/ijazah/formeditijazah?id=<?php echo $ijz['idijazah'] ?>" class="btn btn-danger btn-sm">Update</a>
                  </td>


                  <?php } ?>
                </tr>
               
              <?php endforeach; ?>
                
              </tbody>
          </table>
          <td colspan="4">
              <a href="<?php echo base_url(); ?>admin/ijazah/showtambahijazah" class="btn btn-primary btn-sm">Tambah Data</a>
          </td>
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
    


   