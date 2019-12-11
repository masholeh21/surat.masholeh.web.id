<?php $this->load->view('konfig/tgl_indo');

  $jenis_surat=$s['id_jenis_surat'];
  $nama=$s['nama'];
  $nim=$s['nim'];
  $tempat=$s['tempat_lahir'];
  $tgl=$s['tanggal_lahir'];
  $tanggal=tgl_indo($tgl);
  $jurusan=$s['jurusan'];
  $alamat=$s['alamat_surat'];
  $fakultas=$s['fakultas'];
  $email=$s['email'];
  $smst_jln=$s['smst_jln'];
  $no_ijazah=$s['no_ijazah'];
  $tahun_lulus=$s['tahun_lulus'];
  $ijazah=$s['tgl_ijazah'];
  $tgl_ijazah=tgl_indo($ijazah);
  $tanggal1=tanggal($ijazah);

  if($jenis_surat==1)
  {
    $surat="Surat Keterangan Berkelakuan Baik";
  }
  elseif($jenis_surat==2)
  {
    $surat="Surat Pengantar Pembuatan Parspor";
  }
  elseif($jenis_surat==3)
  {
    $surat="Surat Keterangan Menyelesaikan Studi";
  }
  elseif($jenis_surat==4)
  {
    $surat="Surat Permohonan Pembelian Bahan Penelitian";
  }
  elseif($jenis_surat==5)
  {
    $surat="Surat Permohonan Bantuan Bahan Penelitian";
  }
  elseif($jenis_surat==6)
  {
    $surat="Surat Ijin Observasi";
  }
  elseif($jenis_surat==7)
  {
    $surat="Surat Ijin Studi Pendahuluan";
  }
  elseif($jenis_surat==8)
  {
    $surat="Permohonan Ijin Penelitian";
  }
  elseif($jenis_surat==9)
  {
    $surat="Surat Permohonan Ethical Clearance";
  }
  elseif($jenis_surat==10)
  {
    $surat="Surat Pengantar Tugas Akhir";
  }
  elseif($jenis_surat==11)
  {
    $surat="Surat Ijin Peminjaman Laboratorium";
  }
  elseif($jenis_surat==12)
  {
    $surat="Surat Permohonan Izin Determinasi";
  }
  elseif($jenis_surat==13)
  {
    $surat="Surat Keterangan Aktif Kuliah";
  }
  elseif($jenis_surat==14)
  {
    $surat="Surat Permohonan Ijin Praktik Kerja Lapangan";
  }
  elseif($jenis_surat==15)
  {
    $surat="Surat Keterangan Beasiswa";
  }
  elseif($jenis_surat==16)
  {
    $surat="Surat Keterangan Akreditasi";
  }
  elseif($jenis_surat==17)
  {
    $surat="Surat Ijin Tugas Mata Kuliah";
  }
  elseif($jenis_surat==18)
  {
    $surat="Surat Pengantar Praktik Kerja Lapangan";
  }
  elseif($jenis_surat==19)
  {
    $surat="Surat Pengunduran Diri Praktik Kerja Lapangan";
  }
  elseif($jenis_surat==20)
  {
    $surat="Surat Keterangan Asisten Praktikum";
  }
  elseif($jenis_surat==21)
  {
    $surat="Surat Permohonan Ijin Determinasi";
  }
?>

<div class="inner-wrapper">
    <section role="main" class="content-body">
