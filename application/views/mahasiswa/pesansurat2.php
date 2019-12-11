<?php

$jenis_surat = $this->input->post('jenis_surat', true);
$nama = $this->input->post('nama', true);
$nim = $this->input->post('nim', true);
$jurusan = $this->input->post('jurusan', true);
$fakultas = $this->input->post('fakultas', true);
$email = $this->input->post('email', true);
$dikirim = $this->input->post('dikirim', true);
$tempat_lahir = $this->input->post('tempat_lahir', true);
$tanggal_lahir = $this->input->post('tanggal_lahir', true);
$perijinan = $this->input->post('perijinan', true);

if ($jenis_surat == 1) {
    $surat = "Surat Keterangan Berkelakuan Baik";
} elseif ($jenis_surat == 2) {
    $surat = "Surat Pengantar Pengajuan Paspor";
} elseif ($jenis_surat == 3) {
    $surat = "Surat Keterangan Menyelesaikan Studi";
} elseif ($jenis_surat == 4) {
    $surat = "Surat Permohonan Pembelian Bahan Penelitian";
} elseif ($jenis_surat == 5) {
    $surat = "Surat Permohonan Bantuan Bahan Penelitian";
} elseif ($jenis_surat == 6) {
    $surat = "Surat Ijin Observasi";
} elseif ($jenis_surat == 7) {
    $surat = "Surat Ijin Studi Pendahuluan";
} elseif ($jenis_surat == 8) {
    $surat = "Permohonan Ijin Penelitian";
} elseif ($jenis_surat == 9) {
    $surat = "Surat Permohonan Ethical Clearance";
} elseif ($jenis_surat == 10) {
    $surat = "Surat Pengantar Tugas Akhir";
} elseif ($jenis_surat == 11) {
    $surat = "Surat Ijin Peminjaman Laboratorium";
} elseif ($jenis_surat == 12) {
    $surat = "Surat Permohonan Izin Determinasi";
} elseif ($jenis_surat == 13) {
    $surat = "Surat Keterangan Aktif Kuliah";
} elseif ($jenis_surat == 14) {
    $surat = "Surat Permohonan Ijin Praktik Kerja Lapangan";
} elseif ($jenis_surat == 15) {
    $surat = "Surat Keterangan Beasiswa";
} elseif ($jenis_surat == 16) {
    $surat = "Surat Keterangan Akreditasi";
} elseif ($jenis_surat == 17) {
    $surat = "Surat Ijin Tugas Mata Kuliah";
} elseif ($jenis_surat == 18) {
    $surat = "Surat Pengantar Praktik Kerja Lapangan";
} elseif ($jenis_surat == 19) {
    $surat = "Surat Pengunduran Diri Praktik Kerja Lapangan";
} elseif ($jenis_surat == 20) {
    $surat = "Surat Keterangan Asisten Praktikum";
} elseif ($jenis_surat == 21) {
    $surat = "Surat Permohonan Determinasi";
}
?>

