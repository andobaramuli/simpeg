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
          <h1>Biodata</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="#">Biodata</a></li>
            <li>Input Biodata</li>
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
            <form action="<?=site_url()?>biodata/addbiodata" method="post">
              <div class="card-header">
                <strong class="card-title">Lokasi Kerja</strong>
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
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TERHITUNG MULAI TANGGAL*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tmtlokasikerja" placeholder="" class="form-control date">
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
                    <input type="text" id="nip" name="nip" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NAMA LENGKAP*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="nama" name="nama" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TEMPAT LAHIR*</label>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" id="tempatlahir" name="tempatlahir" value="" placeholder="" class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <label for="text-input" class=" form-control-label">TANGGAL LAHIR*</label>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" id="tanggallahir" name="tanggallahir" value="" placeholder="" class="form-control date">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">JENIS KELAMIN*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="jeniskelamin" class=" form-control " tabindex="1">
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">GOLONGAN DARAH*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="golongandarah" class=" form-control " tabindex="1">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">STATUS PERNIKAHAN*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="statusnikah" class=" form-control " tabindex="1">
                      <option value="Belum Menikah">Belum Menikah</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Janda">Janda</option>
                      <option value="Duda">Duda</option>
                      <option value="Bercerai">Bercerai</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">AGAMA*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="agama" class=" form-control " tabindex="1">
                      <option value="Islam">Islam</option>
                      <option value="Kristen Protestan">Kristen Protestan</option>
                      <option value="Kristen Katholik">Kristen Katholik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">STATUS PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <select name="statuspegawai" class=" form-control " tabindex="1">
                      <?php
                      foreach ($stapeg as $key => $value) {
                        ?>
                        <option value="<?=$value->kode?>"><?=$value->statuspegawai?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">JENIS KEPEGAWAIAN*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <select name="jeniskepegawaian" class=" form-control " tabindex="1">
                      <?php
                      foreach ($jenpeg as $key => $value) {
                        ?>
                        <option value="<?=$value->kode?>"><?=$value->jenispegawai?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">KEDUDUKAN PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <select name="kedudukanpegawai" class=" form-control " tabindex="1">
                      <?php
                      foreach ($dukpeg as $key => $value) {
                        ?>
                        <option value="<?=$value->kode?>"><?=$value->kedudukanpegawai?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">ALAMAT RUMAH*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <textarea name="alamat" id="" rows="4" placeholder="" class="form-control"></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="karpeg" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU ASKES*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="askes" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU TASPEN*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="taspen" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU ISTRI / KARTU SUAMI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="kariskarsu" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">N P W P*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="npwp" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. INDUK KEPENDUDUKAN*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="nik" value="" placeholder="" class="form-control">
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
                    <select name="pangkat" class=" form-control " tabindex="1">
                      <option value="">-- pilih pangkat --</option>
                      <?php
                      foreach ($pangkat as $key => $value) {
                        ?>
                        <option value="<?=$value->kode?>"><?=$value->namapangkat?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TERHITUNG MULAI TANGGAL*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tmtpangkat" placeholder="" class="form-control date">
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
                    <input type="text" id="" name="jabatan" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TUGAS DALAM UNIT KERJA*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tugasunitkerja" value="" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TERHITUNG MULAI TANGGAL*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tmtjabatan" value="" placeholder="" class="form-control date">
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
