<div class="inner-wrapper">
    <section class="content-body">

        <header class='page-header'>
            <h2>Data Mahasiswa</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Data Mahasiswa / Tambah Data Mahasiswa</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class='panel'>
            <div class='row'>
                <div class='col-xs-12'>
                <form method='POST' action='<?= base_url('kontrol/inputmhs') ?>'>
                    <section class='panel'>
                        <header class='panel-heading'>
                            <div class='panel-actions'>
                            <a href='#' class='fa fa-caret-down'></a>
                            <a href='#' class='fa fa-times'></a>
                            </div>

                            <h2 class='panel-title'>Tambah Data Mahasiswa</h2>
                        </header>
                        <div class='panel-body'>

                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Nama <span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='nama' class='form-control' required/>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>NIM <span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='nim' class='form-control' required/>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-md-3 control-label'>Jenis Kelamin</label>
                            <div class='col-md-6'>
                                <select data-plugin-selectTwo class='form-control populate' name='jk'>

                                    <option value='L'>Laki-laki</option>
                                    <option value='P'>Perempuan</option>
                                </select>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-md-3 control-label'>Status</label>
                            <div class='col-md-6'>
                                <select data-plugin-selectTwo class='form-control populate' name='status'>

                                    <option value='Aktif'>Aktif</option>
                                    <option value='Tidak Aktif'> Tidak Aktif</option>
                                    <option value='Lulus'>Lulus</option>
                                </select>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Tempat Lahir <span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='tempat_lahir' class='form-control' required/>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Tanggal Lahir <span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='date' name='tanggal_lahir' class='form-control' required/>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Email <span class='required'></span></label>
                            <div class='col-sm-9'>
                                <div class='input-group'>
                                <span class='input-group-addon'>
                                    <i class='fa fa-envelope'></i>
                                </span>
                                <input type='email' name='email' class='form-control'/>
                                </div>
                            </div>
                            <div class='col-sm-9'>

                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-md-3 control-label'>Jurusan</label>
                            <div class='col-md-6'>
                                <select data-plugin-selectTwo class='form-control populate' name='jurusan'>

                                    <option value='Statistika'>Statistika</option>
                                    <option value='Kimia'>Kimia</option>
                                    <option value='Farmasi'>Farmasi</option>
                                    <option value='Pendidikan Kimia'>Pendidikan Kimia</option>
                                    <option value='D3 Analis Kimia'>D3 Analis Kimia</option>
                                </select>
                            </div>
                            </div>
                            <div class='form-group'>
                            <label class='col-sm-3 control-label'>Fakultas <span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='fakultas' class='form-control' value='Fakultas Matematika dan Ilmu Pengetahuan Alam' readonly/>
                            </div>
                            </div>
                        </div>
                        <footer class='panel-footer'>
                            <div class='row'>
                            <div class='col-sm-12 text-right'>
                                <button class='btn btn-primary'>Input</button>
                            </div>
                            </div>
                        </footer>
                    </section>
                    </form>
                </div>
            </div>
        </section>
    </section>
</div>