<!-- Start body -->
    <header class='page-header'>
    <h2>Pesan Surat</h2>

    <div class='right-wrapper pull-right'>
        <ol class='breadcrumbs'>
            <li>
                <a href='index.html'>
                <i class='fa fa-home'></i>
                </a>
            </li>
            <li><span>Daftar Pesanan Surat</span></li>
        </ol>
        <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
    </div>
    </header>

    <!-- start: page -->
    <section class="panel">
        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <form method='POST' action='<?= base_url('kontrol/ubah_pesansurat/'.$jenis_surat.'/'.$s['id_surat']) ?>'>
                        <header class='panel-heading'>
                            <div class='panel-actions'>
                                <a href='#' class='fa fa-caret-down'></a>
                                <a href='#' class='fa fa-times'></a>
                            </div>

                            <h2 class='panel-title'>Rekap Pemesanan Pesan</h2>
                        </header>
                        <div class="panel-body">
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Jenis Surat  </label>
                                <div class='col-sm-9'>
                                <input type='text' name='jenis_surat' class='form-control' value='<?=$surat?>' disabled/>
                                <input type='hidden' name='jenis_surat' class='form-control' value='<?=$surat?>' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama  </label>
                                <div class='col-sm-9'>
                                <input type='text' name='nama' class='form-control' value='<?=$nama?>' disabled/>
                                <input type='hidden' name='nama' class='form-control' value='<?=$nama?>' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>NIM  </label>
                                <div class='col-sm-9'>
                                <input type='text' name='nim' class='form-control' value='<?=$nim?>' disabled/>
                                <input type='hidden' name='nim' class='form-control' value='<?=$nim?>' />
                                </div>
                            </div>
                            <?php if($s['id_jenis_surat']==1) : ?>
                                <div class='form-group'>
                                    <label class='col-md-3 control-label'>Semester Aktif</label>
                                    <div class='col-md-6'>
                                        <select data-plugin-selectTwo class='form-control populate' name='smst_jln'>
                                            <option value='<?=$smst_jln?>' selected='selected'><?=$smst_jln?></option>
                                            <option value='I (SATU)'>I (SATU)</option>
                                            <option value='II (DUA)'>II (DUA)</option>
                                            <option value='III (TIGA)'>III (TIGA)</option>
                                            <option value='IV (EMPAT)'>IV (EMPAT)</option>
                                            <option value='V (LIMA)'>V (LIMA)</option>
                                            <option value='VI (ENAM)'>VI (ENAM)</option>
                                            <option value='VII (TUJUH)'>VII (TUJUH)</option>
                                            <option value='VIII (DELAPAN)'>VIII (DELAPAN)</option>
                                            <option value='IX (SEMBILAN)'>IX (SEMBILAN)</option>
                                            <option value='X (SEPULUH)'>X (SEPULUH)</option>
                                            <option value='XI (SEBELAS)'>XI (SEBELAS)</option>
                                            <option value='XII (DUA BELAS)'>XII (DUA BELAS)</option>
                                            <option value='XIII (TIGA BELAS)'>XIII (TIGA BELAS)</option>
                                            <option value='XIV (EMPAT BELAS)'>XIV (EMPAT BELAS)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alamat  </label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='alamat1' class='form-control' required><?= $alamat ?></textarea>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==15) : ?>
                                <div class='form-group'>
                                    <label class='col-md-3 control-label'>Semester Aktif</label>
                                    <div class='col-md-6'>
                                        <select data-plugin-selectTwo class='form-control populate' name='smst_jln'>
                                            <option value='<?=$smst_jln?>' selected='selected'><?=$smst_jln?></option>
                                            <option value='I (SATU)'>I (SATU)</option>
                                            <option value='II (DUA)'>II (DUA)</option>
                                            <option value='III (TIGA)'>III (TIGA)</option>
                                            <option value='IV (EMPAT)'>IV (EMPAT)</option>
                                            <option value='V (LIMA)'>V (LIMA)</option>
                                            <option value='VI (ENAM)'>VI (ENAM)</option>
                                            <option value='VII (TUJUH)'>VII (TUJUH)</option>
                                            <option value='VIII (DELAPAN)'>VIII (DELAPAN)</option>
                                            <option value='IX (SEMBILAN)'>IX (SEMBILAN)</option>
                                            <option value='X (SEPULUH)'>X (SEPULUH)</option>
                                            <option value='XI (SEBELAS)'>XI (SEBELAS)</option>
                                            <option value='XII (DUA BELAS)'>XII (DUA BELAS)</option>
                                            <option value='XIII (TIGA BELAS)'>XIII (TIGA BELAS)</option>
                                            <option value='XIV (EMPAT BELAS)'>XIV (EMPAT BELAS)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Tempat Lahir  </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='tempat_lahir' class='form-control' value='<?=$tempat?>' disabled/>
                                        <input type='hidden' name='tempat_lahir' class='form-control' value='<?=$tempat?>' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Tanggal Lahir  </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='tanggal_lahir' class='form-control' value='<?=$tanggal?>' disabled/>
                                        <input type='hidden' name='tanggal_lahir' class='form-control' value='<?=$tanggal?>' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Email  </label>
                                    <div class='col-sm-9'>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='fa fa-envelope'></i>
                                            </span>
                                            <input type='email' name='email' class='form-control' value='<?=$email?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='col-sm-9'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Jurusan  </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='jurusan' class='form-control' value='<?=$jurusan?>' disabled/>
                                        <input type='hidden' name='jurusan' class='form-control' value='<?=$jurusan?>' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Fakultas  </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='fakultas' class='form-control' value='<?=$fakultas?>' disabled/>
                                        <input type='hidden' name='fakultas' class='form-control' value='<?=$fakultas?>' />
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==4 || $s['id_jenis_surat']==5 || $s['id_jenis_surat']==6 ||
                                         $s['id_jenis_surat']==7 || $s['id_jenis_surat']==8 || $s['id_jenis_surat']==9 ||
                                         $s['id_jenis_surat']==10|| $s['id_jenis_surat']==11|| $s['id_jenis_surat']==14) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap </b> </label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Maksud/Keperluan </span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='maksud' class='form-control' required/><?=$s['maksud']?></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pembimbing 1 </span></label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                            <option value='<?=$dosbing1['pembimbing1']?>' selected='selected'><?=$dosbing1['nama']?></option>
                                            <?php foreach ($dosen as $row) : ?>
                                                <?php if($row['nip'] != $dosbing1['pembimbing1']) : ?>
                                                    <option value='<?=$row['nip']?>'><?=$row['nama']?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pembimbing 2 </span></label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                            <option value='<?=$dosbing2['pembimbing2']?>' selected='selected'><?=$dosbing2['nama']?></option>
                                            <?php foreach ($dosen as $row) : ?>
                                                <?php if($row['nip'] != $dosbing2['pembimbing2']) : ?>
                                                    <option value='<?=$row['nip']?>'><?=$row['nama']?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian </b> </label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi </span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' value='<?=$s['lokasi']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten </span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='kota' class='form-control' value='<?=$s['kota']?>' required/>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==13) :?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Keperluan Surat <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='keperluan' class='form-control' required><?=$s['maksud']?></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-md-3 control-label'>Semester Aktif <span class='required'>*</span></label>
                                    <div class='col-md-6'>
                                        <select data-plugin-selectTwo class='form-control populate' name='smst_jln' required>
                                            <option value='<?=$smst_jln?>' selected='selected'><?=$smst_jln?></option>
                                            <option value='I (SATU)'>I (SATU)</option>
                                            <option value='II (DUA)'>II (DUA)</option>
                                            <option value='III (TIGA)'>III (TIGA)</option>
                                            <option value='IV (EMPAT)'>IV (EMPAT)</option>
                                            <option value='V (LIMA)'>V (LIMA)</option>
                                            <option value='VI (ENAM)'>VI (ENAM)</option>
                                            <option value='VII (TUJUH)'>VII (TUJUH)</option>
                                            <option value='VIII (DELAPAN)'>VIII (DELAPAN)</option>
                                            <option value='IX (SEMBILAN)'>IX (SEMBILAN)</option>
                                            <option value='X (SEPULUH)'>X (SEPULUH)</option>
                                            <option value='XI (SEBELAS)'>XI (SEBELAS)</option>
                                            <option value='XII (DUA BELAS)'>XII (DUA BELAS)</option>
                                            <option value='XIII (TIGA BELAS)'>XIII (TIGA BELAS)</option>
                                            <option value='XIV (EMPAT BELAS)'>XIV (EMPAT BELAS)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Orangtua <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='nama_ortu' value='<?=$s['nama_ortu']?>' class='form-control' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alamat Rumah <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='alamat' value='<?=$s['alamat_surat']?>' class='form-control' required/><?=$s['alamat_surat']?></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pekerjaan </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='pekerjaan' value='<?=$s['pekerjaan']?>' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>NIP </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='nip' value='<?=$s['nip']?>' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Instansi</label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='instansi' value='<?=$s['instansi']?>' class='form-control' /></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pangkat/Golongan </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='pangkat' value='<?=$s['pangkat']?>' class='form-control' /></textarea>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==2) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Pengajuan Paspor</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kantor/Cabang Imigrasi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' value='<?=$s['lokasi']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' value='<?=$s['kota']?>' required/>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==18) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Rekan PKL</b></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' value='<?=$s['lokasi']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' value='<?=$s['kota']?>' required/>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==19) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Pelaksanaan</b></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alasan Pengunduran Diri </label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='maksud' class='form-control' required><?=$s['maksud']?></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' value='<?=$s['lokasi']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' value='<?=$s['kota']?>' required/>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==20) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Praktikum</b></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Praktikum </label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='judul' class='form-control' required><?=$s['judul']?></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Periode </label>
                                    <div class='col-sm-5'>
                                    <input type='text' name='smst_jln' placeholder='Ganjil/Genap' class='form-control' value='<?=$s['smst_jln']?>' required/>
                                    </div>
                                    <div class='col-sm-4'>
                                    <input type='text' name='subyek' placeholder='20xx / 20xx' class='form-control' value='<?=$s['subyek']?>' required/>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==21) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='judul' class='form-control' required><?=$s['judul']?></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                            <option value='<?=$dosbing1['pembimbing1']?>' selected='selected'><?=$dosbing1['nama']?></option>
                                            <?php foreach ($dosen as $row) : ?>
                                                <?php if($row['nip'] != $dosbing1['pembimbing1']) : ?>
                                                    <option value='<?=$row['nip']?>'><?=$row['nama']?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pembimbing 2 <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                        <option value='<?=$dosbing2['nip']?>' selected='selected'><?=$dosbing2['nama']?></option>
                                        <?php foreach ($dosen as $row) : ?>
                                            <?php if($row['nip'] != $dosbing2['pembimbing2']) : ?>
                                                <option value='<?=$row['nip']?>'><?=$row['nama']?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='lokasi' class='form-control' value='<?=$s['lokasi']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='nama_pimpinan' class='form-control' value='<?=$s['nama_pimpinan']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alamat Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='kota' class='form-control' value='<?=$s['kota']?>' required/><?=$s['kota']?></textarea>
                                    </div>
                                </div>
                            <?php elseif($s['id_jenis_surat']==17) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap </b> </label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Tugas Mata Kuliah </span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='subyek' class='form-control' value='<?=$s['subyek']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Maksud/Keperluan </span></label>
                                    <div class='col-sm-9'>
                                    <textarea type='text' name='maksud' class='form-control' value='<?=$s['maksud']?>' required/></textarea>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Dosen Pengampu </span></label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                        <option value='<?=$dosbing1['nip']?>' selected='selected'><?=$dosbing1['nama']?></option>
                                        <?php foreach ($dosen as $row) : ?>
                                            <?php if($row['nip'] != $dosbing1['pembimbing1']) : ?>
                                                <option value='<?=$row['nip']?>'><?=$row['nama']?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian </b> </label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi </span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' value='<?=$s['lokasi']?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten </span></label>
                                    <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' value='<?=$s['kota']?>' required/>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Mahasiswa Lain</b> </label>
                                </div>
                                <?php if($v['mhs1']) : ?>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 1 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs1' class='form-control' value='<?=$v['mhs1']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim1' class='form-control' value='<?=$v['nim1']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 2 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs2' class='form-control' value='<?=$v['mhs2']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim2' class='form-control' value='<?=$v['nim2']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 3 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs3' class='form-control' value='<?=$v['mhs3']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim3' class='form-control' value='<?=$v['nim3']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 4 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs4' class='form-control' value='<?=$v['mhs4']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim4' class='form-control' value='<?=$v['nim4']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 5 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs5' class='form-control' value='<?=$v['mhs5']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim5' class='form-control' value='<?=$v['nim5']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 6 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs6' class='form-control' value='<?=$v['mhs6']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim6' class='form-control' value='<?=$v['nim6']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 7 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs7' class='form-control' value='<?=$v['mhs7']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim7' class='form-control' value='<?=$v['nim7']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 8 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs8' class='form-control' value='<?=$v['mhs8']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim8' class='form-control' value='<?=$v['nim8']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 9 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs9' class='form-control' value='<?=$v['mhs9']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim9' class='form-control' value='<?=$v['nim9']?>' disabled/>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Mahasiswa 10 </span></label>
                                        <div class='col-sm-6'>
                                        <input type='text' name='mhs10' class='form-control' value='<?=$v['mhs10']?>' disabled/>
                                        </div>
                                        <div class='col-sm-3'>
                                        <input type='text' name='nim10' class='form-control' value='<?=$v['nim10']?>' disabled/>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Keterangan </span></label>
                                        <div class='col-sm-9'>
                                        <label class='col-sm-9 control-label'>Tidak terdapat data mahasiswa lain </span></label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php elseif($s['id_jenis_surat']==3) : ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Keterangan Ijazah</b> </label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nomer Ijazah  </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='no_ijazah' class='form-control' value='<?=$no_ijazah?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Tahun Lulus  </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='tahun_lulus' class='form-control' value='<?=$tahun_lulus?>' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Tanggal Lulus  </label>
                                    <div class='col-sm-3'>
                                        <input type='text' class='form-control' value='<?=$tgl_ijazah?>' disabled />
                                    </div>
                                    <div class='col-sm-6'>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='fa fa-calendar'></i>
                                            </span>
                                            <input type='text' name='tgl_ijazah' class='form-control' value='<?=$tanggal1?>' data-plugin-datepicker />
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Lampiran  </label>
                                    <div class='col-sm-9'>
                                    <?php if($s['scan']!='') : ?>
                                        <a href='<?= base_url('kontrol/lihat_ijazah/'.$s['scan']) ?>' class='mb-xs mt-xs mr-xs btn btn-warning' target="_blank">Lihat Ijazah</a>
                                    <?php else : ?>
                                        Masih menunggu unggahan scan ijazah, Mahasiswa belum mengunggah scan ijazah
                                    <?php endif; ?>
                                </div>
                                <?php if($s['dikirim']=='1') : ?>
                                    <div class='form-group'>
                                        <h2 class='panel-title'><br><br><br>Alamat Pengiriman</h2><br>
                                        <div class='col-sm-12'>
                                            <textarea name='kirim_alamat' class='form-control' value='<?=$s['kirim_alamat']?>' required /><?=$s['kirim_alamat']?></textarea>
                                        <br>
                                        </div>
                                        <div class='col-sm-6'>
                                            <input type='text' name='kirim_kabupaten' value='<?=$s['kirim_kabupaten']?>' required class='form-control' />
                                        </div>
                                        <div class='col-sm-6'>
                                            <input type='text' name='kirim_provinsi' value='<?=$s['kirim_provinsi']?>' required class='form-control' />
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Input Tarif Ekspedisi (tanpa titik)  </label>
                                        <div class='input-group mb-md'>
                                            <span class='input-group-addon'>Rp.</span>
                                                <input type='text' class='form-control' name='tarif' value='<?=$s['tarif']?>'>
                                            <span class='input-group-addon btn-warning'>.00</span>
                                        </div>
                                        <label class='col-sm-3 control-label'>Status Pembayaran  </label>
                                        <div class='input-group mb-md'>
                                        <?php if($s['scan_bayar']!='') : ?>
                                            <a href='<?= base_url('kontrol/lihat_bukti_bayar/'.$s['scan_bayar']) ?>' class='mb-xs mt-xs mr-xs btn btn-warning' target="_blank">Bukti Pembayaran</a>
                                        <?php else : ?>
                                            Masih menunggu pembayaran
                                        <?php endif; ?>
                                    </div>
                                    <div class='col-sm-12 text-right'>
                                        <a href='<?= base_url('kontrol/cek_tarif') ?>'>
                                            <button type='button' class='mb-xs mt-xs mr-xs btn btn-warning'>Cek Tarif Ekspedisi</button>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <footer class='panel-footer'>
                            <?php if ($s['id_jenis_surat'] != 16) :?>
                            <div class='row'>
                                <div class='col-sm-12 text-right'>
                                    <button class='btn btn-warning'>Perbarui Data</button>
                                </div>
                            </div>
                            <?php endif ?>
                        </footer>
                    </form>
                </section>
            </div>
        </div>
    </section>
<!-- End body -->
    </section>
</div>
