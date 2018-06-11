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
          <h1>Sub Unit Kerja</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="#">Pengaturan</a></li>
            <li>Sub Unit Kerja</li>
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
              <strong class="card-title">Tambah Sub Unit Kerja</strong>
            </div>
            <div class="card-body">
              <form action="<?=site_url()?>suk/addsuk" method="post">
                <div class="form-group">
                  <label for="subunitkerja" class="control-label mb-1">Nama Sub Unit Kerja</label>
                  <input name="subunitkerja" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="row form-group">
                  <div class="col-lg-12"><label for="select" class=" form-control-label">Pilih Nama Unit Kerja</label></div>
                  <div class="col-lg-12">
                    <select name="unitkerja" data-placeholder="Pilih Unit Kerja" class="form-control-lg form-control standardSelect" tabindex="1">
                      <option value=""></option>
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
                <div class="row col-lg-3">
                  <button type="submit" class="btn btn-lg btn-info">
                    <i class="fa fa-plus fa-lg"></i>
                    <span>Simpan Data</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
