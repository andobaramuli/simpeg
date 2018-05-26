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

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
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

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Biodata Pegawai</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Kepegawaian</a></li>
                        <li class="active">Biodata Pegawai</li>
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
                        <strong class="card-title">Tabel Pegawai</strong>
                        <a href="tambahbiodata.php" type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp; Tambah Pegawai</a>
                    </div>
                    <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Satuan Kerja</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Dareen Baramuli</td>
                    <td>Kepala Dinas</td>
                    <td>Dinas Peternakan Salatiga</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Adriel Baramuli</td>
                    <td>Kepala Dinas</td>
                    <td>Dinas Perkebunan Salatiga</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Louis Baramuli</td>
                    <td>Kepala Dinas</td>
                    <td>Dinas Tata Kota Salatiga</td>
                    <td></td>
                  </tr>
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
