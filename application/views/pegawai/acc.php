<div class="inner-wrapper">
    <section class="content-body">
<!-- Start: body -->

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
                    <form action="<?= base_url('kontrol/acc/'.$idS.'/'.$idJns) ?>" method="post">
                        <div class="form-group">
                            <?php if($idJns==3 || $idJns==18 || $idJns==19) : ?>
                                <label class='col-md-3 control-label'>Disetujui Oleh</label>
                                <div class='col-md-6'>
                                    <input type='hidden' name='acc' class='form-control' value='<?= $m['id'] ?>' /><?= $m['nama_pimpinan'] ?>
                                </div>
                            <?php else : ?>
                                <label class='col-md-3 control-label'>Disetujui Oleh</label>
                                <div class='col-md-6'>
                                <select data-plugin-selectTwo class='form-control populate' name='acc'>
                                    <option value='1'>Dekan</option>
                                    <option value='2'>Wakil Dekan Bidang Sumber Daya</option>
                                    <option value='3'>Wakil Dekan Bidang Keagamaan, Kemahasiswaan, dan Alumni</option>
                                </select>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class='form-group'>
                            <label class='col-sm-3 control-label'>Nomer Surat<span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='nomersurat' class='form-control' value='<?= $m['nomersurat'] ?>' disabled/>
                            </div>
                        </div>
                </div>
                <footer class='panel-footer'>
                    <div class='row'>
                        <div class='col-sm-12 text-right'>
                            <button class='btn btn-primary'>Disetujui Pimpinan</button>
                        </div>
                    </div>
                </footer>
                    </form>
            </section>
        </div>
    </div>

<!-- End: body -->
    </section>
</div>
