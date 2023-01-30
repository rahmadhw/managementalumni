
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

        
        <h3 class="card-title"><?php echo $datachat[0]['namapengguna']; ?></h3>


          

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
          
     

        <?php foreach ($viewchat as $pr) : ?>


          <p style="text-align: left;"><?php echo $pr['message']; ?></p>


        <?php endforeach; ?>


        <?php foreach ($viewchat2 as $pr) : ?>


          


        <?php endforeach; ?>


        
        

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
    


   