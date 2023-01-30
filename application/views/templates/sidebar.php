  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color: purple;">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block text-white" style="font-size: 30px; text-transform: uppercase;"><?php echo $this->session->userdata('namapengguna'); ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <?php if ($this->session->userdata("level") == 'admin') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                All Alumni
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>admin/alumni/showalumni" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alumni</p>
                </a>
              </li>
              
            </ul>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/alumni" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Lihat Pendaftaran Alumni
              
              </p>
            </a>
           
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/loker" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Loker
              
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/event" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Event
              
              </p>
            </a>
           
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/gallery" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gallery
              
              </p>
            </a>
           
          </li>


           <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/ijazah" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Ijazah
              
              </p>
            </a>

            <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/chat" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                chat
              
              </p>
            </a>

            

           <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/login/logout" class="nav-link tombol-logout">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Logout
              
              </p>
            </a>
           
          </li>

        <?php }else { ?>
           <li class="nav-item">
              <a href="<?php echo base_url(); ?>dashbord" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                
                </p>
              </a>
             
            </li>

           <li class="nav-item">
            <a href="<?php echo base_url() ?>daftaralumni" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Daftar Alumni
              
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gallery
              
              </p>
            </a>
           
          </li>

         
           <li class="nav-item">
            <a href="<?php echo base_url() ?>login/logout" class="nav-link tombol-logout">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Logout
              
              </p>
            </a>
           
          </li>


        <?php } ?>

          
          
          
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>