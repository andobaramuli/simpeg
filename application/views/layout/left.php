<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="<?=base_url()?>assets/img/simpeg.svg" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="<?=base_url()?>assets/img/logo2.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <?php
            if($this->session->userdata['kodeperan'] == 1){
          ?>
          <li>
              <a href="<?=site_url()?>dashboard/index"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">KEPEGAWAIAN</h3><!-- /.menu-title -->
          <li>
              <a href="<?=site_url()?>biodata/index"> <i class="menu-icon ti-briefcase"></i>Biodata Pegawai </a>
          </li>
          <li>
              <a href="<?=site_url()?>cuti/index"> <i class="menu-icon ti-clipboard"></i>Ijin & Cuti </a>
          </li>

          <h3 class="menu-title">NOMINATIF</h3><!-- /.menu-title -->

          <li>
              <a href="<?=site_url()?>nominatif/index"> <i class="menu-icon ti-files"></i>Nominatif </a>
          </li>

          <h3 class="menu-title">PENGATURAN</h3><!-- /.menu-title -->
          <li>
              <a href="<?=site_url()?>pengguna/index"> <i class="menu-icon ti-user"></i>Pengguna </a>
              <a href="<?=site_url()?>uk/index"> <i class="menu-icon ti-file"></i>Unit Kerja </a>
              <a href="<?=site_url()?>suk/index"> <i class="menu-icon ti-files"></i>Sub Unit Kerja </a>
              <a href="<?=site_url()?>ssuk/index"> <i class="menu-icon ti-files"></i>Sub Sub Unit Kerja </a>
          </li>
          <?php
            }elseif($this->session->userdata['kodeperan'] == 2){
          ?>
          <li>
              <a href="<?=site_url()?>dashboard/index"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">KEPEGAWAIAN</h3><!-- /.menu-title -->
          <li>
              <a href="<?=site_url()?>biodata/index"> <i class="menu-icon ti-briefcase"></i>Biodata Pegawai </a>
          </li>
          <li>
              <a href="<?=site_url()?>cuti/index"> <i class="menu-icon ti-clipboard"></i>Ijin & Cuti </a>
          </li>

          <h3 class="menu-title">NOMINATIF</h3><!-- /.menu-title -->

          <li>
              <a href="<?=site_url()?>nominatif/index"> <i class="menu-icon ti-files"></i>Nominatif </a>
          </li>

          <h3 class="menu-title">PENGATURAN</h3><!-- /.menu-title -->
          <li>
              <a href="<?=site_url()?>pengguna/index"> <i class="menu-icon ti-user"></i>Pengguna </a>
              <a href="<?=site_url()?>uk/index"> <i class="menu-icon ti-file"></i>Unit Kerja </a>
              <a href="<?=site_url()?>suk/index"> <i class="menu-icon ti-files"></i>Sub Unit Kerja </a>
              <a href="<?=site_url()?>ssuk/index"> <i class="menu-icon ti-files"></i>Sub Sub Unit Kerja </a>
          </li>
          <?php
            }elseif($this->session->userdata['kodeperan'] == 3){
          ?>
          <li>
              <a href="<?=site_url()?>dashboard/index"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">KEPEGAWAIAN</h3><!-- /.menu-title -->
          <li>
              <a href="<?=site_url()?>biodata/index"> <i class="menu-icon ti-briefcase"></i>Biodata Pegawai </a>
          </li>
          <li>
              <a href="<?=site_url()?>cuti/index"> <i class="menu-icon ti-clipboard"></i>Ijin & Cuti </a>
          </li>

          <h3 class="menu-title">NOMINATIF</h3><!-- /.menu-title -->

          <li>
              <a href="<?=site_url()?>nominatif/index"> <i class="menu-icon ti-files"></i>Nominatif </a>
          </li>
          <?php
            }
          ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
