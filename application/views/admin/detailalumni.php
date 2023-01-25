
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
          <table id="example" class="table table-bordered table-striped table-responsive" >
            <thead class="bg bg-dark">
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Nama Alumni</th>
                <th>jurusan</th>
                <th>alamat</th>
                <th>Nomor Telepon</th>
                <th>Tahun Masuk</th>
                <th>Tahun Tamat</th>
                <th>Hobi</th>
                <th>Program Keahlian</th>
                <th>Status Pekerjaan</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $nomor = 1;  ?>
            <?php foreach($detail as $dtl) : ?>
              <tr>
               <td><?php echo $nomor++; ?></td>
               <td><?php echo $dtl["namapengguna"]; ?></td>
               <td><?php echo $dtl["namaalumni"]; ?></td>
               <td><?php echo $dtl["jurusan"]; ?></td>
               <td><?php echo $dtl["alamat"]; ?></td>
               <td><?php echo $dtl["nomortelepon"]; ?></td>
               <td><?php echo $dtl["tahunmasuk"]; ?></td>
               <td><?php echo $dtl["tahuntamat"]; ?></td>
               <td><?php echo $dtl["hobi"]; ?></td>
               <td><?php echo $dtl["programkeahlian"]; ?></td>
               <td><?php echo $dtl["namastatus"]; ?></td>
                <td>
                  <a href="<?php echo base_url() ?>admin/alumni" class="btn btn-info btn-sm">Kembali</a>
                </td>
              </tr>
              <?php endforeach;  ?>
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
    


   