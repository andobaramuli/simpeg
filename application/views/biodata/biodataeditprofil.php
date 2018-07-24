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
            <li>Detail Biodata</li>
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
                <strong class="card-title">Lokasi Kerja</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">UNIT KERJA*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="unitkerja" value="<?=!empty($pegawai[0]->unitkerja) ? $pegawai[0]->unitkerja : null ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">SUBUNIT KERJA*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="subunitkerja" value="<?=!empty($pegawai[0]->subunitkerja) ? $pegawai[0]->subunitkerja : null ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">SUB SUBUNIT KERJA*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="subsubunitkerja" value="<?=!empty($pegawai[0]->subsubunitkerja) ? $pegawai[0]->subunitkerja : null ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TERHITUNG MULAI TANGGAL*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tmtlokasikerja" value="<?=!empty($pegawai[0]->tmtlokasikerja) ? $pegawai[0]->tmtlokasikerja : null ?>" class="form-control" disabled>
                  </div>
                </div>
              </div>
            <form action="<?=site_url()?>biodata/updateprofil/<?=$pegawai[0]->kode?>" method="post">
              <input type="hidden" name="kodepegawai" value="<?=$pegawai[0]->kode?>" />
              <div class="card-header">
                <strong class="card-title">Profil Pegawai</strong>
                <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp; Simpan Profil</a>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. INDUK PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="nip" name="nip" value="<?=!empty($pegawai[0]->nip) ? $pegawai[0]->nip : null ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NAMA LENGKAP*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="nama" name="nama" value="<?=!empty($pegawai[0]->namalengkap) ? $pegawai[0]->namalengkap : null ?>" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TEMPAT LAHIR*</label>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" id="tempatlahir" name="tempatlahir" value="<?=!empty($pegawai[0]->tempatlahir) ? $pegawai[0]->tempatlahir : null ?>" placeholder="" class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <label for="text-input" class=" form-control-label">TANGGAL LAHIR*</label>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" id="tanggallahir" name="tanggallahir" value="<?=!empty($pegawai[0]->tanggallahir) ? $pegawai[0]->tanggallahir : null ?>" placeholder="" class="form-control date">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">JENIS KELAMIN*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="jeniskelamin" class=" form-control " tabindex="1">
                      <option value="L" <?=$pegawai[0]->jeniskelamin == 'L' ? 'selected' : null?>>Laki-Laki</option>
                      <option value="P" <?=$pegawai[0]->jeniskelamin == 'P' ? 'selected' : null?>>Perempuan</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">GOLONGAN DARAH*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="golongandarah" class=" form-control " tabindex="1">
                      <option value="A" <?=$pegawai[0]->golongandarah == 'A' ? 'selected' : null?>>A</option>
                      <option value="B" <?=$pegawai[0]->golongandarah == 'B' ? 'selected' : null?>>B</option>
                      <option value="AB" <?=$pegawai[0]->golongandarah == 'AB' ? 'selected' : null?>>AB</option>
                      <option value="O" <?=$pegawai[0]->golongandarah == 'O' ? 'selected' : null?>>O</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">STATUS PERNIKAHAN*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="statusnikah" class=" form-control " tabindex="1">
                      <option value="Belum Menikah" <?=$pegawai[0]->statusnikah == 'Belum Menikah' ? 'selected' : null?>>Belum Menikah</option>
                      <option value="Menikah" <?=$pegawai[0]->statusnikah == 'Menikah' ? 'selected' : null?>>Menikah</option>
                      <option value="Janda" <?=$pegawai[0]->statusnikah == 'Janda' ? 'selected' : null?>>Janda</option>
                      <option value="Duda" <?=$pegawai[0]->statusnikah == 'Duda' ? 'selected' : null?>>Duda</option>
                      <option value="Bercerai" <?=$pegawai[0]->statusnikah == 'Bercerai' ? 'selected' : null?>>Bercerai</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">AGAMA*</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="agama" class=" form-control " tabindex="1">
                      <option value="Islam" <?=$pegawai[0]->agama == 'Bercerai' ? 'selected' : null?>>Islam</option>
                      <option value="Kristen Protestan" <?=$pegawai[0]->agama == 'Bercerai' ? 'selected' : null?>>Kristen Protestan</option>
                      <option value="Kristen Katholik" <?=$pegawai[0]->agama == 'Bercerai' ? 'selected' : null?>>Kristen Katholik</option>
                      <option value="Hindu" <?=$pegawai[0]->agama == 'Bercerai' ? 'selected' : null?>>Hindu</option>
                      <option value="Budha" <?=$pegawai[0]->agama == 'Bercerai' ? 'selected' : null?>>Budha</option>
                      <option value="Konghucu" <?=$pegawai[0]->agama == 'Bercerai' ? 'selected' : null?>>Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">STATUS PEGAWAI*</label>
                  </div>
                  <div class="col-lg-9">
                    <select name="statuspegawai" class=" form-control " tabindex="1">
                      <?php
                      foreach ($stapeg as $ksp => $vsp) {
                        ?>
                        <option value="<?=$vsp->kode?>" <?=$vsp->kode == $pegawai[0]->kodestatuspegawai ? 'selected' : null ?>><?=$vsp->statuspegawai?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">JENIS KEPEGAWAIAN*</label>
                  </div>
                  <div class="col-lg-9">
                    <select name="jeniskepegawaian" class=" form-control " tabindex="1">
                      <?php
                      foreach ($jenpeg as $kjk => $vjk) {
                        ?>
                        <option value="<?=$vjk->kode?>" <?=$vjk->kode == $pegawai[0]->kodejenispegawai ? 'selected' : null ?>><?=$vjk->jenispegawai?></option>
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
                      foreach ($dukpeg as $kkp => $vkp) {
                        ?>
                        <option value="<?=$vkp->kode?>" <?=$vkp->kode == $pegawai[0]->kodekedudukanpegawai ? 'selected' : null ?>><?=$vkp->kedudukanpegawai?></option>
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
                    <textarea name="alamat" id="" value="" rows="4" placeholder="" class="form-control"><?=!empty($pegawai[0]->alamat) ? $pegawai[0]->alamat : null ?></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU PEGAWAI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="karpeg" value="<?=!empty($pegawai[0]->nokarpeg) ? $pegawai[0]->nokarpeg : null ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU ASKES*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="askes" value="<?=!empty($pegawai[0]->noaskes) ? $pegawai[0]->noaskes : null ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU TASPEN*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="taspen" value="<?=!empty($pegawai[0]->notaspen) ? $pegawai[0]->notaspen : null ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. KARTU ISTRI / KARTU SUAMI*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="kariskarsu" value="<?=!empty($pegawai[0]->nokariskarsu) ? $pegawai[0]->nokariskarsu : null ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">N P W P*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="npwp" value="<?=!empty($pegawai[0]->npwp) ? $pegawai[0]->npwp : null ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NO. INDUK KEPENDUDUKAN*</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="" name="nik" value="<?=!empty($pegawai[0]->nik) ? $pegawai[0]->nik : null ?>" placeholder="" class="form-control">
                  </div>
                </div>
              </div>
            </form>
              <div class="card-header">
                <strong class="card-title">Pangkat / Golongan</strong>
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">NAMA PANGKAT*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="namapangkat" value="<?=!empty($pegawai[0]->namapangkat) ? $pegawai[0]->namapangkat : null ?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TERHITUNG MULAI TANGGAL*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tmtpangkat" value="<?=!empty($pegawai[0]->tmtpangkat) ? $pegawai[0]->tmtpangkat : null ?>" class="form-control" disabled>
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
                    <input type="text" id="" name="jabatan" value="<?=!empty($pegawai[0]->jabatan) ? $pegawai[0]->jabatan : null ?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TUGAS DALAM UNIT KERJA*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tugasunitkerja" value="<?=!empty($pegawai[0]->tugasjabatan) ? $pegawai[0]->tugasjabatan : null ?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label for="text-input" class=" form-control-label">TERHITUNG MULAI TANGGAL*</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" id="" name="tmtjabatan" value="<?=!empty($pegawai[0]->tmtjabatan) ? $pegawai[0]->tmtjabatan : null ?>" placeholder="" class="form-control" disabled>
                  </div>
                </div>
              </div>
          </div>
        </div>

      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
