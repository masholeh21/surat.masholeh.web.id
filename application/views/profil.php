<?php
function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    return $bulan . '/' . $tanggal . '/' . $tahun;
}
?>

<div class="inner-wrapper">
    <section role="main" class="content-body">
        <?= $this->session->flashdata('message'); ?>
        <div class='panel panel-sign'>
            <div class='panel-title-sign mt-xl text-right'>
                <h2 class='title text-uppercase text-bold m-none'><i class='fa fa-user mr-xs'></i> Profil</h2>
            </div>
            <div class='panel-body'>
                    <?php if ($akses == 1) { ?>
                    <form method='POST' action='<?= base_url('kontrol/ubah_profil/') ?>'>
                        <div class='form-group mb-lg'>
                        <label>NIM</label>
                            <input type="hidden" name="id" value="<?= $user['nim'] ?>">
                            <input name='nim' type='text' class='form-control input-lg' value="<?= $user['nim'] ?>" disabled />
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Nama</label>
                            <input name='nama' type='text' class='form-control input-lg' value='<?= $user['nama'] ?>' />
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Tempat Lahir</label>
                            <input name='tempat_lahir' type='text' class='form-control input-lg' value='<?= $user['tempat_lahir'] ?>' />
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Tanggal Lahir</label>
                            <div class='input-group'>
                                <span class='input-group-addon'>
                                    <i class='fa fa-calendar'></i>
                                </span>
                                <input type='text' name='tanggal_lahir' value='<?= tgl_indo($user['tanggal_lahir']); ?>' data-plugin-datepicker class='form-control'>
                            </div>
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Jurusan</label>
                            <input name='jurusan' type='text' class='form-control input-lg' value='<?= $user['jurusan'] ?>' disabled />
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Fakultas</label>
                            <input name='fakultas' type='text' class='form-control input-lg' value='<?= $user['fakultas'] ?>' disabled />
                        </div>
                    <?php

                } elseif ($akses == 2) { ?>
                    <form method='POST' action='<?= base_url('kontrol/ubah_profil/') ?>'>
                        <div class='form-group mb-lg'>
                        <input type="hidden" name="id" value="<?= $user['nip'] ?>">
                        <label>NIP</label>
                        <input name='nim' type='text' class='form-control input-lg' value="<?= $user['nip'] ?>" disabled />
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Nama</label>
                            <input name='nama' type='text' class='form-control input-lg' value="<?= $user['nama'] ?>" disabled/>
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Tempat Lahir</label>
                            <input name='tempat_lahir' type='text' class='form-control input-lg' disabled/>
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Tanggal Lahir</label>
                            <div class='input-group'>
                                <span class='input-group-addon'>
                                    <i class='fa fa-calendar'></i>
                                </span>
                                <input type='text' name='tanggal_lahir' data-plugin-datepicker class='form-control' disabled>
                            </div>
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Nama Instansi</label>
                            <input name='jurusan' type='text' class='form-control input-lg' value="<?= $jurusan['nama_instansi'] ?>" disabled />
                        </div>
                        <div class='form-group mb-lg'>
                            <label>Fakultas</label>
                            <input name='fakultas' type='text' class='form-control input-lg' value="Fakultas Matematika dan Ilmu Pengetahuan Alam" disabled />
                        </div>
                    <?php

                } ?>

                    <div class='form-group mb-lg'>
                        <label>Password Lama</label>
                        <input name='pwd_lama' type='password' class='form-control input-lg' />
                    </div>
                    <div class='form-group mb-none'>
                        <div class='row'>
                            <div class='col-sm-6 mb-lg'>
                                <label>Password Baru</label>
                                <input name='pwd_baru' type='password' class='form-control input-lg' />
                            </div>
                            <div class='col-sm-6 mb-lg'>
                                <label>Password Baru (Konfirmasi)</label>
                                <input name='pwd_confirm' type='password' class='form-control input-lg' />
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="akses" value="<?= $akses ?>">

                    <div class='row'>
                        <div class='col-sm-8'>
                            <div class='checkbox-custom checkbox-default'>
                                <input id='AgreeTerms' name='agreeterms' type='checkbox'/>
                            </div>
                        </div>
                        <div class='col-sm-4 text-right'>
                            <button type='submit' class='btn btn-primary hidden-xs'>Update</button>
                            <!-- <button type='submit' class='btn btn-primary btn-block btn-lg visible-xs mt-lg'>Update</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
