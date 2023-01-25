
<?php if (empty($this->session->userdata("namapengguna"))) {
  redirect(base_url('login'));
} ?>  


<div class="content-wrapper  justify-content-center">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
       <section class="content">

      <!-- Default box -->
      <div class="card">

     
        <div class="card-header">

        <h3 class="card-title">Obrolan</h3>
          

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
            <div class = "row">
                <div class="col-lg-12">

                  <?php if (!empty($message)) { ?>

                    <?php foreach ($message as $msg) : ?>

                      <?php echo "<div style='width:40%;' class='alert alert-info' role='alert'>". $msg["message"] ."</div>"; ?>
                      

                    <?php endforeach; ?>
                    
                    <?php foreach($idsekarang as $ids) :  ?>


                      <?php echo "<div style='width:40%;' class='alert alert-secondary' role='alert'>". $ids["message"] ."</div>"; ?>

                    <?php endforeach; ?>
                  <?php }else{ ?>

                    <p>kosong</p>

                  <?php } ?>
             

                   
                </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="Write Pesan">
              </div>
              <div class="col-lg-4">
                <input type="submit" class="btn btn-info btn-sm">
              </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    </section>


    <!-- /.content -->
  </div>


    <!-- Main content -->
    


   