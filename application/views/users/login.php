<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/mycss/style.css" />
    <title>Form Input Wave</title>
  </head>
  <body>
     
    <div class="container">

      <h1>Please Login</h1>
      <form action="<?php echo base_url(); ?>login/proseslogin" method="POST">
        <div class="form-control">
          <input type="text" name="username">
          <label>username</label>
          <!-- <label>
            <span style="transition-delay: 0ms">E</span>
              <span style="transition-delay: 50ms">m</span>
              <span style="transition-delay: 100ms">a</span>
              <span style="transition-delay: 150ms">i</span>
              <span style="transition-delay: 200ms">l</span>
        </label> -->
        </div>

        <div class="form-control">
          <input type="password" name="password">
          <label>password</label>
        </div>

        <button type="submit" class="btn">Login</button>

        <p class="text">Don't have an account? <a href="<?php echo base_url() ?>users/registrasi">Register</a> </p>
      </form>
    </div>
    <script src="<?php echo base_url(); ?>assets/myjs/script.js"></script>
  </body>
</html>
