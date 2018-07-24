<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">

                </div>
            </div>

            <div class="col-xl-5">
              <div class="user-area">
                <div class="float-left mt-2 mr-2"><?=ucwords($this->session->userdata['namapengguna'])?></div>
                <div class="dropdown float-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="<?=base_url()?>assets/img/admin.png" alt="User Avatar">
                  </a>

                  <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                    <a class="nav-link" href="<?=site_url()?>auth/logout"><i class="fa fa-power -off"></i>Logout</a>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Pengguna</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Pengaturan </a></li>
                        <li class="active">Pengguna</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Pengguna</strong>
                        <!-- <a href="<?=site_url()?>" type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp; Tambah Pengguna</a> -->
                    </div>
                    <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Pegawai</th>
                    <th>Nama Pengguna</th>
                    <th>Peran</th>
                    <th>Dibuat Pada</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($pengguna as $key => $value) {
                  ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value->namalengkap?></td>
                    <td><?=$value->namapengguna?></td>
                    <td><?=$value->peran?></td>
                    <td><?=$value->dibuatpada?></td>
                    <td></td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
                    </div>
                </div>
            </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
