
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->






<!-- Bootstrap 4 -->

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#example').DataTable();

    const flashData = $('.flash-data').data('flashdata');

    if (flashData){
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'anda ' + flashData
      })
    }

    const flashDatalogin = $(".flash-datalogin").data("flashdatalogin");

    if (flashDatalogin) {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'anda berhasil ' + flashDatalogin
      })
    }


    $(".tombol-hapus").on("click", function(event) {
      event.preventDefault();

      const href = $(this).attr('href');

      Swal.fire({
        title: 'Apakah Anda yakin untuk menghapus data ini?',
        text: "Ambil Keputusan Kamu yaa",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yaa, hapus sekarang'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href; 
        }
      })
    })



    $(".tombol-logout").on("click", function(event) {

      event.preventDefault();

      const href = $(this).attr('href');


      Swal.fire({
        title: 'Apakah Anda yakin ingin logout?',
        text: "Ambil Keputusan Kamu yaa",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yaa, keluar sekarang'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href; 
        }
      })
    })

    
    $(".tambahformdataevent").on("click", function() {
      $("#content-header").css("transition", "all 2s");
      $("#content-header").css("display", "block");
    })

    $("#form").on('submit', function(e) {
      e.preventDefault();
      const namaevent = $('#namaevent').val();
      const keterangan = $('#keterangan').val();
      const tanggalevent = $('#tanggalevent').val();
      $.ajax({
        url: "<?php echo base_url(); ?>admin/event/prosestambahevent",
        type: "post",
        dataType: 'json',
        data: {
          namaevent:namaevent,
          keterangan:keterangan,
          tanggalevent:tanggalevent
        },
        success: function(data)
        {
          if (data == 'Success')
          {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'anda berhasil Tambah Data Event '
            }).then((result) => {
              location.href='<?php echo base_url() ?>admin/event';
            })
          }
        }
      })
    })



    $("#formEvent").on("submit", function(e) {
      e.preventDefault();
      const id = $("#idevent").val();
      const namaevent = $("#namaevent").val();
      const keterangan = $("#keterangan").val();
      const tanggalevent = $("#tanggalevent").val();
      $.ajax({
        url: "<?php echo base_url(); ?>admin/event/proseseventedit",
        type: 'post',
        dataType: 'json',
        data: {
          idevent:id,
          namaevent:namaevent,
          keterangan:keterangan,
          tanggalevent:tanggalevent
        },
        success: function(data){
          if (data == "Success") {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'anda berhasil edit Data Event '
            }).then((result) => {
              location.href='<?php echo base_url() ?>admin/event';
            })
          }
        }
      })
    })

    $("#formeditevent").on("submit", function(e) {
      e.preventDefault();

      const idijazah = $("#idijazah").val()
      const statuspengambilan = $("#statuspengambilan").val()

      $.ajax({
        url: '<?php echo base_url() ?>admin/ijazah/proseseditijazah',
        type: 'post',
        dataType: 'json',
        data: {
          idijazah:idijazah,
          statuspengambilan:statuspengambilan
        },
        success:function(data){
          if (data == "Success") {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'anda berhasil edit Data ijazah '
            }).then((result) => {
              location.href='<?php echo base_url() ?>admin/ijazah';
            })
          }
        }
      })
    })

  });


  // function pelamaran()
  // {
  //   const form = "<form id='form' method='POST'><div class='form-group'><label>Nama Catatan</label><input type='text' name='Namacatatan' id='Namacatatan' class='form-control'></div><div class='form-group'><label>keterangancatatan</label><input type='text' name='Namacatatan' id='keterangancatatan' class='form-control'></div><div class='form-group'><label>syarat</label><input type='text' name='Namacatatan' id='syarat' class='form-control'></div><div class='form-group'><label>Alamat Email</label><input type='text' name='Namacatatan' id='email' class='form-control'></div><div class='form-group'><input type='submit' class='btn btn-primary btn-sm tomboltambahpelamaran' onclick='proses()' value='simpan'></div></form>";


  //   $("#content-header").css("transition", "all 1s");
  //   $("#content-header").css("opacity", 1);
  //   $("#card-body").html(form);
  // }











</script>


</body>
</html>
