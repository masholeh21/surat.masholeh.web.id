<div class="inner-wrapper">
    <section class="content-body">

        <header class='page-header'>
            <h2>Data Master Jurusan</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Edit Data Unit</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class='panel'>

            <div class='row'>
            <div class='col-xs-12'>
            <form method='POST' action='<?= base_url('kontrol/perbaruiunit/'.$c['id']) ?>'>
                <section class='panel'>
                <header class='panel-heading'>
                    <div class='panel-actions'>
                    <a href='#' class='fa fa-caret-down'></a>
                    <a href='#' class='fa fa-times'></a>
                    </div>

                    <h2 class='panel-title'>Edit Unit Fakultas</h2>
                </header>
                <div class='panel-body'>


                <div class='form-group'>
                    <label class='col-sm-3 control-label'>ID Unit <span class='required'></span></label>
                    <div class='col-sm-9'>
                    <input type='text' name='id' class='form-control' value='<?= $c['id'] ?>' required/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-3 control-label'>Bidang/Unit <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='nama_instansi' class='form-control' value='<?=$c['nama_instansi']?>' required/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Keterangan Akreditasi </label>
                    <div class='col-sm-9'>
                        <input type='text' name='ket_akreditasi' value='<?=$c['ket_akreditasi']?>' class='form-control' />
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-md-3 control-label'>Nilai Akreditasi</label>
                    <div class='col-md-6'>
                        <select data-plugin-selectTwo class='form-control populate' name='akreditasi' value='<?=$c['akreditasi']?>'>
                            <option value='A'>A</option>
                            <option value='B'>B</option>
                            <option value='C'>C</option>
                            <option value='Belum Terakreditasi'>Belum Terakreditasi</option>
                        </select>
                    </div>
                    </div>

                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Jangka Waktu </label>
                    <div class='col-sm-4'>
                        <input type='date' name='jangka_awal' class='form-control' value='<?=$c['jangka_awal']?>' />
                    </div>
                    <div class='col-sm-1'>sampai</div>
                    <div class='col-sm-4'>
                        <input type='date' name='jangka_akhir' class='form-control' value='<?=$c['jangka_akhir']?>' />
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Nama Jabatan <span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='text' name='jabatan' class='form-control' value='<?=$c['jabatan']?>' required/>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Nama Pimpinan <span class='required'></span></label>
                    <div class='col-sm-6'>
                        <input type='text' name='nama_pimpinan' class='form-control' value='<?=$c['nama_pimpinan']?>' required/>
                    </div>
                    <div class='col-sm-3'>
                        <input type='text' name='NIK' class='form-control' placeholder='NIP' value='<?=$c['nip']?>' required/>
                    </div>
                    </div>

                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>Kode Surat </label>
                    <div class='col-sm-9'>
                        <input type='text' name='kode_surat' class='form-control' value='<?=$c['kode_surat']?>' />
                    </div>
                    </div>
                </div>
                <footer class='panel-footer'>
                    <div class='row'>
                    <div class='col-sm-12 text-right'>
                        <button class='btn btn-primary'>Perbarui</button>
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
