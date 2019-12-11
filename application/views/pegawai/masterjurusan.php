<div class="inner-wrapper">
    <section class="content-body">
<!-- Start: body-->
        <header class="page-header">
            <h2>Data Master Jurusan</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Data Master</span></li>
                    <li><span>Data Master Jurusan</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">  </h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-md">
                            <a href="<?= base_url('kontrol/tambahunit') ?>"><button id="addToTable" class="btn btn-primary">Tambah Posisi<i class="fa fa-plus"></i></button></a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bidang</th>
                            <th>Akreditasi</th>
                            <th>Keterangan Akreditasi</th>
                            <th>Jabatan</th>
                            <th>Nama Pejabat</th>
                            <th>NIK</th>
                            <th>Kode Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    foreach ($data as $t) { ?>
                        <tr class='gradeX'>
                                <td><?= $no++ ?></td>
                                <td><?= $t['nama_instansi'] ?></td>
                                <td><?= $t['akreditasi'] ?></td>
                                <td><?= $t['ket_akreditasi'] ?></td>
                                <td><?= $t['jabatan'] ?></td>
                                <td><?= $t['nama_pimpinan'] ?></td>
                                <td><?= $t['nip'] ?></td>
                                <td><?= $t['kode_surat'] ?></td>
                                <td class='actions'>
                                    <a href='#' class='hidden on-editing save-row'><i class='fa fa-save'></i></a>
                                    <a href='#' class='hidden on-editing cancel-row'><i class='fa fa-times'></i></a>
                                    <a href='<?= base_url('kontrol/editunit/'.$t['id']) ?>' class='on-default edit-row'><i class='fa fa-pencil'></i></a>
                                    <a class='mb-xs mt-xs mr-xs btn btn-danger' data-href='#'
                                    data-toggle='modal' data-target='#confirm-delete-<?=$t['id']?>'><i class='fa fa-trash-o'></i></a>

                                    <div class='modal fade' id='confirm-delete-<?=$t['id']?>' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-body'>
                                                    Apakah Anda Yakin?
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                    <a href='<?= base_url('kontrol/hapusunit/'.$t['id']) ?>' class='btn btn-danger btn-ok'>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
<!-- End: body-->
    </section>
</div>
