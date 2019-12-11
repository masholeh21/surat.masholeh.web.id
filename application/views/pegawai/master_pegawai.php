<div class="inner-wrapper">
    <section class="content-body">

        <header class="page-header">
            <h2>Master Pegawai</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Master Pegawai</span></li>
                    <li><span>Data Master Pegawai</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Daftar Pegawai FMIPA</h2>
            </header>

            <div class="panel-body">
                <a href="<?= base_url('kontrol/tambah_pegawai') ?>"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah Pegawai</button></a>
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($data as $r)
                        {?>
                            <tr class='gradeX'>
                                <td><?= $r['nip']?></td>
                                <td><?= $r['nama']?></td>
                                <td>
                                <a class='mb-xs mt-xs mr-xs btn btn-danger' data-href='#'
                                    data-toggle='modal' data-target='#confirm-delete-<?=$r['nip']?>'><i class='fa fa-trash-o'></i></a>

                                    <div class='modal fade' id='confirm-delete-<?=$r['nip']?>' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-body'>
                                                    Apakah Anda Yakin?
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                    <a href='<?= base_url('kontrol/hapuspegawai/'.$r['nip']) ?>' class='btn btn-danger btn-ok'>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

    </section>
</div>
