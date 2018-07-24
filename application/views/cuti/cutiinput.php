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
            <li>Input Ijin & Cuti</li>
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
            <form action="<?=site_url()?>cuti/addcuti" method="post">
              <input type="hidden" name="kodepegawai" value="<?=$this->session->userdata['kodepegawai']?>" />
              <div class="card-header">
                <strong class="card-title">Pengambilan Cuti</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col-xl-3">
                    <label for="text-input" class=" form-control-label">JENIS CUTI*</label>
                  </div>
                  <div class="col-xl-9">
                    <select id="jeniscuti" name="jeniscuti" data-placeholder="Pilih Jenis Cuti" class="form-control" tabindex="1">
                      <option value="0">-- pilih jenis cuti --</option>
                      <?php
                      foreach ($jc as $key => $value) {
                        ?>
                        <option value="<?=$value->kode?>"><?=$value->jeniscuti?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-xl-3">
                    <label for="text-input" class=" form-control-label">PERIODE CUTI*</label>
                  </div>
                  <div class="col-xl-4">
                    <input type="text" id="mulaicuti" name="mulaicuti" value="" placeholder="" class="form-control date ">
                  </div>
                  <div class="col-xl-1">
                    <i class="ml-3 ti-minus"></i>
                  </div>
                  <div class="col-xl-4">
                    <input type="text" id="akhircuti" name="akhircuti" value="" placeholder="" class="form-control date">
                  </div>
                </div>
              </div>
              <div class="card-header">
                <strong class="card-title">Lokasi Kerja</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">UNIT KERJA*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->unitkerja) ? $detail[0]->unitkerja : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">SUBUNIT KERJA*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->subunitkerja) ? $detail[0]->subunitkerja : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">SUB SUBUNIT KERJA*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->subsubunitkerja) ? $detail[0]->subsubunitkerja : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="card-header">
                <strong class="card-title">Profil Pegawai</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. INDUK PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->nip) ? $detail[0]->nip : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NAMA LENGKAP*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->namalengkap) ? $detail[0]->namalengkap : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">JENIS KELAMIN*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="" value="<?php if($detail[0]->jeniskelamin == 'L'){echo 'Laki-Laki';}elseif($detail[0]->jeniskelamin == 'P'){echo 'Perempuan';}?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">STATUS PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->statuspegawai) ? $detail[0]->statuspegawai : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>

              </div>
              <div class="card-header">
                <strong class="card-title">Pangkat / Golongan</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">NAMA PANGKAT*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->namapangkat) ? $detail[0]->namapangkat : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="card-header">
                <strong class="card-title">Jabatan Struktur / Fungsional Umum (JFU)</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">JABATAN*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="" value="<?=!empty($detail[0]->jabatan) ? $detail[0]->jabatan : null?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <button type="submit" class="btn btn-lg btn-info">
                  <i class="fa fa-plus fa-lg"></i>
                  <span>Simpan Data</span>
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
