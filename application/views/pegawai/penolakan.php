<div class="inner-wrapper">
    <section class="content-body">
<!-- Start:body -->
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
                    <div class="panel-body">
                    <form action="<?= base_url('kontrol/penolakan/'.$idJns.'/'.$id) ?>" method="post">
                        <div class='form-group'>
                            <label class='col-sm-3 control-label'>Alasan Penolakan<span class='required'></span></label>
                            <div class='col-sm-9'>
                                <input type='text' name='penolakan' class='form-control' required/>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </footer>
                    </form>
                </div>
            </div>
        </section>
<!-- End:body -->
    </section>
</div>
