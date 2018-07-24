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
                    <h1>Nominatif</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Nominatif</a></li>
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
                        <strong class="card-title">Lihat Nominatif</strong>
                    </div>
                    <div class="card-body">
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">UNIT KERJA*</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <select id="unitkerja" name="unitkerja" data-placeholder="Pilih Unit Kerja" class="form-control" tabindex="1">
                            <option value="0">-- pilih unit kerja --</option>
                            <?php
                            foreach ($uk as $key => $value) {
                              ?>
                              <option value="<?=$value->kode?>"><?=$value->unitkerja?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">SUBUNIT KERJA*</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <select id="subunitkerja" name="subunitkerja" data-placeholder="Pilih Sub Unit Kerja" class="form-control" tabindex="1">
                            <option value="0">-- pilih subunit kerja --</option>
                          </select>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">SUB SUBUNIT KERJA*</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <select id="subsubunitkerja" name="subsubunitkerja" data-placeholder="Pilih Sub Subunit Kerja" class="form-control" tabindex="1">
                            <option value="0">-- pilih sub subunit kerja --</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered nominatif">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nama</th>
                              <th>Jabatan</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
