<?php
    $this->load->view('konfig/tgl_indo');

    $nama = $s['nama'];
    $nim = $s['nim'];
    $tempat = $s['tempat_lahir'];
    $tanggal = $s['tanggal_lahir'];
    $jurusan = $s['jurusan'];
    $fakultas = $s['fakultas'];
    $email = $s['nim'].'@students.uii.ac.id';
    $tgl = tgl_indo($tanggal);
    $angkatan = $s['angkatan'];
    $status = $s['status_mahasiswa'];

?>

<div class="inner-wrapper">
    <section class="content-body">

        <header class='page-header'>
            <h2>Master Mahasiswa</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Data Master</span></li>
                <li><span>Data Master Mahasiswa</span></li>
                <li><span>Detail</span></li>
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

                    <h2 class='panel-title'>Data Diri</h2>
                </header>
                <div class='panel-body'>


                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Nama <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nama' class='form-control' value='<?=$nama?>' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>NIM <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nim' class='form-control' value='<?=$nim?>' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Angkatan <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nim' class='form-control' value='<?=$angkatan?>' disabled/>
                    </div>
                    </div>
                    <form method='POST' action='<?= base_url('kontrol/ubah_status/'.$s['nim'])?>'>
                        <div class='form-group'>
                            <label class='col-sm-3 control-label'>Status Mahasiswa <span class='required'></span></label>
                            <div class='col-sm-3'>
                                <input type='text' class='form-control' value='<?=$status?>' disabled/>
                            </div>
                            <div class='col-sm-3'>
                                <select data-plugin-selectTwo class='form-control populate' name='ubah_status' required>
                                    <option value='Aktif'>Aktif</option>
                                    <option value='Tidak Aktif'>Tidak Aktif</option>
                                    <option value='Lulus'>Lulus</option>
                                </select>
                            </div>
                            <div class='row'>
                                <div class='col-sm-3 text-center'>
                                <button class='btn btn-primary'>Update</button>
                                </div>
                            </div>
                        </div>
                    </form><br>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Tempat Lahir <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='tempat_lahir' class='form-control' value='<?= $tempat ?>' readonly/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Tanggal Lahir <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='tanggal_lahir' class='form-control' value='<?=$tgl?>' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Email <span class='required'></span></label>
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
                    <label class='col-sm-3 control-label'>Jurusan <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='jurusan' class='form-control' value='<?=$jurusan?>' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Fakultas <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='fakultas' class='form-control' value='<?=$fakultas?>' disabled/>
                    </div>
                    </div>
                </div>
                </section>
            </div>
            </div>
        </section>

        <section class='panel'>
            <div class='row'>
            <div class='col-xs-12'>
                <section class='panel'>
                <header class='panel-heading'>
                    <div class='panel-actions'>
                    <a href='#' class='fa fa-caret-down'></a>
                    <a href='#' class='fa fa-times'></a>
                    </div>

                    <h2 class='panel-title'>Data Orangtua</h2>
                </header>
                <div class='panel-body'>


                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Nama Orangtua <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nama' class='form-control' value='' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Instansi <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nim' class='form-control' value='' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>NIP <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='tempat_lahir' class='form-control' value='' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Pangkat/Golongan <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='tanggal_lahir' class='form-control' value='' disabled/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Alamat Instansi <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='tanggal_lahir' class='form-control' value='' disabled/>
                    </div>
                    </div>
                    <div class='col-sm-9'>

                    </div>
                    </div>

                </div>
                </section>
            </div>
            </div>
        </section>
    </section>
</div>
