<?php
$this->load->view('konfig/tgl_indo');

$tgl = $user['tanggal_lahir'];
$tanggal_lahir = tgl_indo($tgl);
$tempat_lahir = $user['tempat_lahir'];
$lahirDown = strtolower($tempat_lahir);
$lahirUC = ucwords($lahirDown);
?>

<div class="inner-wrapper">
    <section role="main" class="content-body">
        <header class='page-header'>
            <h2>Pesan Surat</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                    <li>
                        <a href='<?= base_url('home') ?>'>
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
                    <form method='POST' action='<?= base_url('kontrol/pesan_surat2') ?>'>
                        <header class='panel-heading'>
                            <div class='panel-actions'>
                                <a href='#' class='fa fa-caret-down'></a>
                                <a href='#' class='fa fa-times'></a>
                            </div>

                            <h2 class='panel-title'>Formulir Pemesanan Pesan</h2>
                        </header>
                        <div class='panel-body'>
                            <div class='form-group'>
                                <label class='col-md-3 control-label'>Jenis Surat <span class='required'>*</span></label>
                                <div class='col-md-6'>
                                    <select data-plugin-selectTwo class='form-control populate' name='jenis_surat' id='jenis_surat' onchange='showDiv();'>
                                            <option value='16'>Surat Keterangan Akreditasi</option>
                                            <option value='13'>Surat Keterangan Aktif Kuliah</option>
                                            <option value='15'>Surat Keterangan Beasiswa</option>
                                            <option value='1'>Surat Keterangan Berkelakuan Baik</option>
                                            <option value='2'>Surat Pengantar Pengajuan Paspor</option>
                                            <option value='#'>Surat Rekomendasi</option>
                                            <option value='3'>Surat Keterangan Alumni</option>
                                    </select>
                                </div>
                            </div>
                            <div class='form-group' style='display:none' id='perijinan'>
                                <label class='col-sm-3 control-label'>Perijinan </label>
                                <div class='col-sm-9'>
                                    <select data-plugin-selectTwo class='form-control populate' name='perijinan' id='perijinan' onchange='showDiv();'>
                                            <option value='individu'>Ijin Individu</option>
                                            <option value='grup'>Ijin Grup</option>
                                    </select>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Nama </label>
                                <div class='col-sm-9'>
                                    <input type='text' class='form-control' value='<?= $user['nama'] ?>' disabled/>
                                    <input type='hidden' name='nama' class='form-control' value='<?= $user['nama'] ?>' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>NIM </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='nim' class='form-control' value='<?= $user['nim'] ?>' disabled/>
                                    <input type='hidden' name='nim' class='form-control' value='<?= $user['nim'] ?>' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Email <span class='required'>*</span></label>
                                <div class='col-sm-9'>
                                    <div class='input-group'>
                                        <span class='input-group-addon'>
                                            <i class='fa fa-envelope'></i>
                                        </span>
                                        <?php if ($user['status_mahasiswa'] == 'aktif') { ?>
                                            <input type='email' class='form-control' placeholder='<?= $user['nim'] ?>@students.uii.ac.id' disabled/>
                                            <input type='hidden' name='email' class='form-control' value='<?= $user['nim'] ?>@students.uii.ac.id' />
                                        <?php
                                    } else { ?>
                                            <input type='email' name='email' class='form-control' placeholder='Email Anda' required/>
                                        <?php
                                    } ?>

                                    </div>
                                </div>
                                <div class='col-sm-9'>

                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Tempat / Tanggal Lahir </label>
                                <div class='col-sm-4'>
                                    <input type='text' name='tempat_lahir' class='form-control' value='<?= $lahirUC ?>' required />
                                </div>
                                <div class='col-sm-5'>
                                    <input type='text' name='tanggal_lahir' class='form-control' value='<?= $tanggal_lahir ?>' disabled/>
                                    <input type='hidden' name='tanggal_lahir' class='form-control' value='<?= $tanggal_lahir ?>' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Jurusan </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='jurusan' class='form-control' value='<?= $user['jurusan'] ?>' disabled/>
                                    <input type='hidden' name='jurusan' class='form-control' value='<?= $user['jurusan'] ?>' />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-3 control-label'>Fakultas </label>
                                <div class='col-sm-9'>
                                    <input type='text' name='fakultas' class='form-control' value='<?= $user['fakultas'] ?>' disabled/>
                                    <input type='hidden' name='fakultas' class='form-control' value='<?= $user['fakultas'] ?>' />
                                </div>
                            </div>
                            <div id='dikirim' style='display:none'>
                                <input type='hidden' name='dikirim' value='0'>
                                <input type='checkbox' name='dikirim' value='1'>
                            <label for='checkboxExample3'>Surat Dikirim</label>
                            </div>
                            <div>
                                <span class='required'>*Surat dikirim, membutuhkan biaya pengiriman ekspedisi</span>
                            </div>
                        </div>
                            <footer class='panel-footer'>
                                <div class='row'>
                                    <div class='col-sm-12 text-right'>
                                        <button class='btn btn-primary'>Selanjutnya</button>
                                    </div>
                                </div>
                            </footer>
                    </form>
                    </section>
                </div>
            </div>
            <aside id='sidebar-right' class='sidebar-right'>
                <div class='nano'>
                    <div class='nano-content'>
                        <a href='#' class='mobile-close visible-xs'>
                            Collapse <i class='fa fa-chevron-right'></i>
                        </a>

                        <div class='sidebar-right-wrapper'>

                            <div class='sidebar-widget widget-calendar'>
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin='dark' ></div>

                                <ul>
                                    <li>
                                        <time datetime='2014-04-19T00:00+00:00'>04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>

                            <div class='sidebar-widget widget-friends'>
                                <h6>Friends</h6>
                                <ul>
                                    <li class='status-online'>
                                        <figure class='profile-picture'>
                                            <img src='assets/images/!sample-user.jpg' alt='Joseph Doe' class='img-circle'>
                                        </figure>
                                        <div class='profile-info'>
                                            <span class='name'>Joseph Doe Junior</span>
                                            <span class='title'>Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class='status-online'>
                                        <figure class='profile-picture'>
                                            <img src='assets/images/!sample-user.jpg' alt='Joseph Doe' class='img-circle'>
                                        </figure>
                                        <div class='profile-info'>
                                            <span class='name'>Joseph Doe Junior</span>
                                            <span class='title'>Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class='status-offline'>
                                        <figure class='profile-picture'>
                                            <img src='assets/images/!sample-user.jpg' alt='Joseph Doe' class='img-circle'>
                                        </figure>
                                        <div class='profile-info'>
                                            <span class='name'>Joseph Doe Junior</span>
                                            <span class='title'>Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class='status-offline'>
                                        <figure class='profile-picture'>
                                            <img src='assets/images/!sample-user.jpg' alt='Joseph Doe' class='img-circle'>
                                        </figure>
                                        <div class='profile-info'>
                                            <span class='name'>Joseph Doe Junior</span>
                                            <span class='title'>Hey, how are you?</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </aside>
        </section>
    </section>
</div>

<script>
    $(document).ready(function () {
    $('#dikirim').hide();
    $('#perijinan').hide();
    });

    function showDiv() {
    if ($('#jenis_surat').val() == '3') {
    $('#dikirim').show();
    $('#perijinan').hide();
    }
    else if ($('#jenis_surat').val() == '17') {
    $('#dikirim').hide();
    $('#perijinan').show();
    }
    else {
    $('#dikirim').hide();
    $('#perijinan').hide();
    }
    }
</script>
