
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <title>Form Input Wave</title>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <?php if (validation_errors()) : ?>

        <div class="alert alert-danger" role="danger">
           <?php echo validation_errors(); ?>
        </div>

      <?php endif; ?>
      <p class="login-box-msg">Register a new membership</p>


      <form action="" method="post" id="form">
       
      
        <div class="input-group mb-3">
          
          <input type="text" class="form-control" placeholder="username" name="username" id="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password2" id="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Pengguna" name="namapengguna" id="namapengguna">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block tombol-regist">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <a href="<?php echo base_url() ?>login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>dist/js/adminlte.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
      
        $('#form').on("submit", function(e){
          e.preventDefault();
          const username = $("#username").val();
          const password = $("#password").val();
          const password2 = $("#password2").val();
          const namapengguna = $("#namapengguna").val();

         $.ajax({
          url: "<?php echo base_url(); ?>users/registrasi/registrasi",
          type: 'post',
          data: {
            username: username,
            password: password,
            password2: password2,
            namapengguna: namapengguna
          },
          dataType: "json",
          success: function (data) {
            if (data == "ok")
            {
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'anda berhasil registrasi '
              }).then((result) => {
                location.href='<?php echo base_url() ?>login';
              })
            }
          }

         });
        
          
        })
     })
    </script>
</body>
</html>
