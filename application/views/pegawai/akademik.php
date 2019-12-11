<div class="inner-wrapper">
    <section class="content-body">
<!-- Start:body -->

        <header class="page-header">
            <h2>Tahun Akademik</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tahun Akademik</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <div class="row">
            <div class="col-xs-12">
                <section class="panel form-wizard" id="w4">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Tahun Akademik</h2>
                    </header>
                    <div class="panel-body">


                        <form class="form-horizontal" novalidate="novalidate" method="POST" action="<?= base_url('kontrol/akademik') ?>">
                            <div class="panel-body">
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Tahun Akademik</label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <?php
                                                        echo"<input type='text' class='form-control' name='awal' placeholder='$s[awal]' value='$s[awal]'>";
                                                    ?>
                                                </div>
                                                <div class="visible-xs mb-md"></div>
                                                <div class="col-sm-2">
                                                    <?php
                                                        echo"<input type='text' class='form-control' name='akhir' placeholder='$s[akhir]' value='$s[akhir]'>";
                                                    ?>
                                                </div>
                                                <div class="visible-xs mb-md"></div>
                                                <div class="col-sm-2">
                                                    <?php
                                                        echo"<input type='text' class='form-control' placeholder='$s[semester]' disabled>";
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Semester</label>
                                        <div class="col-md-6">
                                            <?php
                                            echo"<select class='form-control' data-plugin-multiselect id='ms_example1' name='semester'  placeholder='$s[semester]'>>
                                                <option value='Ganjil'>Ganjil</option>
                                                <option value='Genap'>Genap</option>
                                            </select>";
                                            ?>
                                        </div>
                            </div>
                    </div>
                </div>
                    <footer class='panel-footer'>
                        <div class='row'>
                            <div class='col-sm-12 text-right'>
                                <button class='btn btn-primary'>Ubah</button>
                            </div>
                        </div>
                    </footer>
                    </form>
                </section>

            </div>

        </div>
        <div class="row">
            <div class="col-xs-12">
                <section class="panel form-wizard" id="w4">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Rekening</h2>
                    </header>
                    <div class="panel-body">

                        <form class="form-horizontal" novalidate="novalidate" method="POST" action="<?= base_url('kontrol/rekening') ?>">
                            <div class="panel-body">
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Nomer Rekening</label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <?php
                                                        echo"<input type='text' class='form-control' name='rekening' placeholder='$t[rekening]' value='$t[rekening]'>";
                                                    ?>
                                                </div>
                                                <div class="visible-xs mb-md"></div>
                                                <div class="col-sm-5">
                                                    <?php
                                                        echo"<input type='text' class='form-control' name='bank' placeholder='$t[bank]' value='$t[bank]'>";
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Atas Nama</label>
                                        <div class="col-md-6">
                                            <?php
                                                echo"<input type='text' class='form-control' name='an' placeholder='$t[an]' value='$t[an]'>";
                                            ?>
                                        </div>
                            </div>
                    </div>
                </div>
                    <footer class='panel-footer'>
                        <div class='row'>
                            <div class='col-sm-12 text-right'>
                                <button class='btn btn-primary'>Ubah</button>
                            </div>
                        </div>
                    </footer>
                    </form>
                </section>

            </div>

        </div>

<!-- End:body -->
    </section>
</div>