<div class="inner-wrapper">
    <section role="main" class="content-body">
        <header class='page-header'>
        <h2>Pesan Surat</h2>

        <div class='right-wrapper pull-right'>
            <ol class='breadcrumbs'>
            <li>
                <a href='index.html'>
                <i class='fa fa-home'></i>
                </a>
            </li>
            <li><span>Pesan Surat</span></li>
            </ol>

            <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
        </div>
        </header>

        <!-- start: page -->
        <section class='panel'>
            <div class='row'>
                <div class='col-xs-12'>
                    <section class='panel'>
                    <header class='panel-heading'>
                        <div class='panel-actions'>
                        <a href='#' class='fa fa-caret-down'></a>
                        <a href='#' class='fa fa-times'></a>
                        </div>
                        <h2 class='panel-title'>Rekap Pemesanan Pesan</h2>
                    </header>

                    <div class='panel-body'>
                        <form method='POST' action='<?= base_url('kontrol/pesan_surat') ?>'>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Jenis Surat </label>
                                <div class='col-sm-9'>
                                    <input type='text' class='form-control' value='<?= $surat ?>' disabled/>
                                    <input type='hidden' name='jenis_surat' class='form-control' value='<?= $jenis_surat ?>' />
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama' class='form-control' value='<?= $nama ?>' disabled/>
                                    <input type='hidden' name='nama' class='form-control' value='<?= $nama ?>' />
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>NIM </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nim' class='form-control' value='<?= $nim ?>' disabled/>
                                    <input type='hidden' name='nim' class='form-control' value='<?= $nim ?>' />
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Tempat/Tanggal Lahir </label>
                                <div class='col-sm-5'>
                                    <input type='text' name='tempat_lahir' class='form-control' value='<?= $tempat_lahir ?>' disabled/>
                                    <input type='hidden' name='tempat_lahir' class='form-control' value='<?= $tempat_lahir ?>' />
                                </div>
                                <div class='col-sm-4'>
                                    <input type='text' name='tanggal_lahir' class='form-control' value='<?= $tanggal_lahir ?>' disabled/>
                                    <input type='hidden' name='tanggal_lahir' class='form-control' value='<?= $tanggal_lahir ?>' />
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Email </label>
                                <div class='col-sm-9'>
                                    <div class='input-group'>
                                    <span class='input-group-addon'>
                                        <i class='fa fa-envelope'></i>
                                    </span>
                                    <input type='email' name='email' class='form-control' value='<?= $email ?>' disabled/>
                                    <input type='hidden' name='email' class='form-control' value='<?= $email ?>' />
                                    </div>
                                </div>
                                <div class='col-sm-9'>
                                </div>
                            </div>

                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Jurusan </label>
                            <div class='col-sm-9'>
                                <input type='text' name='jurusan' class='form-control' value='<?= $jurusan ?>' disabled/>
                                <input type='hidden' name='jurusan' class='form-control' value='<?= $jurusan ?>' />
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Fakultas </label>
                            <div class='col-sm-9'>
                                <input type='text' name='fakultas' class='form-control' value='<?= $fakultas ?>' disabled/>
                                <input type='hidden' name='fakultas' class='form-control' value='<?= $fakultas ?>' />
                            </div>
                            </div>
                            <?php
                        if ($jenis_surat == 2){ ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Pengajuan Paspor</b><span class='required'></span></label>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kantor/Cabang Imigrasi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <input type='text' name='lokasi' class='form-control' placeholder='Ex: Provinsi DI Yogyakarta' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <input type='text' name='kota' class='form-control' required/>
                                </div>
                            </div>
                            <?php

                        }
                        if ($jenis_surat == 1) { ?>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                    <label class='col-md-3 control-label'>Semester Aktif</label>
                                    <div class='col-md-6'>
                                    <select data-plugin-selectTwo class='form-control populate' name='smst_jln'>
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
                                    </div></div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alamat <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='alamat1' class='form-control' required></textarea>
                                    </div>
                                    </div>
                            <?php

                        }
                        if ($jenis_surat == 3) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                                <label class='col-md-3 control-label'>Ijazah</label>
                                <div class='col-sm-8'>
                                <div class='row'>
                                    <div class='col-sm-6'>
                                    <input type='text' class='form-control' placeholder='No. Ijazah' name='no_ijazah'>
                                    </div>
                                    <div class='visible-xs mb-md'></div>
                                    <div class='col-sm-6'>
                                    <input type='text' class='form-control' placeholder='Tahun Lulus' name='tahun_lulus'>
                                    </div>
                                    <div class='visible-xs mb-md'></div>
                                </div>

                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Tanggal Ijazah <span class='required'>*</span></label>
                                <div class='col-sm-3'>
                                <input type='date' name='tgl_ijazah' class='form-control' required/>
                                </div>
                            </div>
                            <?php

                        }
                        if ($jenis_surat == 4 or $jenis_surat == 5) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='judul' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>

                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle();">
                                        <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen2 as $dosen2) { ?>
                                            <option value="<?= $dosen2['nip'] ?>"><?= $dosen2['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kebutuhan Bahan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <textarea type='text' name='bahan' class='form-control' required></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 6) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='judul' class='form-control' required></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle()">
                                    <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                    <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                        <option value='' selected='selected'>Pilih Nama Dosen</option>
                                            <?php foreach ($dosen2 as $dosen2) { ?>
                                                <option value="<?= $dosen2['nip'] ?>"><?= $dosen2['nama'] ?></option>
                                            <?php
                                        } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Maksud/Keperluan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <textarea type='text' name='maksud' class='form-control' required></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 7) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='judul' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle();">
                                    <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen2 as $dosen1) { ?>
                                            <option value="<?= $dosen1['nip'] ?>"><?= $dosen1['nama'] ?></option>
                                        <?php
                                    } ?>
                                    </select>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Maksud/Keperluan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <textarea type='text' name='maksud' class='form-control' required/></textarea>
                                </div>
                                </div>

                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 8) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Subyek Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <input type='text' name='subyek' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='judul' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle();">
                                    <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen2 as $dosen1) { ?>
                                            <option value="<?= $dosen1['nip'] ?>"><?= $dosen1['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Maksud/Keperluan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <textarea type='text' name='maksud' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 9) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Subyek Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <input type='text' name='subyek' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Judul Skripsi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='judul' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle();">
                                    <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen2 as $dosen1) { ?>
                                            <option value="<?= $dosen1['nip'] ?>"><?= $dosen1['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Keperluan Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <textarea type='text' name='maksud' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Tempat Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/></textarea>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 10 or $jenis_surat == 11) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='judul' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle()">
                                    <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen2 as $dosen1) { ?>
                                            <option value="<?= $dosen1['nip'] ?>"><?= $dosen1['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Maksud/Keperluan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <textarea type='text' name='maksud' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 13) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Keperluan Surat <span class='required'>*</span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='keperluan' class='form-control' required/>
                            </div>
                            </div>
                                <label class='col-md-3 control-label'>Semester Aktif <span class='required'>*</span></label>
                                <div class='col-md-6'>
                                    <select data-plugin-selectTwo class='form-control populate' name='smst_jln' required>
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
                                <input type='text' name='nama_ortu' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Alamat Rumah <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='alamat_rumah' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pekerjaan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='pekerjaan' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>NIP </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nip' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Instansi</label>
                                <div class='col-sm-9'>
                                    <input type='text' name='instansi' class='form-control' /></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pangkat/Golongan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='pangkat' class='form-control' /></textarea>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 14) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Maksud dan Tujuan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <textarea type='text' name='maksud' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pelaksanaan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                <input type='text' name='pelaksanaan' class='form-control' required/></textarea>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                <div class='col-sm-8'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php
                                    } ?>
                                    </select>
                                </div>
                                <div class='col-sm-1'>
                                    <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle();">
                                    <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='form-group' id='dosen2' style='display:none'>
                                <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen2 as $dosen1) { ?>
                                            <option value="<?= $dosen1['nip'] ?>"><?= $dosen1['nama'] ?></option>
                                        <?php
                                    } ?>
                                    </select>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                                </div>
                            <?php

                        }
                        if ($jenis_surat == 17) { ?>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Perijinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='perijinan1' value='<?= $perijinan ?>' class='form-control' disabled/>
                                    <input type='hidden' name='perijinan1' value='<?= $perijinan ?>' class='form-control'/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Keperluan/Kegiatan <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='maksud' class='form-control' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Tugas Mata Kuliah <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='subyek' class='form-control' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Dosen Pengampu Mata Kuliah <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                    <option value='' selected='selected'>Pilih Nama Dosen</option>
                                        <?php foreach ($dosen as $dosen) { ?>
                                            <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                        <?php

                                    } ?>
                                    </select>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                </div>
                                <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='lokasi' class='form-control' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nama_pimpinan' class='form-control' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <input type='text' name='kota' class='form-control' required/>
                                </div>
                            </div>
                            <?php
                            if ($this->input->post('perijinan') == 'grup') { ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Mahasiswa</b><span class='required'>*</span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa <span class='required'>*</span></label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs1' placeholder='Nama' class='form-control' required/>
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim1' placeholder='NIM' class='form-control' required/>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 2</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs2' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim2' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 3</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs3' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim3' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 4</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs4' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim4' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 5</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs5' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim5' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 6</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs6' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim6' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 7</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs7' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim7' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 8</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs8' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim8' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 9</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs9' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim9' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Mahasiswa 10</label>
                                    <div class='col-sm-6'>
                                    <input type='text' name='mhs10' placeholder='Nama' class='form-control' />
                                    </div>
                                    <div class='col-sm-3'>
                                    <input type='text' name='nim10' placeholder='NIM' class='form-control' />
                                    </div>
                                </div>
                            <?php
                            }
                        }
                        if ($jenis_surat == 18) { ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Rekan PKL</b></label>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Rekan PKL </label>
                                    <div class='col-sm-6'>
                                        <input type='text' name='mhs1' class='form-control' placeholder='Nama Mahasiswa' />
                                    </div>
                                    <div class='col-sm-3'>
                                        <input type='text' name='nim1' class='form-control' placeholder='NIM Mahasiswa' />
                                    </div>
                                    </div><div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>

                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='lokasi' class='form-control' required/>
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='nama_pimpinan' class='form-control' />
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='kota' class='form-control' required/>
                                    </div>
                                    </div>
                                <?php

                            }
                            if ($jenis_surat == 19) { ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Pengunduran Diri</b><span class='required'></span></label>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alasan <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='maksud' class='form-control' required/>
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Rekan PKL </label>
                                    <div class='col-sm-6'>
                                        <input type='text' name='mhs1' class='form-control' placeholder='Nama Mahasiswa' />
                                    </div>
                                    <div class='col-sm-3'>
                                        <input type='text' name='nim1' class='form-control' placeholder='NIM Mahasiswa' />
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='lokasi' class='form-control' required/>
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='nama_pimpinan' class='form-control' />
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Kota/Kabupaten <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='kota' class='form-control' required/>
                                    </div>
                                    </div>
                                <?php

                            }
                            if ($jenis_surat == 21) { ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Judul Penelitian <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                    <textarea type='text' name='judul' class='form-control' required></textarea>
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Pembimbing 1 <span class='required'>*</span></label>
                                    <div class='col-sm-8'>
                                        <select name='pembimbing1' data-plugin-selectTwo class='form-control populate' required>
                                        <option value='' selected='selected'>Pilih Nama Dosen</option>
                                            <?php foreach ($dosen as $dosen) { ?>
                                                <option value="<?= $dosen['nip'] ?>"><?= $dosen['nama'] ?></option>
                                            <?php

                                        } ?>
                                        </select>
                                    </div>
                                    <div class='col-sm-1'>
                                        <a href='#' id='tambahdosen' onClick="$('#dosen2').toggle();">
                                        <i class='fa fa-plus-square-o' style='font-size:20px;'></i>
                                        </a>
                                    </div>
                                    </div>
                                    <div class='form-group' id='dosen2' style='display:none'>
                                    <label class='col-sm-3 control-label'>Pembimbing 2 </label>
                                    <div class='col-sm-9'>
                                        <select name='pembimbing2' data-plugin-selectTwo class='form-control populate'>
                                        <option value='' selected='selected'>Pilih Nama Dosen</option>
                                            <?php foreach ($dosen2 as $dosen1) { ?>
                                                <option value="<?= $dosen1['nip'] ?>"><?= $dosen1['nama'] ?></option>
                                            <?php

                                        } ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Lokasi Penelitian</b><span class='required'></span></label>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='lokasi' class='form-control' required/>
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Pimpinan </label>
                                    <div class='col-sm-9'>
                                        <input type='text' name='nama_pimpinan' class='form-control' />
                                    </div>
                                    </div>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Alamat Instansi <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <textarea type='text' name='kota' class='form-control' required/></textarea>
                                    </div>
                                    </div>
                                <?php

                            }
                            if ($jenis_surat == 20) { ?>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Nama Praktikum <span class='required'>*</span></label>
                                    <div class='col-sm-9'>
                                        <input type="text" class="form-control" name='nama_praktikum' required>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-3 control-label'>Periode <span class='required'>*</span></label>
                                    <div class='col-sm-5'>
                                        <select name='smst_jln' data-plugin-selectTwo class='form-control populate' required>
                                            <option value='Ganjil'>Ganjil</option>
                                            <option value='Genap'>Genap</option>
                                        </select>
                                    </div>
                                    <div class='col-sm-4'>
                                        <input type='text' name='subyek' placeholder='20xx / 20xx' class='form-control' required/>
                                    </div>
                                </div>
                                <?php

                            }
                            if ($jenis_surat == 15) { ?>
                                    <div class='form-group'>
                                    <label class='col-sm-3 control-label'><b>Data Pelengkap</b><span class='required'></span></label>

                                    </div>
                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>Semester Aktif <span class='required'>*</span></label>
                                        <div class='col-md-6'>
                                        <select data-plugin-selectTwo class='form-control populate' name='smst_jln' required>
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
                                        </div></div>
                                        <div class='form-group'>
                                        <label class='col-sm-3 control-label'>Alamat Rumah <span class='required'>*</span></label>
                                        <div class='col-sm-9'>
                                            <textarea type='text' name='alamat' class='form-control' required/></textarea>
                                        </div>
                                        </div>
                                <?php

                            }
                            if ($dikirim == '1') { ?>
                                <input type='hidden' id='checkboxExample3' name='dikirim1' value='<?= $dikirim ?>'>
                                <div class='form-group'>
                                    <h2 class='panel-title'>Alamat Pengiriman</h2><br>
                                    <div class='col-sm-12'>
                                    <textarea name='kirim_alamat' class='form-control' placeholder='Alamat Lengkap: No. Rumah, Jalan, RT/RW, Kelurahan, Kecamatan' /></textarea>
                                    <br></div>
                                    <div class='col-sm-6'>
                                    <input type='text' name='kirim_kabupaten' placeholder='Kabupaten' class='form-control' />
                                    </div>
                                    <div class='col-sm-6'>
                                    <input type='text' name='kirim_provinsi' placeholder='Provinsi' class='form-control' />
                                    </div>
                                </div>
                            <?php

                        } ?>
                            </div>

                            <footer class='panel-footer'>
                                <div class='row'>
                                    <div class='col-sm-12 text-right'>
                                        <button class='btn btn-primary'>Ajukan Formulir</button>
                                    </div>
                                </div>
                            </footer>
                        </form>
                    </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('#tambahdosen').click(function(){
            $('#dosen2').toggle();
        });
    });
</script>
