
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
           <div class="row">
             <div class="col-lg-12 flex-row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;" id="obrolan">
               
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
    


   