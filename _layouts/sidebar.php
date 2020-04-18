<aside class="main-sidebar sidebar-dark-primary elevation-4 navbar-navy " >
    <!-- Brand Logo -->
    <a href="<?=url('beranda')?>" class="brand-link">
      <img src="<?=templates()?>dist/img/Lambang_Kabupaten_Brebes.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WebGIS Kec.Losari</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar " >
      <!-- Sidebar user (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt mr-1"></i>
              <p>
                 Peta Wilayah
              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=url('peta_lk')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Luas Lahan Kering (ha)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=url('peta_ll')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Luas Lahan Lainya (ha)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=url('peta_kt')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ketinggian (mdpl)</p>
                </a>
              </li>
            </ul>
          </li>
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Data Desa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?=url('data')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Luas Daerah (ha)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=url('data_lk')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Luas Lahan Kering (ha)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=url('data_ll')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Luas Lahan Lainya (ha)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=url('data_kt')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ketinggian (mdpl)</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?=url('login')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>