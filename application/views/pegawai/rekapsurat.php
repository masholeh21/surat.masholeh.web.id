<div class="inner-wrapper">
    <section class="content-body">
        <header class='page-header'>
            <h2>Rekap Surat</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                    <li>
                        <a href='index.php'>
                            <i class='fa fa-home'></i>
                        </a>
                    </li>
                    <li><span>Rekap Surat</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>
        <!-- start: page -->
        <div class='row'>
            <div class='col-lg-6'>
                <section class='panel form-wizard' id='w1'>



                </section>
            </div>
            <div class='col-lg-6'>
                <section class='panel form-wizard' id='w2'>


                </section>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12'>
                <form class='form-horizontal' novalidate='novalidate' method='POST' action='<?= base_url('kontrol/hasil_rekap') ?>'>
                <section class='panel form-wizard' id='w4'>
                    <header class='panel-heading'>
                        <div class='panel-actions'>
                            <a href='#' class='fa fa-caret-down'></a>
                            <a href='#' class='fa fa-times'></a>
                        </div>
                        <h2 class='panel-title'>Rekap Pemesanan Surat</h2>
                    </header>
                    <div class='panel-body'>
                        <div class='panel-body'>
                            <div class='form-group'>
                                <label class='col-md-3 control-label'>Jurusan</label>
                                <div class='col-md-6'>
                                    <select data-plugin-selectTwo class='form-control populate' name='jurusan'>
                                        <option value='D3 Analis Kimia'>Diploma Tiga Analis Kimia</option>
                                        <option value='Pendidikan Kimia'>Pendidikan Kimia</option>
                                        <option value='Profesi Apoteker'>Profesi Apoteker</option>
                                        <option value='Statistika'>Statistika</option>
                                        <option value='Kimia'>Kimia</option>
                                        <option value='Farmasi'>Farmasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-md-3 control-label'>Rentang Waktu</label>
                                <div class='col-md-6'>
                                    <input type='date' class='form-control' name='tanggal_awal'>
                                        <span class='input-group-addon'>to</span>
                                        <input type='date' class='form-control' name='tanggal_akhir'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class='panel-footer'>
                        <div class='row'>
                            <div class='col-sm-12 text-right'>
                                <button class='btn btn-primary'>Lihat Rekap</button>
                            </div>
                        </div>
                    </footer>
                </section>
                </form>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <section class='panel form-wizard' id='w3'>
                </section>
            </div>
            <div class='col-md-6'>
                <section class='panel form-wizard' id='w5'>


                </section>
            </div>
        </div>
    </section>
</div>
