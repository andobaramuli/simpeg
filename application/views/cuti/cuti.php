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
                    <h1>Ijin & Cuti</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Kepegawaian</a></li>
                        <li class="active">Ijin & Cuti</li>
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
                        <strong class="card-title">Tabel Pegawai Ijin & Cuti</strong>
                        <?php if ($this->session->userdata['kodeperan'] == 3) {
                          echo '<a href="'.site_url().'cuti/addcuti" type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp; Pengajuan Cuti</a>';
                        }?>
                    </div>
                    <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Unit Kerja</th>
                    <th>Tanggal Cuti</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="CutiStatus">
                  <?php
                    foreach ($cuti as $key => $value) {
                  ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value->namalengkap?></td>
                    <td><?=$value->unitkerja?></td>
                    <td><?=$value->mulaicuti?></td>
                    <td id="status<?=$value->kode?>">
                      <?php
                        if($value->batal == '1'){
                          echo "Dibatalkan";
                        }elseif($value->ditolak == '1'){
                          echo "Ditolak";
                        }elseif($value->disetujui == '1'){
                          echo "Disetujui";
                        }else{
                          echo "Pengajuan";
                        }
                      ?>
                    </td>
                    <td id="aksi<?=$value->kode?>">
                      <?php
                        if ($value->batal == '0' && $value->ditolak == '0' && $value->disetujui == '0') {
                      ?>
                        <div class="dropdown float-right">
                            <div class="dropdown-toggle mr-4" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                  <a class="dropdown-item batal" kode="<?=$value->kode?>" status="batal" value="1">Batal</a>
                                  <?php
                                    if ($this->session->userdata['kodeperan'] == 2) {
                                  ?>
                                      <a class="dropdown-item setuju" kode="<?=$value->kode?>" status="setuju" value="1">Setuju</a>
                                      <a class="dropdown-item tolak" kode="<?=$value->kode?>" status="tolak" value="1">Tolak</a>
                                  <?php
                                    }
                                  ?>
                                </div>
                            </div>
                        </div>
                      <?php
                        }
                      ?>
                    </td>
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
