<div class="inner-wrapper">
    <section class="content-body">
        <header class='page-header'>
            <h2>Data Master Dosen</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Data Dosen</span></li>
                <li><span>Tambah Data Dosen</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class='panel'>

            <div class='row'>
            <div class='col-xs-12'>
            <form method='POST' action='<?= base_url('kontrol/inputdosen') ?>'>
                <section class='panel'>
                <header class='panel-heading'>
                    <div class='panel-actions'>
                    <a href='#' class='fa fa-caret-down'></a>
                    <a href='#' class='fa fa-times'></a>
                    </div>

                    <h2 class='panel-title'>Tambah Data Dosen</h2>
                </header>
                <div class='panel-body'>


                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Nama <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nama' class='form-control' required/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>NIP <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nip' class='form-control' required/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-md-3 control-label'>Unit</label>
                    <div class='col-md-6'>
                        <select data-plugin-selectTwo class='form-control populate' name='jabatan'>

                            <option value='Statistika'>Statistika</option>
                            <option value='Kimia'>Kimia</option>
                            <option value='Farmasi'>Farmasi</option>
                            <option value='Pendidikan Kimia'>Pendidikan Kimia</option>
                            <option value='D3 Statistika'>D3 Statistika</option>
                        </select>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Fakultas <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='fakultas' class='form-control' value='Fakultas Matematika dan Ilmu Pengetahuan Alam' disabled/>
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
